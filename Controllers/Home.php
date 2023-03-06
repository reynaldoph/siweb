<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/overview');
    }
    public function about ($nama = null, $umur = 0)
    {
        echo "hi nama saya adalah $nama. usia saya $umur tahun";
    }
}
