@extends('layouts.main')

@section('contents')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Buat Postingan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        {{-- <li class="breadcrumb-item"><a href="/dashboard" class="breadcrumb-link">Pengumuman</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit Pengumuman</a></li> --}}
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Postingan</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="" method="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputJudul" class="col-form-label">Judul Blog</label>
                                            <input type="text" class="form-control" id="judul" name="judul" value="">
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="konten">Konten Blog</label>
                                            <textarea class="form-control" id="konten" name="konten" value=" rows="10"></textarea>
                                          </div>
                                        <a type="button" class="btn btn-danger" href="/dashboard">Back</a>
                                        <button type="submit" class="btn btn-success">Terbitkan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
@endsection