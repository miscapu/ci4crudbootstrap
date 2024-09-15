<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    private $userModel;

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        $this->userModel    =   new UserModel();
    }

    public function index()
    {
        $data   =   [
            'title' =>  'Dashboard'
        ];

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Dashboard' );
    }

    public function showUsers()
    {
        $data   =   [
            'users' =>  $this->userModel->findAll()
        ];

        return $this->response->setJSON( $data );
    }
}
