@extends('layout')
@section('title')
    @if (!empty($mhs))
        Ubah data mahasiswa
    @else
        Tambah data mahasiswa
    @endif
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ !empty($mhs) ? 'Ubah Data Mahasiswa' : 'Tambah Data Mahasiswa' }}
                    <a href="{{ route('home') }}" class="float-right">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ !empty($mhs) ? route('update-mahasiswa',['id' => $mhs->id]) : route('simpan-mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" @if(isset($mhs->nim)) value="{{ $mhs->nim }}" @endif name="nim" id="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" @if(isset($mhs->nama)) value="{{ $mhs->nama }}" @endif name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" @if(isset($mhs->jurusan)) value="{{ $mhs->jurusan }}" @endif name="jurusan" id="jurusan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" @if(isset($mhs->alamat)) value="{{ $mhs->alamat }}" @endif name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-info">{{ !empty($mhs) ? 'Update' : 'Simpan' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
