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
                            <h2 class="pageheader-title">Komentar Postingan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Lihat, balas, dan kelola semua komentar di situs Anda.</li>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    {{-- <a class = "btn btn-primary mb-2" href="/cobaaddkategori">Tambahkan Kategori Baru</a> --}}
                                    <table id="example" class="table table-striped table-bordered first" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Komentar Blog</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr> --}}
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="" method="">
                                                    @csrf
                                                    <input type="submit" class="btn btn-sm btn-danger" value="Hapus">
                                                </form>
                                            {{-- </tr> --}}
                                        </tbody>
                                    </table>
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
