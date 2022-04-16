@extends('layouts.main')

@section('contents')
      <div class="dashboard-wrapper">
        <div class="profile">
          <div class="container-fluid dashboard-content ">
              <!-- ============================================================== -->
              <!-- pageheader -->
              <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h3 class="mb-2">Profil</h3>
                            {{-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> Profile Mahasiswa</li>
                                    </ol>
                                </nav>
                            </div> --}}
                        </div>
                    </div>
                </div>
              <!-- ============================================================== -->
              <!-- end pageheader -->
              <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- content -->
                <!-- ============================================================== -->
                  <div class="row">
                      <!-- ============================================================== -->
                      <!-- profile -->
                      <!-- ============================================================== -->
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <!-- ============================================================== -->
                          <!-- card profile -->
                          <!-- ============================================================== -->
                          {{-- <div class="card">
                              <div class="card-body">
                                  <div class="user-avatar text-center d-block">
                                    <img src="{{ url('foto_user/'.$user->foto_user) }}" alt="User Image" class="rounded-circle user-avatar-xxl">
                                  </div>
                              </div>
                          </div> --}}
                          <!-- ============================================================== -->
                          <!-- end card profile -->
                          <!-- ============================================================== -->
                      </div>
                      <!-- ============================================================== -->
                      <!-- end profile -->
                      <!-- ============================================================== -->
                      <!-- ============================================================== -->
                      <!-- campaign data -->
                      <!-- ============================================================== -->
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <!-- ============================================================== -->
                          <!-- campaign tab one -->
                          <!-- ============================================================== -->
                          <div class="influence-profile-content pills-regular">
                              
                              <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" role="tab" aria-controls="pills-campaign" aria-selected="true">Data User</a>
                                  </li>
                              </ul>
                              <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <form>
                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="nim" value="{{$user->username}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputAlamat" class="col-form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$user->alamat}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputTanggalLahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{$user->tgl_lahir}}" readonly>
                                </div>
                                </form>   
                                <a type="button" class="btn btn-primary" href="{{ route('editprofil', $user->id) }}">Edit</a>
                          </div>
                      </div>
                      <!-- ============================================================== -->
                      <!-- end campaign data -->
                      <!-- ============================================================== -->
                  </div>
              </div>
          </div>
        </div>
          <!-- ============================================================== -->
          <!-- end content -->
          <!-- ============================================================== -->
        </div>
      </div>
@endsection