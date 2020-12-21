@extends('layouts.master')

@section('title')
Detail Combobox | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Combobox</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/data-combobox">Data Combobox</a></li>
                        <li class="breadcrumb-item active">Detail Data Combobox</li>
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
                        <i class="nav-icon fas fa-info-circle"></i>
                        Detail Data Combobox
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="form-group" style="margin-left:7px;">
                                <a class="btn bg-yellow" href="/data-combobox">
                                    <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                                    Back
                                </a>
                            </div>
                            <br>
                        </div>
                        <table style="margin-top:10px; color:red;">
                            <td style="width:200px;"><Strong>Nama Combobox</strong></td>
                            <td style="width:100px; text-align:center;"><strong>:</strong></td>
                            <td style="width:200px;"><strong>Program Studi<strong></td>
                        </table>
                        <div style="margin-top:10px;" class="row mb-2">
                            <div class="col-sm-6">
                                <div class="dataTables_wrapper dt-bootstrap4" style="margin-top:10px;">
                                    <strong>Daftar/list Nilai dari Combobox</strong>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <button type="button" class="btn med btn-success float-right" data-toggle="modal"
                                        data-target="#modal-success">
                                        <i class="fas fa-plus"></i>
                                        Tambah Nilai Combobox
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                            <th style="text-align:center;">No. Urut</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>6001</td>
                                            <td>S3 Ilmu Ekonomi</td>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#modal-primary">
                                                    <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="delete-combobox.php" class="btn btn-sm btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>68001</td>
                                            <td>S3 Ilmu Sosial</td>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#modal-primary">
                                                    <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="delete-combobox.php" class="btn btn-sm btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="pagination float-right">
                                    <li class="paginate_button page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="card catatan bg-success">
                            <h3>
                                <i class="fas fa-info-circle"></i>
                                Catatan :
                            </h3>
                            <ul>
                                <li>Untuk menambah nilai combobox klik tombol tambah jawaban</li>
                                <li>Untuk mengedit dan menghapus nilai combobox dapat dilakukan di masing-masing nilai
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-success">
            <div class="modal-dialog">
                <div class="modal-content bg-success">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fas fa-plus"></i>
                            Form Tambah Nilai Combobox
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="background:#fff; color:#000;">
                        <form action="" role="form" id="quickForm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nilai</label>
                                <input type="text" name="nilai_combobox" class="form-control" id="exampleInputEmail1"
                                    placeholder="Contoh : 60001">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <input type="text" name="ket_combobox" class="form-control" id="exampleInputPassword1"
                                    placeholder="Contoh : S3 Ilmu Ekonomi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Urut</label>
                                <input type="text" name="no_urut" class="form-control" id="exampleInputPassword1"
                                    placeholder="Contoh : 1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success float-right">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-primary">
            <div class="modal-dialog">
                <div class="modal-content bg-primary">
                    <div class="modal-header" style="background:#ffc107; color:#000;">
                        <h4 class="modal-title">
                            <i class="far fa-edit"></i>
                            Form Edit Data Combobox
                        </h4>
                        <button type="button" style="color:#000;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="background:#fff; color:#000;">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control" name="nilai_combobox" value="6001" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" class="form-control" name="ket_combobox" value="S3 Ilmu Ekonomi"
                                    id="">
                            </div>
                            <div class="form-group">
                                <label for="">No. Urut</label>
                                <input type="text" class="form-control" name="no_urut" value="1" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning float-right">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
