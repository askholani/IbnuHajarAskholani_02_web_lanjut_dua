<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function index () {
        return 'Selamat Datang';
    }

    public function about () {
        return 'Ibnu Hajar Askholani, 2141720170';
    }

    public function articles ($id) {
        echo 'Halaman Artikel ' ,$id;
    }
}
