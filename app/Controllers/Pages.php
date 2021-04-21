<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Komik'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'tim' => [
                [
                    'nama' => 'Muhammad Aulia Asshiddiqie',
                    'kota' => 'Cianjur',
                    'umur' => '22'
                ],
                [
                    'nama' => 'Muhammad Sidiq',
                    'kota' => 'Cianjur',
                    'umur' => '21'
                ]
            ]
        ];

        return view('pages/about', $data);
    }
}
