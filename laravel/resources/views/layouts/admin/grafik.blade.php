@extends('layouts.master')

@section('title')
    Grafik | Tracer Study
@endsection

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Grafik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Grafik</li>
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
                        <i class="nav-icon fas fa-chart-pie"></i>   
                        Daftar Grafik
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" class="form-inline">
                                    <div style="margin: 0 10px 0 5px;" class="form-group">
                                        <label for="Filter">Filter : &nbsp;</label>
                                        <select name="filter" id="filter" class="form-control">
                                            <option value="Semua Tahun">Semua Tahun</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="margin-right:3px;">
                                        <input type="text" class="form-control" placeholder="Judul/Soal">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success form-control">
                                        <i class="nav-icon fas fa-search"></i>
                                        Search
                                    </button>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                    <a href="/tambah-grafik" class="btn med btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                        Tambah Grafik
                                    </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr style="text-align:center;">
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Soal</th>
                                            <th>Jenis Grafik</th>
                                            <th>Jenis Label</th>
                                            <th>Tahun Lulus</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="text-align:center;">
                                            <td>1</td>
                                            <td style="text-align:left;">Penekanan Pelaksanaan Perkuliahan</td>
                                            <td style="text-align:left;">(f2) Menurut Anda seberapa besar penekanan perkuliahan di laksanakan di program studi Anda?</td>
                                            <td>Batang</td>
                                            <td>Nilai</td>
                                            <td>2016</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="/detail-grafik" class="btn btn-sm btn-success">
                                                <i class="fas fa-info-circle"></i>
                                                    Detail
                                                </a>
                                                <a href="/delete-grafik" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td>2</td>
                                            <td style="text-align:left;">Penekanan Pelaksanaan Perkuliahan</td>
                                            <td style="text-align:left;">(f2) Menurut Anda seberapa besar penekanan perkuliahan di laksanakan di program studi Anda?</td>
                                            <td>Batang</td>
                                            <td>Nilai</td>
                                            <td>2016</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="/detail-grafik" class="btn btn-sm btn-success">
                                                <i class="fas fa-info-circle"></i>
                                                    Detail
                                                </a>
                                                <a href="/delete-grafik" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
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
                              <li>Grafik berisi kumpulan grafik tracer study</li>
                              <li>Untuk melihat grafik klik icon detail</li>
                            </ul>
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