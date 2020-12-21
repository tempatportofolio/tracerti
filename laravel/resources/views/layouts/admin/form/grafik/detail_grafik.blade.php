@extends('layouts.master')

@section('title')
Detail Grafik | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Grafik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/grafik">Grafik</a></li>
                        <li class="breadcrumb-item active">Detail Grafik</li>
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
                        Detail Grafik
                    </h1>
                </div>
                <div class="card-body">
                    <form action="" method="" role="form" id="quickForm">
                        <div class="card-body">
                            <div class="form-group">
                                <a class="btn med bg-yellow" href="/grafik">
                                    <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                                    Back
                                </a>
                            </div>
                            <br>
                            <h5 class="font-weight-bold">(f2) Menurut Anda seberapa besar penekanan perkuliahan pada
                                program studi anda?</h5>
                            <p class="font-weight-bold">(0) Responden</p>
                            <div class="chart-bdy">
                                <div id="chartContainer" style="height: 600px; width: 100%;"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('ckeditor')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Penekanan Pelaksanaan perkuliahan",
                fontSize: 50,
            },

            axisY: {
                maximum: 80,
                interval: 10,
            },

            data: [{
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "column",
                indexLabel: "{y}",
                indexLabelPlacement: "outside",
                indexLabelOrientation: "horizontal",
                dataPoints: [{
                        label: "Sangat Besar",
                        y: 36
                    },
                    {
                        label: "Besar",
                        y: 72
                    },
                    {
                        label: "Cukup Besar",
                        y: 53
                    },
                    {
                        label: "Kurang",
                        y: 15
                    },
                    {
                        label: "Tidak Sama Sekali",
                        y: 2
                    }
                ]
            }]
        });
        chart.render();
    }

</script>
@endsection
