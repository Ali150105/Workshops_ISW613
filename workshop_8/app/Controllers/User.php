<?php

namespace App\Controllers;

class User extends BaseController
{

    private $db;

    public function __construct()
    {
      $this->db = \Config\Database::connect();
    }
    public function signup(): string
    {
        $query   = $this->db->query('SELECT id, name FROM provinces');
        $provinces = $query->getResult();

        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        $data['user'] = $user;
        $data['title'] = "User Registration";
        $data['provinces'] = $provinces;
        $data['error_msg'] = '';
        return view('shared/header',$data)
                .view('user/signup', $data)
                  .view('shared/footer');
    }

    public function login(): string {
      

        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        $data['user'] = $user;
        $data['title'] = "User Login";
        $data['error_msg'] = '';
        return view('shared/header',$data)
                .view('user/login', $data)
                  .view('shared/footer');
    }
}
