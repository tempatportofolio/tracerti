@extends('layouts.master')

@section('title')
Edit Berita | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/berita">Berita</a></li>
                        <li class="breadcrumb-item active">Edit Berita</li>
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
                        Form Edit Berita
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <a class="btn med bg-yellow" href="/berita">
                            <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                            Back
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset class="fieldset-border">
                                <legend class="legend-border">Silahkan mengubah berita pada form dibawah ini.</legend>
                                <form action="" method="get">
                                    <div class="form-group">
                                        <label>Tanggal :</label>
                                        <div class="input-group date" id="datetimepicker">
                                            <input name="tanggal_brt" type="date"
                                                class="form-control datetimepicker-input" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Judul :</label>
                                        <input class="form-control" type="text"
                                            placeholder="Contoh : Mahasiswa TI angkatan 2018 mendapatkan penghargaan"
                                            name="judul_berita" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Isi :</label>
                                        <textarea class="form-control" name="berita" id="" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="mt-1 btn med btn-success float-right">
                                            <i class="fas fa-save"></i>
                                            Simpan Perubahan
                                        </button>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                    <hr>
                    <div class="card catatan bg-success">
                        <h3>
                            <i class="fas fa-info-circle"></i>
                            Catatan :
                        </h3>
                        <ul>
                            <li>Tambah data berita pada form yang disediakan</li>
                            <li>Untuk menambahkan tanggal dapat meng-klik icon kalender di pojok kanan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>
@endsection

@section('ckeditor')
<script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('berita');

</script>
@endsection
