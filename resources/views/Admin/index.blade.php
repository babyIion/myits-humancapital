@extends('Ui.base')

@section('title')
Beranda
@endsection

@section('menu')
<aside class="aside aside-fixed">
    <div class="aside-header">
      <a href={{ url('/admin') }} class="aside-logo tx-medium tx-13 tx-md-15 tx-color-02">
          <img src="{{ asset('assets/img/logo-myits-blue.svg') }}" class="ht-20">
          <p class="tx-poppins tx-medium tx-13 tx-md-18 tx-color-02 mg-b-0 mg-l-10">HumanCapital</p>
      </a>
      <a href="" class="aside-menu-link">
        <ion-icon name="menu" class="mg-l-6 mg-t-6 tx-18"></ion-icon>
      </a>
    </div>
    <div class="aside-body">
      <ul class="sidebar-nav">
        <li class="nav-item"><a href="." class="nav-link-its-active tx-poppins tx-medium text-truncate"><img src="assets/img/home.svg" class="wd-20 mg-r-15">Beranda</a></li>
        <li class="nav-item"><a href="{{ url('/admin/data-pegawai') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/scholarship-profile.svg') }}" class="wd-20 ht-20 mg-r-15">Data Pegawai</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('/admin/data-master') }}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/data-master.svg') }}" class="wd-20 mg-r-15">Data Master</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-collapse" type="button" data-toggle="collapse" data-target="#collapse-menu-portofolio" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-portofolio">
          <li class="nav-item mg-l-15"><a href="/portofolio/bahan-ajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-bahan-ajar.svg') }}" class="wd-20 mg-r-15">Agama</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/detasering" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-detasering.svg') }}" class="wd-20 mg-r-15">Jabatan Fungsional</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/diklat" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-training.svg') }}" class="wd-20 mg-r-15">Jabatan Struktural</a></li>
          <li class="nav-item mg-l-15"><a href="/admin/data-master/jenis-pegawai" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-20 mg-r-15">Jenis Pegawai</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karya-cipta" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-20 mg-r-15">Jenjang Pendidikan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karyailmiah" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-scientific.svg') }}" class="wd-20 mg-r-15">Pangkat Golongan</a></li>
          <li class="nav-item mg-l-15"><a href="/admin/data-master/status-keaktifan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-intern.svg') }}" class="wd-20 mg-r-15">Status Keaktifan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/organisasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-organization.svg') }}" class="wd-20 mg-r-15">Status Kepegawaian</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('/admin/verifikasi') }}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/verifikasi.svg') }}" class="wd-20 mg-r-15">Verifikasi<span class="mg-l-15 badge rounded-pill bg-info">99+</span></a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-kepegawaian" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-kepegawaian">
          <li class="nav-item mg-l-15"><a href="/kepegawaian/hukuman" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-hukuman.svg') }}" class="wd-20 mg-r-15">Hukuman</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/kepangkatan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-kepangkatan.svg') }}" class="wd-20 mg-r-15">Kepangkatan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/kesejahteraan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-kesejahteraan.svg') }}" class="wd-20 mg-r-15">Kesejahteraan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/pemberhentian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-pemberhentian.svg') }}" class="wd-20 mg-r-15">Pengembangan Diri</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/tugas-belajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-tugas-belajar.svg') }}" class="wd-20 mg-r-15">Penghargaan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-jabfung" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-jabatan.svg') }}" class="wd-20 mg-r-15">Riwayat Jabfung</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-jabstruk" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/riwayat-jabatan.svg') }}" class="wd-20 mg-r-15">Riwayat Jabstruk</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-gaji" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Riwayat Kenaikan Gaji</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/inpassing" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Riwayat Pendidikan</a></li>
          <li class="nav-item mg-l-15"><a href="{{ url('/admin/verifikasi/sertifikasi') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Sertifikasi<span class="mg-l-15 badge rounded-pill bg-info">1</span></a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/tunjangan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Studi Lanjut</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center"><a href="{{ url('/admin/qinerja') }}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/skem.svg') }}" class="wd-20 mg-r-15">Qinerja</a>
      </ul>
    </div>
  </aside>
@endsection

@section('content')
<div class="content pd-0" style="position: relative">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-10 mg-t-60">
      <div class="content-body">
        <div class="container pd-x-0 mn-ht-500" id="content">
          <div class="row row-xs">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
              <div class="card bd-0 pos-relative" style="background-image: url(assets/img/cover-beranda.svg); background-position: center top; background-size:cover;">
                <div class="card-body ht-300">
                  <p class="tx-poppins tx-regular tx-white tx-30 mg-b-0">Hai!</p>
                  <p class="tx-poppins tx-light tx-white tx-15">Selamat datang di myITS HumanCapital</p>
                  <div class="d-flex justify-content-start align-items-center pd-y-20">
                    <a href="profil">
                      <div class="media d-flex align-items-center">
                        <div class="avatar">
                          <img src="{{ asset('assets/img/profile-blank.png') }}" class="rounded-circle" alt="">
                        </div>
                        <div class="media-body tx-white text-left mg-l-15">
                          <p class="tx-poppins tx-medium mg-b-0">Arjuna, S.Kom., M.Kom.</p>
                          <p class="tx-13 mg-b-0">Administrator</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="pos-absolute b-0 l-0 r-0 pd-10 pd-md-20">
                    <div class="wd-100p">
                      <div class="card-body blur-transparent rounded-its-10 shadow">
                        <div id="carouselExample2" class="carousel slide" data-ride="carousel">
                          <div class="d-flex align-items-center">
                            <img src="assets/img/announcement.svg" class="wd-30 mg-r-20 d-none d-lg-block">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <p class="tx-poppins tx-medium mg-b-0 tx-15">Unduh Petunjuk Teknis PAK</p>
                                <p class="tx-13 tx-color-03 mg-b-0">Penjelasan tentang penggunaan pengisian PAK dan lain-lain. <a class="tx-poppins tx-medium tx-color-its" href="#">Unduh di sini</a>.</p>
                              </div>
                              <div class="carousel-item">
                                <p class="tx-poppins tx-medium mg-b-0 tx-15">Perbarui portofolio sertifikasi</p>
                                <p class="tx-13 tx-color-03 mg-b-0">Harap memperbarui isian tanggal mulai, tanggal selesai, skala dan disiplin.</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <a class="btn btn-icon btn-its-custom-1 rounded-its-50p d-none d-lg-block mg-r-5" href="#carouselExample2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon-its d-flex align-items-center" aria-hidden="true"><ion-icon name="chevron-back" class="mg-y-2 tx-18"></ion-icon></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="btn btn-icon btn-its-custom-1 rounded-its-50p d-none d-lg-block" href="#carouselExample2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon-its d-flex align-items-center" aria-hidden="true"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>
                          <ol class="carousel-indicators d-lg-none" style="position: inherit !important; margin-bottom: 0px !important;">
                            <li data-target="#carouselExample2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExample2" data-slide-to="1"></li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="row row-xs">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-5">
                  <h5 class="tx-poppins tx-medium">Layanan</h5>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mg-b-10">
                  <div class="card bd-0">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/data-master.svg') }}" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Data Master</p>
                      <p class="tx-13 tx-color-03">Lihat dan kelola data referensi di sini.</p>
                      <a class="btn btn-its-3 tx-poppins tx-regular" href="{{ url('/admin/data-master') }}">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mg-b-10">
                  <div class="card bd-0">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/scholarship-profile.svg') }}" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Data Pegawai</p>
                      <p class="tx-13 tx-color-03">Lihat dan kelola data pegawai di sini.</p>
                      <a class="btn btn-its-3 tx-poppins tx-regular" href="{{ url('/admin/data-pegawai') }}">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mg-b-10">
                  <div class="card bd-0">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/verifikasi.svg') }}" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Verifikasi<span class="badge badge-info-transparent tx-11 mg-l-10">Menunggu verifikasi<span class="mg-l-15 badge rounded-pill bg-info">1</span></span></p>
                      <p class="tx-13 tx-color-03">Lakukan verifikasi portofolio dari pegawai.</p>
                      <a class="btn btn-its-3 tx-poppins tx-regular" href="{{ url('/admin/verifikasi') }}">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mg-b-10">
                  <div class="card bd-0">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/skem.svg') }}" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Qinerja</p>
                      <p class="tx-13 tx-color-03">Lihat dan kelola kinerja pegawai di sini.</p>
                      <a class="btn btn-its-3 tx-poppins tx-regular" href="{{ url('/admin/qinerja') }}">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-sm-12 col-lg-12 mg-b-20 fixed-bottom d-flex justify-content-center animated slideInUp">
              <div class="card bd-0 wd-100p wd-lg-80p shadow">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center"><i class="fas fa-check-circle fa-lg tx-success mg-r-10"></i> Portofolio sudah lengkap</p>
                  <a class="btn btn-its tx-poppins tx-medium rounded-pill" href="#">Ajukan</a>
                </div>
              </div>
            </div> -->

          </div><!-- row -->
        </div><!-- container -->
@endsection