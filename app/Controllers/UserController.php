<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    /**
     * @return string
     */
    public function index()
    {
        $data   =   [
            'title' =>  'Login'
        ];

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Login' );
    }

    public function register()
    {
        $data   =   [
            'title' =>  'Register'
        ];

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Register' );
    }


}
