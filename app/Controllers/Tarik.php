<?php

namespace App\Controllers;

class Tarik extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'metode penarikan',
            'css' => 'tarik.css',
        ];

        return view("user/tarik/metode", $data);
    }

    public function metode()
    {
    }
}
