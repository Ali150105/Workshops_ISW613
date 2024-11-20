<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SpeciesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Species extends BaseController
{
    private $speciesModel;

    public function __construct()
    {
      $this->speciesModel = model(SpeciesModel::class);
    }

    public function index()
    {
        $species = $this->speciesModel->findAll();
        $data['species'] = $species;
        $data['title'] = 'Listado de Species - Home';
        return view('shared/header', $data).view('species/index',$data).view('shared/footer');
    }
}
