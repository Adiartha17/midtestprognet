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
                                    <form action="{{ Route('savepost') }}" method="post" enctype="multipart/form-data">
                                        <!-- @csrf
                                            <div class="form-group">
                                                <label for="inputGambar" class="col-form-label">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar">
                                            </div>     -->
                                        @csrf
                                        <div class="form-group">
                                            <label for="kategori">Penerbit</label>
                                            <select class="form-control" id="id_user" name="id_user" rows="10">
                                                <option selected value>"Pilih Penerbit"</option>
                                                @foreach ($user as $item)
                                                <option value="{{ $item->id }}">{{ $item->username }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputJudul" class="col-form-label">Judul Blog</label>
                                            <input type="text" class="form-control" id="judul" name="judul">
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="konten">Konten Blog</label>
                                            <textarea class="form-control" id="konten" name="konten" rows="10"></textarea>
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="kategori">Pilih Kategori</label>
                                            <select class="form-control" id="id_kategori" name="id_kategori" rows="10">
                                                <option selected value>"Pilih Kategori"</option>
                                                @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <a type="button" class="btn btn-danger" href="{{ Route('post') }}">Back</a>
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