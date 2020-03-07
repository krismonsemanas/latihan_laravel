@extends('layout')
@section('title')
    Home
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col">
            @if (session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('sukses') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif(session('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('gagal') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Data mahasiswa
                        <a href="{{ route('tambah-mahasiswa') }}" class="float-right">Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mhs as $m)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}.</td>
                                    <td>{{ $m->nim }}</td>
                                    <td>{{ $m->nama }}</td>
                                    <td>{{ $m->jurusan }}</td>
                                    <td>{{ $m->alamat }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('show-mahasiswa',['id' => $m->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                        <form action="{{ route('delete-mahasiswa',['id' => $m->id]) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
