@extends('layouts.master')

@section('title')
Profil User | Tracer Study
@endsection

@section('datatablecss')
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Profil User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="nav-icon fas fa-users"></i>
                                Daftar Tracer Study
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="margin-top:2px;">
                            <div class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                    </div>
                                    <div class="col-sm-6 col-md-1">
                                        <div class="dataTables_filter">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>NIM</th>
                                                    <th>Nama</th>
                                                    <th>Program Studi</th>
                                                    <th>Telp.</th>
                                                    <th>Email</th>
                                                    <th>Tahun Lulus</th>
                                                    <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>12391231283</td>
                                                    <td>Mahasiswa 1</td>
                                                    <td>Teknologi Informasi dan Komputer</td>
                                                    <td>0081342387</td>
                                                    <td>Mahasiswa1@gmail.com</td>
                                                    <td>2016</td>
                                                    <td style="text-align: center;vertical-align: middle;">
                                                        <a href="/detail-profil" class="btn btn-sm btn-success">
                                                            <i class="fas fa-info-circle"></i>
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>12391232343</td>
                                                    <td>Mahasiswa 2</td>
                                                    <td>Teknologi Informasi dan Komputer</td>
                                                    <td>0813423873</td>
                                                    <td>Mahasiswa2@gmail.com</td>
                                                    <td>2015</td>
                                                    <td style="text-align: center;vertical-align: middle;">
                                                        <a href="/detail-profil" class="btn btn-sm btn-success">
                                                            <i class="fas fa-info-circle"></i>
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div style="margin-top:30px; margin-right:2px;" class="row float-right">
                                    <div class="dataTables_paginate paging_simple_numbers float-right" role="status"
                                        id="example1_paginate">
                                        <ul class="pagination">

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
                                        <li>Digunakan untuk melihat data tracer study mahasiswa</li>
                                        <li>Untuk melhat detail per no mahasiswa di aksi detail</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('datatablejs')
{{-- datatable --}}
<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>
@endsection
