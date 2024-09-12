<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    private $userModel;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->userModel    =   new UserModel();
    }

    /**
     * @return string
     */
    public function index()
    {
        helper( [ 'form' ] );
        $data   =   [
            'title' =>  'Login'
        ];

        if ( $this->request->getMethod() == 'POST' ){
            // create rules
            $rules  =   [
                'emailFrm'  =>  'required|min_length[5]|max_length[50]|valid_email',
                'pwdFrm'    =>  'required|min_length[4]|max_length[50]',
            ];
            // create messages for rules
            $messages   =   [
                'emailFrm'  =>  [
                    'required'      =>  'Enter your email',
                    'min_length'    =>  'Min Length is 5',
                    'max_length'    =>  'Max Length is 50',
                    'valid_email'   =>  'Enter valid email'
                ],

                'pwdFrm'  =>  [
                    'required'      =>  'Enter your password',
                    'min_length'    =>  'Min Length is 5',
                    'max_length'    =>  'Max Length is 50'
                ],
            ];
            // if don't have validate
            if ( !$this->validate( $rules, $messages ) )
            {
                $data[ 'validation' ]   =   $this->validator;
            }else{
                $user   =   $this->userModel->where('email', $this->request->getVar( 'emailFrm' ) )->first();
                $this->setUserSession( $user );
                return redirect()->to( '/dashboard' );

            }
        }

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Login' );
    }


    public function setUserSession( $user )
    {
        $data   =   [
            'id'         => $user[ 'id' ],
            'name'       => $user[ 'name' ],
            'email'      => $user[ 'email' ],
            'isLoggedIn' => true
        ];
        session()->set( $data );
        return true;
    }

    /**
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     * @throws \ReflectionException
     */
    public function register()
    {
        helper( ['form'] );

        $data   =   [
            'title' =>  'Register'
        ];

        if ( $this->request->getMethod() == 'POST' )
        {
            /**
             * Rules and messages for validation
             * @since 12.09.2024
             * @author MiSCapu
             */
            $rules  =   [
                'nameFrm'       =>  'required|min_length[2]|max_length[200]',
                'emailFrm'      =>  'required|min_length[2]|max_length[255]|valid_email|is_unique[users.email]',
                'pwdFrm'        =>  'required|min_length[4]|max_length[255]',
                'cfPwdFrm'      =>  'matches[pwdFrm]'
            ];
            $messages   =   [
                'nameFrm'       =>  [
                    'required'      =>  'Enter your name',
                    'min_length'    =>  'Enter name min length 2 characters',
                    'max_length'    =>  'Enter name max length 200 characters',
                ],

                'emailFrm'       =>  [
                    'required'      =>  'Enter your email',
                    'min_length'    =>  'Enter email min length 2 characters',
                    'max_length'    =>  'Enter email max length 200 characters',
                    'valid_email'   =>  'Enter valid email',
                    'is_unique'     =>  'email already use'
                ],

                'pwdFrm'       =>  [
                    'required'      =>  'Enter your password',
                    'min_length'    =>  'Enter password min length 4 characters',
                    'max_length'    =>  'Enter password max length 255 characters',
                ],

                'cfPwdFrm'       =>  [
                    'matches'      =>  'Password not equal',
                ],
            ];

            if ( ! $this->validate( $rules, $messages ) )
            {
                $data[ 'validation' ]   =   $this->validator;
            }else
                {
                    $newData    =   [
                        'name'          =>  $this->request->getVar( 'nameFrm' ),
                        'email'         =>  $this->request->getVar( 'emailFrm' ),
                        'password'      =>  $this->request->getVar( 'pwdFrm' ),
                    ];

                    $this->userModel->save( $newData );
                    $session    =   session();
                    $session->setFlashdata( 'success', 'Successful registration' );
                    return redirect()->to( '/' );
                }
        }

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Register' );
    }

    /**
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to( '/' );
    }


}
