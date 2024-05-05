@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Tentang Kampus') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-body">

                    <form method="POST" action="#" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="sejarah">Sejarah<span class="small text-danger">*</span></label>
                                        <textarea id="sejarah" class="form-control" name="sejarah" placeholder="Sejarah Kampus"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="foto_sejarah">Foto Sejarah<span class="small text-danger">*</span></label>
                                        <input type="file" id="foto_sejarah" class="form-control" name="foto_sejarah" placeholder="Foto Sejarah" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="visi">Visi<span class="small text-danger">*</span></label>
                                        <textarea id="visi" class="form-control" name="visi" placeholder="Visi"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="misi">Misi<span class="small text-danger">*</span></label>
                                        <textarea id="misi" class="form-control" name="misi" placeholder="Misi"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="foto_tujuan">Foto Tujuan<span class="small text-danger">*</span></label>
                                        <input type="file" id="foto_tujuan" class="form-control" name="foto_tujuan" placeholder="Foto Tujuan" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="landasan">Landasan<span class="small text-danger">*</span></label>
                                        <textarea id="landasan" class="form-control" name="landasan" placeholder="Landasan"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="sasaran">Sasaran<span class="small text-danger">*</span></label>
                                        <textarea id="sasaran" class="form-control" name="sasaran" placeholder="Sasaran"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="makna">Makna<span class="small text-danger">*</span></label>
                                        <input type="text" id="makna" class="form-control" name="makna" placeholder="Makna" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
