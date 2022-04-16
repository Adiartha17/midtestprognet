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
                            <h2 class="pageheader-title">Tag Postingan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Buat, edit, dan kelola tag di situs Anda.</li>
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
                                    <a class = "btn btn-primary mb-2" href="{{ route('tambahtag') }}">Tambahkan Tag Baru</a>
                                    <table id="example" class="table table-striped table-bordered first" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Tag Blog</th>
                                                <th>Deskripsi</th>
                                                <th>Judul Blog</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($tags as $tag)
                                            <tr>
                                            <td>{{ $tag->nama_tag }}</td>
                                            <td>{{ $tag->deskripsi }}</td>
                                            <td>{{ $tag->post->judul }}</td>
                                            <td><a href="{{ route('edittag', $tag->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('deletetag', $tag->id) }}" method="post">
                                                    @csrf
                                                    <input type="submit" class="btn btn-sm btn-danger" value="Hapus">
                                                </form>
                                            </td>
                                            </tr>
                                        @empty
                                        <tr>
                                            <td class="text-center text-mute" colspan="4">Data tag tidak tersedia</td>
                                        </tr>
                                         @endforelse
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
