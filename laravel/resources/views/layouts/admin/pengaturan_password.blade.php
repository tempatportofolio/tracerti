@extends('layouts.master')

@section('title')
Pengaturan Password | Tracer Study
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengaturan Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Pengaturan Password</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Form Pengaturan Password
                    </h3>
                </div>
                <div class="card-body">
                    <fieldset class="fieldset-border">
                        <legend class="legend-border">
                            Silahkan mengubah password anda melalui form dibawah ini
                        </legend>
                        <form role="form" id="quickForm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password Lama</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Password lama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password baru">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Konfirmasi Password</label>
                                <input type="password" name="password2" class="form-control" id="exampleInputPassword2"
                                    placeholder="Konfirmasi password">
                            </div>
                            <div style="margin-top: 40px;" class="form-group">
                                <button type="submit" class="btn btn-success">
                                    <i style="margin-right:5px;" class="fas fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
