<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel =   new ProductModel();
    }

    public function index()
    {
        $data   =   [
            'title' =>  'Products'
        ];

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Products' );
    }

    /**
     * @return ResponseInterface
     */
    public function showProducts()
    {
        $data   =   [
            'products'  =>  $this->productModel->findAll()
        ];

        return $this->response->setJSON( $data );
    }

    public function addProduct()
    {
        helper( [ 'form' ] );

        $data   =   [
            'title' =>  'Register Product'
        ];

        if ( $this->request->getMethod()  == 'POST' )
        {
            /**
             * Rules and messages for validation
             * @since 18.09.2024
             * @author MiSCapu
             */
            $rulesProducts  =   [
                'nameFrm'       =>  'required|min_length[2]|max_length[200]',
                'qtyFrm'        =>  'required|numeric|max_length[5]',
                'priceFrm'      =>  'required|numeric|max_length[11]',
            ];
            $messagesProducts   =   [
                'nameFrm'       =>  [
                    'required'      =>  'Enter your name',
                    'min_length'    =>  'Enter name min length 2 characters',
                    'max_length'    =>  'Enter name max length 200 characters',
                ],

                'qtyFrm'       =>  [
                    'required'      =>  'Enter your email',
                    'numeric'       =>  'Quantity numeric',
                    'max_length'    =>  'Enter email max length 5 characters',

                ],

                'priceFrm'       =>  [
                    'required'      =>  'Enter your password',
                    'numeric'       =>  'Numeric price',
                    'max_length'    =>  'Enter password max length 11 characters',
                ],
            ];

            if ( ! $this->validate( $rulesProducts, $messagesProducts ) )
            {
                $data[ 'validationProducts' ]   =   $this->validator;
            }else
            {
                $newData    =   [
                    'name'          =>  $this->request->getVar( 'nameFrm' ),
                    'quantity'         =>  $this->request->getVar( 'priceFrm' ),
                    'price'      =>  $this->request->getVar( 'qtyFrm' ),
                ];

                $this->productModel->save( $newData );
                $session    =   session();
                $session->setFlashdata( 'productSuccess', 'Product Successful registration...' );
                return redirect()->to( '/products' );
            }
        }

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/AddProduct' );
    }
}
