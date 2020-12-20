@extends('layouts.master')

@section('title')
    Edit User | Tracer Study
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/pengaturan-user">Pengaturan User</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                    Form Edit User
                </h3>
            </div>
          <div class="card-body">
            <div class="form-group">
              <a class="btn med bg-yellow" href="/pengaturan-user">
              <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                Back
              </a>
            </div>
            <fieldset class="fieldset-border">
              <legend class="legend-border">Silahkan mengubah data user pada form dibawah ini.</legend>
              <form action="" method="" role="form" id="quickForm"> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama_user" value="Admin" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email_user" value="admin@gmail.com" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name="level" id="level">
                      <option value="admin">Admin</option>
                      <option value="superadmin">Superadmin</option>
                    </select>
                  </div>
                  <div class="form-group float-right">
                    <button type="submit" class="btn mt-1 med btn-success">
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
  </div>
@endsection