@extends('layouts.master')

@section('title')
Pengumuman | Tracer Study
@endsection

@section('datatablecss')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-success">
                <!-- Card Header -->
                <div class="card-header">
                    <div class="card-title">
                        <i class="fas fa-newspaper"></i>
                        Data Berita
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/tambah-berita" class="btn med btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Berita
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <table id="example"
                                class="table table-hover datatable table-bordered table-striped dataTable dtr-inline"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th class="text-center" width="15%">Tanggal</th>
                                        <th width="20%">Judul</th>
                                        <th width="30%">Isi</th>
                                        <th class="text-center" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-center">19 - 12 - 2020</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, est?</td>
                                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae
                                            excepturi animi ipsam, cupiditate rerum iure.</td>
                                        <td style="text-align:center;">
                                            <a href="/edit-berita" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </a>
                                            <a href="/delete-berita" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="text-center">20 - 12 - 2020</td>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quas quod
                                            corporis laboriosam adipisci ad doloribus quaerat numquam maxime sit!</td>
                                        <td style="text-align:center;">
                                            <a href="/edit-berita" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </a>
                                            <a href="/delete-berita" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <!-- Card Catatan -->
                    <div class="card catatan bg-success">
                        <h3>Catatan :</h3>
                        <ul>
                            <li>Digunakan untuk membuat/menambahkan berita pada halaman tracer study</li>
                            <li>Klik tombol "Tambah berita" untuk menambahkan berita</li>
                            <li>Tombol "Edit" digunakan untuk mengedit salah satu berita</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection


@section('datatablejs')
<!-- DataTables -->
<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
@endsection
