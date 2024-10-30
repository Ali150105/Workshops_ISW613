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

        $data['user'] = $_SESSION['user'] ?? null;
        $data['provinces'] = $provinces;
        return view('shared/header',$data).view('user/signup', $data).view('shared/footer');
    }
}
