<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // fitur ci4 findAll
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Data Komik',
            'komik' => $komik
        ];

        // $komikModel = new \App\Models\KomikModel();
        // $komikModel = new KomikModel();

        return view('komik/index', $data);
    }
}
