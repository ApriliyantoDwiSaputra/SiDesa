@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penduduk</h1>
        <a href="/resident/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    {{-- Table --}}
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tempat, Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Status Perkawinan</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Status Penduduk</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @if (count($residents) < 1)
                            <tbody>
                                <tr>
                                    <td colspan="11" class="text-center">Tidak ada data penduduk</td>
                                </tr>
                            </tbody>
                        @else
                        <tbody>
                            @foreach ($residents as $item)
                                <tr>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->birth_date }}, {{ $item->birth_place }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->religion }}</td>
                                    <td>{{ $item->marital_status }}</td>
                                    <td>{{ $item->occupation }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td scope="col">
                                        <div class="d-flex">
                                            <a href="/resident{{ $item->id }}" class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="/resident{{ $item->id }}" class="btn btn-sm btn-danger">
                                                <i class="fas fa-eraser"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection