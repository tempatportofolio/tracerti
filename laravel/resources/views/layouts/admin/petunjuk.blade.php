@extends('layouts.master')

@section('title')
    Petunjuk | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Petunjuk</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Petunjuk</li>
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
                        Daftar Petunjuk
                    </h1>
                </div>
                <div class="card-body">
        
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table my-table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Petunjuk</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="10%">1</td>
                                            <td>
                                                <!-- Hanya Contoh -->
                                                {{-- <h1>* Hanya Contoh</h1> --}}

                                                <p style="text-align: center;">&nbsp;</p>

                                                <p style="text-align: center;"><span style="font-family:Verdana,Geneva,sans-serif;"><span style="font-size:26px;"><span style="color:#2980b9;"><strong>TRACER STUDY VOKASI UB MALANG</strong></span></span></span></p>

                                                <p style="text-align: center;">&nbsp;</p>

                                                <p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Verdana,Geneva,sans-serif;">Berikut panduan singkat pengisian kuesioner Tracer Study Online</span></span></p>

                                                <p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Verdana,Geneva,sans-serif;">1. Tracer Study adalah Aktivitas pelacakan alumni yang dilaksanakan setiap tahun oleh Vokasi UB sebagai landasan rekonstruksi kurikulum dan evaluasi belajar mengajar yang dilaksanakan di Vokasi UB.</span></span></p>

                                                <p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Verdana,Geneva,sans-serif;">2. Pertanyaan dengan tanda *(<em>Required</em>) adalah pertanyaan-pertanyaan yang wajib diisi sebelum melanjutkan pengisian di halaman berikutnya.</span></span></p>

                                                <p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Verdana,Geneva,sans-serif;">3. Penyimpanan data dilakukan setelah semua pertanyaan terjawab.</span></span></p>

                                                <p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Verdana,Geneva,sans-serif;">4. Tim Kami akan memandu pengisian Kuesioner apabila mengalami kendala</span></span></p>

                                                <p style="text-align: justify;">&nbsp;</p>

                                                <p style="text-align: center;"><span style="color:#8e44ad;"><strong><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif;"><span style="font-size:14px;">Partisipasi Alumni sangat penting untuk kemajuan Universitas. Terimakasih atas partisipasinya.</span></span></strong></span></p>

                                                <p>&nbsp;</p>

                                                <p><span style="font-size:12px;"><strong><span style="font-family:Verdana,Geneva,sans-serif;">Hormat Kami, </span></strong></span></p>

                                                <p><span style="font-size:14px;"><strong><span style="font-family:Verdana,Geneva,sans-serif;">Vokasi UB Malang</span></strong></span></p>

                                                <p>&nbsp;</p>

                                            </td>
                                            <td width="20%" style="text-align: center;">
                                                <a href="/edit-petunjuk" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->    
@endsection

