<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    public function index()
    {
        $data['mhs'] = Mahasiswa::all();
        return view('pages.welcome')->with($data);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
