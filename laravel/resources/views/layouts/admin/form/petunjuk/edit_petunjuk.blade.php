@extends('layouts.master')

@section('title')
Edit Petunjuk | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Petunjuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/petunjuk">Petunjuk</a></li>
                        <li class="breadcrumb-item active">Edit Petunjuk</li>
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
                        Form Edit Petunjuk
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <a class="btn med bg-yellow" href="/petunjuk">
                            <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                            Back
                        </a>
                    </div>
                    <fieldset class="fieldset-border">
                        <legend class="legend-border">Silahkan mengubah petunjuk pada form di bawah ini</legend>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="" method="get">
                                    <div class="form-group">
                                        <label for="">Petunjuk :</label>
                                        <textarea class="form-control" name="petunjuk" id="" cols="50" rows="50">
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
                                  </textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn med mt-1 btn-md btn-success float-right">
                                            <i style="margin-right: 5px;" class="fas fa-save"></i>
                                            Simpan Perubahan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
                    <hr>

                    <div class="card catatan bg-success">
                        <h3>
                            <i class="fas fa-info-circle"></i>
                            Catatan :
                        </h3>
                        <ul>
                            <li>Petunjuk hanya bisa diedit dan tidak bisa ditambah dan dihapus</li>
                            <li>Petunjuk akan tampil di halaman user sebelum mengisi data tracer study</li>
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
    CKEDITOR.replace('petunjuk');

</script>
@endsection
