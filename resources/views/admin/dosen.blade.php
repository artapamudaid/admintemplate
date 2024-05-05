@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dosen') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Dosen</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Francisco</td>
                            <td>Fakultas Informatika & Teknik Elektro</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="#"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Markus</td>
                            <td>Fakultas Informatika & Teknik Elektro</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="#"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Edward</td>
                            <td>Fakultas Informatika & Teknik Elektro</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="#"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Agus</td>
                            <td>Fakultas Informatika & Teknik Elektro</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="#"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
