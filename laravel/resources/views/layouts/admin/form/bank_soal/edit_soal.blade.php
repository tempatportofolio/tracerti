@extends('layouts.master')

@section('title')
    Edit Soal | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Soal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/bank-soal">Soal</a></li>
            <li class="breadcrumb-item active">Edit Soal</li>
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
                <h1 class="card-title">
                    <i class="fas fa-edit"></i>
                    Form Edit Soal
                </h1>
            </div>
            <div class="card-body">
              <div class="form-group">
                <a class="btn bg-yellow" href="/bank-soal">
                <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                  Back
                </a>
              </div>
              <br>

              <form action="" method="" role="form" id="quickForm">
                  <div class="form-group">
                      <label for="">Kategori Kelas</label>
                      <Select name="kategori" class="form-control">
                          <option value="">Identitas</option>
                          <option value="">Mode Pembelajaran</option>
                      </Select>
                  </div>
                  <div class="form-group">
                      <label for="">Kode Soal</label>
                      <input class="form-control col-sm-2" type="text" placeholder="Contoh : f2" name="kode_soal" id="">
                  </div>
                  <div class="form-group">
                      <label for="">Soal</label>
                      <textarea class="form-control" name="soal" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="">No. Urut</label>
                      <input class="form-control col-sm-2" placeholder="Contoh : 1" type="text" name="no_urut" id="">
                  </div>
                  <div class="form-group">
                      <label for="">Status</label>
                      <select class="form-control" name="status" id="">
                          <option value="">Aktif</option>
                          <option value="">Tidak Aktif</option>
                      </select>
                  </div>
                  <div class="form-group" style="margin-top:30px;">
                      <button type="submit" class="btn btn-md btn-success float-right">
                          <i style="margin-right: 5px;" class="fas fa-save"></i>
                          Simpan Perubahan
                      </button>
                  </div>
              </form>
            </div>
        </div>
    </div>
  </section>
</div>
@endsection

@section('ckeditor')
<script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('soal');
</script>
@endsection