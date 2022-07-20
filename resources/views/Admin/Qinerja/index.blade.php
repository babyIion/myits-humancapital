@extends('Ui.base')

@section('title')
Qinerja
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
        <li class="nav-item"><a href="{{ url('admin') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/home.svg') }}" class="wd-20 mg-r-15">Beranda</a></li>
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
        <li class="nav-item d-flex justify-content-between align-items-center"><a href="{{ url('/admin/qinerja') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/skem.svg') }}" class="wd-20 mg-r-15">Qinerja</a>
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
                  <a href="{{ url('/admin') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <h4 class="tx-poppins tx-medium mg-b-0">Qinerja</h4>
              </div>
            </div>
          </div>
          {{-- <div class="row row-xs"> --}}
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body">
                    <h5 class="tx-poppins tx-medium mg-b-3">Monitoring Penilaian Kinerja</h5>
                    <p class="tx-14 tx-color-03"></p>
                    <div class="row row-xs">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
                        <a href="{{ url('/admin/qinerja/monitoring-dosen') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/monitoring.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Dosen</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Lihat keadaan penilaian perilaku dari dosen. </p>
                              </div>
                            </div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{ url('/admin/qinerja/monitoring-tendik') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/monitoring.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Tenaga Kependidikan</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Lihat keadaan penilaian perilaku dan rincian tugas dari tenaga kependidikan.</p>
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
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body">
                    <h5 class="tx-poppins tx-medium mg-b-3">Pengaturan</h5>
                    <p class="tx-14 tx-color-03"></p>
                    <div class="row row-xs">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
                        <a href="{{ url('/admin/qinerja/atur-jadwal') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/calendar.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Jadwal Penilaian Kinerja</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Atur rentang waktu penilaian kinerja.</p>
                              </div>
                            </div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{ url('/admin/qinerja/atur-penilai') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/monitoring.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Set Penilai Kinerja</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Atur dan kelola penilai kinerja.</p>
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
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body">
                    <h5 class="tx-poppins tx-medium mg-b-3">Laporan</h5>
                    <p class="tx-14 tx-color-03"></p>
                    <div class="row row-xs">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
                        <a href="{{ url('/admin/qinerja/kualitas-kerja') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/report.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Kualitas Kerja Unit</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Lihat dan unggah laporan kualitas kerja tiap unit.</p>
                              </div>
                            </div>
                            <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-hover"><ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon></div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <a href="{{ url('/admin/qinerja/rekap-tendik') }}">
                          <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex align-items-center justify-content-between">
                            <div class="media d-flex align-items-center justify-content-center">
                              <img src="{{ asset('assets/img/report.svg') }}" class="wd-35 mg-r-20">
                              <div class="media-body">
                                <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 crop-text-1">Rekap Penilaian Kinerja Tenaga Kependidikan</p>
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Lihat laporan penilaian kinerja tiap tenaga kependidikan pada suatu unit kerja.</p>
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