<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class ControllerMahasiswa extends Controller
{
    public function index()
    {
        return view('form-mahasiswa');
    }
    public function store(Request $request)
    {
        $simpan = Mahasiswa::create($request->all());
        return $simpan ? redirect(route('home'))->with('sukses','Data tersimpan') : redirect(route('home'))->with('gagal','Gagal menyimpan data');
    }
    public function show($id)
    {
        $data['mhs'] = Mahasiswa::find($id);
        return view('form-mahasiswa')->with($data);
    }
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::find($id);
        $update = $mhs->update($request->all());
        return $update ? redirect(route('home'))->with('sukses','Data telah diperbaharui') : redirect(route('home'))->with('gagal','Data gagal diperbaharui');
    }
    public function destroy($id)
    {
        $delete = $mhs = Mahasiswa::find($id);
        $delete = $mhs->delete();
        return $delete ? redirect(route('home'))->with('sukses','Data telah dihapus') : redirect(route('home'))->with('gagal','Data gagal dihapus');
    }
}
