@extends('Ui.base')

@section('title')
Verifikasi
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
        <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/home.svg') }}" class="wd-20 mg-r-15">Beranda</a></li>
        <li class="nav-item"><a href="{{ url('/admin/data-pegawai') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/scholarship-profile.svg') }}" class="wd-20 ht-20 mg-r-15">Data Pegawai</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('/admin/data-master') }}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/data-master.svg') }}" class="wd-20 mg-r-15">Data Master</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-collapse" type="button" data-toggle="collapse" data-target="#collapse-menu-portofolio" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-portofolio">
          <li class="nav-item mg-l-15"><a href="/portofolio/bahan-ajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-bahan-ajar.svg') }}" class="wd-20 mg-r-15">Agama</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/detasering" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-detasering.svg') }}" class="wd-20 mg-r-15">Jabatan Fungsional</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/diklat" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-training.svg') }}" class="wd-20 mg-r-15">Jabatan Struktural</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/hki" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-20 mg-r-15">Jenis Pegawai</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karya-cipta" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-20 mg-r-15">Jenjang Pendidikan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karyailmiah" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-scientific.svg') }}" class="wd-20 mg-r-15">Pangkat Golongan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/kepanitiaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-intern.svg') }}" class="wd-20 mg-r-15">Status Keaktifan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/organisasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-organization.svg') }}" class="wd-20 mg-r-15">Status Kepegawaian</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('/admin/verifikasi') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/verifikasi.svg') }}" class="wd-20 mg-r-15">Verifikasi<span class="mg-l-15 badge rounded-pill bg-info">99+</span></a>
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
        <div class="container pd-x-0 mn-ht-450 mn-ht-xxl-750" id="content">
            <div class="d-flex align-items-center justify-content-start mg-b-20 mg-sm-b-20 mg-lg-b-20">
                <div>
                    <a href="{{ url('/admin') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <div></div>
                <div>
                  <h4 class="tx-poppins tx-medium mg-t-8">
                    Verifikasi
                  </h4>
                </div>
            </div>
            <div class="row row-xs">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/portofolio/bahan-ajar') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-bahan-ajar.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Pengembangan Diri</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi pengembangan diri pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/portfolio-enterpreneurship.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Penghargaan</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi penghargaan pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-detasering.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Riwayat Pendidikan</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi riwayat pendidikan pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/admin/verifikasi/sertifikasi') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center flex-grow-1">
                                <img src="{{ asset('assets/img/portfolio-certification.svg') }}" class="wd-35 mg-r-20">
                                <div class="media-body">
                                    <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Seritifikasi</p>
                                    <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi sertifikasi pegawai.</p>
                                </div>
                            </div>
                            <div class="mg-r-20 tx-12 badge rounded-circle bg-info">1</div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Hukuman</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi hukuman pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/admin/data-master/status-keaktifan') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/portfolio-ipr.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Kepangkatan</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi kepangkatan pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><i data-feather="chevron-right"></i></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/admin/data-master/jenis-pegawai') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Kesejahteraan</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi kesejahteraan pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/portofolio/pengelola-jurnal') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Riwayat Kenaikan Gaji</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi riwayat kenaikan gaji pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/portofolio/pengelola-jurnal') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Riwayat Jabatan Fungsional</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi riwayat jabatan fungsional pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/portofolio/pengelola-jurnal') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Riwayat Jabatan Struktural</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi riwayat jabatan struktural pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/portofolio/pengelola-jurnal') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Studi Lanjut</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi studi lanjut pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
                    <div class="card bd-0">
                    <a href="{{ url('/portofolio/pengelola-jurnal') }}">
                        <div class="card-body card-body d-flex align-items-center justify-content-between">
                        <div class="media d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/hcm-jurnal.svg') }}" class="wd-35 mg-r-20">
                            <div class="media-body">
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Riwayat Pendidikan</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Verifikasi riwayat pendidikan pegawai.</p>
                            </div>
                        </div>
                        <div class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                        </div>
                    </a>
                    </div>
                </div>
            </div><!-- row -->
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
@endsection