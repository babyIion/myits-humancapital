@extends('Ui.base')

@section('title')
Qinerja
@endsection

@section('styles')
<style>
    .nav-line .nav-link.active::after {
        width: 100%;
        left: 0;
        right: 0; }
</style>
@endsection

@section('menu')
<aside class="aside aside-fixed">
    <div class="aside-header">
      <a href={{ url('') }} class="aside-logo tx-medium tx-13 tx-md-15 tx-color-02">
        <img src="{{ asset('assets/img/logo-myits-blue.svg') }}" class="ht-20">
        <p class="tx-poppins tx-medium tx-13 tx-md-18 tx-color-02 mg-b-0 mg-l-10">HumanCapital</p>
      </a>
      <a href="" class="aside-menu-link">
        <ion-icon name="menu" class="mg-l-6 mg-t-6 tx-18"></ion-icon>
      </a>
    </div>
    <div class="aside-body">
      <ul class="sidebar-nav">
        <li class="nav-item"><a href="{{ url('') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/home.svg" class="wd-20 mg-r-15">Beranda</a></li>
        <li class="nav-item"><a href="{{ url('profil') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/profile-blank.png') }}" class="wd-20 ht-20 mg-r-15 img-fluid rounded-circle" style="object-fit: cover;">Profil</a></li>
        <li class="nav-item"><a href="{{ url('berkas') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/folder.svg') }}" class="wd-20 mg-r-15">Berkas Saya</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="portofolio" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/portfolio.svg') }}" class="wd-20 mg-r-15">Portofolio</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-portofolio" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-portofolio">
          <li class="nav-item mg-l-15"><a href="/portofolio/bahan-ajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-bahan-ajar.svg') }}" class="wd-20 mg-r-15">Bahan Ajar</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/detasering" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-detasering.svg') }}" class="wd-20 mg-r-15">Detasering</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/diklat" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-training.svg') }}" class="wd-20 mg-r-15">Diklat</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/hki" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-20 mg-r-15">HKI</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karya-cipta" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-20 mg-r-15">Karya Cipta</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karyailmiah" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-scientific.svg') }}" class="wd-20 mg-r-15">Karya Ilmiah</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/kepanitiaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-intern.svg') }}" class="wd-20 mg-r-15">Kepanitiaan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/organisasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-organization.svg') }}" class="wd-20 mg-r-15">Organisasi Profesi</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/pembicara" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-activity.svg') }}" class="wd-20 mg-r-15">Pembicara</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/penelitian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-enterpreneurship.svg') }}" class="wd-20 mg-r-15">Penelitian</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/pengabdian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-dedication.svg') }}" class="wd-20 mg-r-15">Pengabdian</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/pengelola-jurnal" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-20 mg-r-15">Pengelola Jurnal</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/penghargaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-competition.svg') }}" class="wd-20 mg-r-15">Penghargaan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/riwayat-pekerjaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-enterpreneurship.svg') }}" class="wd-20 mg-r-15">Riwayat Pekerjaan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/sertifikasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-certification.svg') }}" class="wd-20 mg-r-15">Sertifikasi</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/tes" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-certification.svg') }}" class="wd-20 mg-r-15">Tes</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="kepegawaian" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/scholarship-profile.svg') }}" class="wd-20 mg-r-15">Kepegawaian</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-kepegawaian" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-kepegawaian">
          <li class="nav-item mg-l-15"><a href="/kepegawaian/hukuman" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-hukuman.svg') }}" class="wd-20 mg-r-15">Hukuman</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/kepangkatan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-kepangkatan.svg') }}" class="wd-20 mg-r-15">Kepangkatan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/kesejahteraan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-kesejahteraan.svg') }}" class="wd-20 mg-r-15">Kesejahteraan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/pemberhentian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-pemberhentian.svg') }}" class="wd-20 mg-r-15">Pemberhentian</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/tugas-belajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-tugas-belajar.svg') }}" class="wd-20 mg-r-15">Tugas Belajar</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-jabfung" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-jabatan.svg') }}" class="wd-20 mg-r-15">Riwayat Jabfung</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-jabstruk" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/riwayat-jabatan.svg') }}" class="wd-20 mg-r-15">Riwayat Jabstruk</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-gaji" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Riwayat Kenaikan Gaji</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/inpassing" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Inpassing</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/beasiswa" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Beasiswa</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/tunjangan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Tunjangan</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center"><a href="{{ url('qinerja') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/skem.svg') }}" class="wd-20 mg-r-15">Qinerja</a>
      </ul>
    </div>
  </aside>
@endsection

@section('content')
<div class="content pd-0" style="position: relative">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-10 mg-t-60">
    <div class="content-body">
        <div class="container pd-x-0 mn-ht-450 mn-ht-xxl-750" id="content">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-20 mg-lg-b-20">
            <div>
              {{-- <nav aria-label="breadcrumb" class="mg-b-10">
                <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                  <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/admin/verifikasi') }}">verifikasi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sertifikasi</li>
                </ol>
              </nav> --}}
              <div class="d-flex align-items-center justify-content-start">
                <div>
                  <a href="{{ url('') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <h4 class="tx-poppins tx-medium mg-b-0">Qinerja</h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
            <div class="card bd-0">
                <div class="card-body">
                    <h5 class="tx-poppins tx-medium mg-b-3">Capaian Kinerja</h5>
                    <p class="tx-14 tx-color-03"></p>
                    <div id="myfirstchart" style="min-height: 250px;"></div>
                    <div class="collapse" id="collapse8">
                        {{-- <div class="bd pd-15 pd-sm-20 rounded-its-10 mg-b-10"> --}}
                            <div class="mg-b-20 mg-t-20 d-flex align-items-center justify-content-start">
                                <h5 class="tx-poppins tx-medium mg-r-auto">Capaian Kinerja  Bulan Januari-Juni 2021</h5>
                                <div class="dropdown dropdown-custom">
                                    <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-bulan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Jan-Jun
                                    </button>
                                    <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-bulan">
                                      <a class="dropdown-item active" href="#">Jan-Jun</a>
                                      <a class="dropdown-item" href="#">Jul-Des</a>
                                    </div>
                                </div>
                                <div class="dropdown dropdown-custom mg-l-10">
                                    <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-tahun" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      2021
                                    </button>
                                    <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-tahun">
                                      <a class="dropdown-item" href="#">2022</a>
                                      <a class="dropdown-item active" href="#">2021</a>
                                      <a class="dropdown-item" href="#">2020</a>
                                      <a class="dropdown-item" href="#">2019</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-line" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="tx-medium tx-poppins nav-link active" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="true">Pengumpulan KUM pada Periode Berjalan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="tx-medium tx-poppins nav-link" id="random-tab" data-toggle="tab" href="#random" role="tab" aria-controls="random" aria-selected="false">Pengumpulan Angka Kredit</a>
                                </li>
                                <li class="nav-item">
                                  <a class="tx-medium tx-poppins nav-link" id="previous-tab" data-toggle="tab" href="#previous" role="tab" aria-controls="previous" aria-selected="false">Capaian Kinerja Organisasi</a>
                                </li>
                            </ul>
                            <div class="tab-content pd-t-20" id="myTabContent">
                                <div class="tab-pane fade show active" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                                    <div class="card-list">
                                        <div class="card-list-item">
                                            <h5 class="tx-color-03 tx-poppins tx-medium">Nilai Kinerja <span class="tx-color-its-3">141.66%</span></h5>
                                        </div>
                                        <div class="card-list-item">
                                            <h5 class="tx-poppins tx-medium">1. Pengumpulan KUM pada Periode Berjalan</h5>
                                            <h5 class="tx-poppins tx-medium">1.1 Perngajaran</h5>
                                            <div class="row row-xs">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mg-b-10">
                                                  <div class="bd pd-15 pd-sm-20 rounded-its-10 ht-100p">
                                                    <div class="d-flex align-items-center justify-content-between mg-b-20">
                                                      <p class="tx-poppins tx-medium tx-15 tx-color-01 mg-b-0 crop-text-2">Realisasi Mengajar Kelas Reguler dan Kelas Internasional</p>
                                                      {{-- <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div> --}}
                                                    </div>
                                                    <div class="row row-xs mg-b-10 mg-t-10">
                                                      <div class="col-6 text-center bd-r">
                                                        <p class="tx-poppins tx-medium tx-color-01 tx-18 mg-b-0">4</p>
                                                        <p class="tx-13 tx-color-03 mg-b-0">Bobot Komponen</p>
                                                      </div>
                                                      <div class="col-6 text-center">
                                                        <p class="tx-poppins tx-medium tx-color-01 tx-18 mg-b-0">76.68%</p>
                                                        <p class="tx-13 tx-color-03 mg-b-0">Nilai Kinerja</p>
                                                      </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a href="{{ url('qinerja/detail-aspek') }}" class="tx-color-its-3 tx-poppins tx-medium">Lihat detail<ion-icon name="chevron-forward"></ion-icon></a>
                                                    </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="random" role="tabpanel" aria-labelledby="random-tab">
                                </div>
                                <div class="tab-pane fade" id="previous" role="tabpanel" aria-labelledby="previous-tab">
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                    <a data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapse8" class="btn btn-its-3 tx-poppins tx-medium btn-block">Lihat detail</a>
                </div>
            </div>
          </div>
          {{-- <div class="row row-xs"> --}}
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body">
                    <h5 class="tx-poppins tx-medium mg-b-3">Layanan Kinerja</h5>
                    <p class="tx-14 tx-color-03"></p>
                    <div class="row row-xs">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
                        <a href="{{ url('/qinerja/penilaian') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/monitoring.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Penilaian Pegawai</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Lihat dan kelola penilaian perilaku dan rincian tugas pegawai.</p>
                              </div>
                            </div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/monitoring.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Sasaran Kerja Pegawai (SKP)</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Lihat dan cetak SKP Anda.</p>
                              </div>
                            </div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/monitoring.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Validasi Penghargaan</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Kelola validasi penghargaan dari pegawai.</p>
                              </div>
                            </div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          {{-- </div><!-- row --> --}}
        </div><!-- container -->
            <div class="d-none d-lg-block">
                <div class="bd-t bd-2 mg-t-10">
                    <div class="d-flex align-items-center row row-xs mg-t-10">
                        <div class="col-lg-10">
                        <span class="tx-medium tx-color-03 tx-13">Copyright &copy; 2021 Institut Teknologi Sepuluh Nopember</span>
                        </div>
                        <div class="col-lg-2 mg-lg-t-0 d-flex justify-content-end">
                            <img src="{{ asset('assets/img/advhum-blue.png') }}" height="60" class="mg-r-10">
                        </div>
                    </div>
                </div>
            </div>
          <div class="d-lg-none">
            <div class="bd-t bd-2 mg-t-10">
              <div class="d-flex align-items-center row row-x mg-t-20">
                <div class="col-lg-10 d-flex justify-content-center">
                  <span class="tx-medium tx-color-03 tx-13">Copyright &copy; 2021 Institut Teknologi Sepuluh Nopember</span>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{ asset('assets/img/advhum-blue.png') }}" height="60" class="mg-r-10">
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="ajukan" role="dialog" aria-labelledby="ajukan" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
              <h5 class="tx-poppins tx-medium mg-b-0">Verifikasi Portofolio</h5>
              <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            </div>
            <form>
              <div class="modal-body">
                <p class="tx-poppins tx-medium">Hasil Penilaian Anda</p>
                <div class="form-row">
                  <div class="form-group col-12 col-md-6 mg-b-10">
                    <label for="a" class="mg-b-0">
                      <input type="radio" name="product" class="radio-button-its-element" id="a" required/>
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Setuju</span>
                        </div>
                    </label>
                  </div>
                  <div class="form-group col-12 col-md-6 mg-b-10">
                    <label for="b" class="mg-b-0">
                      <input type="radio" name="product" class="radio-button-its-element" id="b"/>
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Revisi</span>
                        </div>
                    </label>
                  </div>
                </div>
                <p class="tx-poppins tx-medium">Komentar Anda</p>
                <div class="form-group form-floating">
                  <textarea class="form-control" placeholder="Aa" id="komentar" style="height: 100px" required></textarea>
                  <label for="komentar">Komentar</label>
                </div>
                <!-- <p class="tx-13 tx-color-03 mg-b-0">Pastikan Anda sudah memeriksa kelengkapan dan kesesuaian portofolio sebelum memberikan penilaian.</p> -->
                <div class="d-flex align-items-center justify-content-start"><ion-icon name="information-circle" class="wd-25 ht-25"></ion-icon><span class="mg-l-10">Pastikan Anda sudah memeriksa kelengkapan dan kesesuaian portofolio sebelum memberikan penilaian.</span></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                <a href="{{ url('/admin/verifikasi/sertifikasi/detail-setuju') }}" class="btn btn-its-3 tx-poppins tx-medium">Verifikasi</a>
              </div>
            </form>
          </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { year: '2008', value: 105 },
      { year: '2009', value: 110 },
      { year: '2010', value: 105 },
      { year: '2011', value: 112 },
      { year: '2012', value: 110 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value'],
    ymax: 120,
    ymin: 100,
    numLines: 5,
    lineColors: ['#7A73DE']
  });
</script>
@endsection