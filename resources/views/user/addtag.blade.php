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
                            <h2 class="pageheader-title">Buat Tag</h2>
                            {{-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="/dashboard" class="breadcrumb-link">Pengumuman</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit Pengumuman</a></li> -->
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
                                <h5 class="mb-0">Tag</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ Route('savetag') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                              <label for="inputNama" class="col-form-label">Nama Tag</label>
                                              <input type="text" class="form-control" id="nama_tag" name="nama_tag">
                                          </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="konten">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
                                          </div>
                                          @csrf
                                        <div class="form-group">
                                            <label for="kategori">Judul Blog</label>
                                            <select class="form-control" id="id_post" name="id_post" rows="10">
                                                <option selected value>"Pilih Judul Blog"</option>
                                                @foreach ($post as $item)
                                                <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <a type="button" class="btn btn-danger" href="{{ route('tag') }}">Back</a>
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