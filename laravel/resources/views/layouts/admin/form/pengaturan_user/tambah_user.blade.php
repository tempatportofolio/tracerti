@extends('layouts.master')

@section('title')
    Tambah User | Tracer Study
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/pengaturan-user">User Setting</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
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
                    <i class="fas fa-plus"></i>
                    Form Tambah User
                </h3>
            </div>
          <div class="card-body">
            <div class="form-group">
              <a class="btn bg-yellow" href="/pengaturan-user">
              <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                Back
              </a>
            </div>
            <fieldset class="fieldset-border">
              <legend class="legend-border">Silahkan mengisi data user pada form dibawah ini.</legend>
                <form action="" method="" role="form" id="quickForm">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama_user" placeholder="Contoh : Ilham Budianto" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email_user" class="form-control" placeholder="Contoh : Ilhambudianto@gmail.com" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" name="uname" class="form-control" placeholder="Contoh : ilhambudianto_" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1" placeholder="">
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
                      <i class="fas fa-plus"></i>
                      Tambah
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