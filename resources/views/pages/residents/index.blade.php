@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penduduk</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    {{-- Table --}}
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-responsive table-bordered table-hovered">
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
                        <tbody>
                            {{-- @foreach ($residents as $resident)
                                <tr>
                                    <td>{{ $resident->nik }}</td>
                                    <td>{{ $resident->name }}</td>
                                    <td>{{ $resident->gender }}</td>
                                    <td>{{ $resident->birth_date,$resident->birth_place }}</td>
                                    <td>{{ $resident->address }}</td>
                                    <td>{{ $resident->religion }}</td>
                                    <td>{{ $resident->marital_status }}</td>
                                    <td>{{ $resident->occupation }}</td>
                                    <td>{{ $resident->phone }}</td>
                                    <td>{{ $resident->status }}</td>
                                    <td>Kosong</td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td scope="col">NIK</td>
                                <td scope="col">Nama</td>
                                <td scope="col">Jenis Kelamin</td>
                                <td scope="col">Tempat, Tanggal Lahir</td>
                                <td scope="col">Alamat</td>
                                <td scope="col">Agama</td>
                                <td scope="col">Status Perkawinan</td>
                                <td scope="col">Pekerjaan</td>
                                <td scope="col">Telepon</td>
                                <td scope="col">Status Penduduk</td>
                                <td scope="col">Aksi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection