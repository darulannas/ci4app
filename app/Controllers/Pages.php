<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Rekam Jejak IT',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Me',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Karang Anyar RT 01 RW 03',
                    'kota' => 'Tangerang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Permata Sepatan RT 02 RW 05',
                    'kota' => 'Kab Tangerang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
