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
                            <h2 class="pageheader-title">Profil</h2>
                            {{-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="\listmahasiswa" class="breadcrumb-link">Profile Mahasiswa</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Edit Profile Mahasiswa</a></li>
                                    </ol>
                                </nav>
                            </div> --}}
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
                                <h5 class="mb-0">Edit Profil</h5>
                                <p></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="" method="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="user-avatar text-center d-block">
                                            <img src="" alt="User Image" class="rounded-circle user-avatar-xxl">
                                            <input class="form-control col-lg-3" type="file" id="image" name="foto_user" value="">
                                            <input type="hidden" class="form-control" id="hidden_image" name="hidden_image" value="">
                                          </div>
                                          <div class="form-group">
                                              <label for="inputNama" class="col-form-label">Nama</label>
                                              <input type="text" class="form-control" id="username" name="nama" value="" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputEmail">Email</label>
                                              <input type="text" class="form-control" id="email" name="email" value="" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputAlamat" class="col-form-label">Alamat</label>
                                              <input type="text" class="form-control" id="alamat" name="alamat" value="">
                                          </div>
                                          <div class="form-group">
                                              <label for="inputTanggallahir">Tanggal Lahir</label>
                                              <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="" readonly>
                                          </div>
                                        </div>
                                        <a type="button" class="btn btn-danger" href="/profile">Back</a>
                                        <button type="submit" class="btn btn-success">Simpan</button>
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