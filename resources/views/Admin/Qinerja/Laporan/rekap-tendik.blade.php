@extends('Ui.base')

@section('title')
Rekap Penilaian Kinerja Tenaga Kependidikan
@endsection

@section('styles')
<style>
.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}
.nav-line .nav-link.active::after {
        width: 100%;
        left: 0;
        right: 0; }
form .select2-container--default .select2-selection--multiple .select2-selection__choice {
    border-color: #c0ccda;
    padding-left: 20px !important;
    padding-top: 3px !important;
}
form .select2-selection__choice, .select2-selection__choice__remove {
    color: #000 !important;
}
form .select2-selection__rendered {
    color: #001737;
    border-color: #c0ccda;
    line-height: calc(3em + 0.9375rem + 2px) !important;
    margin-left: 5px;
    margin-top: 5px;
}
form .select2-container .select2-selection--single {
    border-color: #c0ccda;
    height: calc(3em + 0.9375rem + 2px) !important;
}
form .select2-selection__arrow {
    padding-right: 20px !important;
    height: calc(3em + 0.9375rem + 2px) !important;
    margin-top: 5px;
    margin-right: 10px;
}
form .select2-selection__clear {
    margin-right: 10px;
}
form .select2-selection__placeholder {
    color: #001737 !important;
}
</style>
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
              <nav aria-label="breadcrumb" class="mg-b-10">
                <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                  <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/admin/qinerja') }}">Qinerja</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Rekap Penilaian Kinerja Tendik</li>
                </ol>
              </nav>
              <div class="d-flex align-items-center justify-content-start">
                <div>
                  <a href="{{ url('/admin/qinerja/atur-penilai') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <h4 class="tx-poppins tx-medium mg-b-0">Rekap Penilaian Kinerja Tenaga Kependidikan</h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-7 mg-b-20">
            <div class="card bd-0">
                <div class="card-body">
                    <form action="" method="POST" role="form" id="my-form">
                        @csrf
                        <div class="form-group form-floating">
                            <select class="form-select select2 @error('unit_kerja') is-invalid @enderror" name="unit_kerja" id="unit_kerja" required>
                                <option label="Cari unit kerja"></option>
                                <option value="1">S1 Manajemen Bisnis</option>
                                <option value="1">S1 Teknik Elektro</option>
                                <option value="2">S1 Teknik Informatika</option>
                                <option value="2">S1 Teknik Mesin</option>
                            </select>
                            <label for="unit_kerja">Nama Unit Kerja<span style="color:red"> *</span></label>
                            @error('unit_kerja')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group form-floating">
                            <select class="form-select select2 @error('tahun') is-invalid @enderror" name="tahun" id="tahun" required>
                                <option label="Pilih tahun"></option>
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                            </select>
                            <label for="tahun">Tahun<span style="color:red"> *</span></label>
                            @error('tahun')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="button" class="btn btn-its-3 tx-poppins tx-medium float-right" id="tambah">Lihat laporan</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
            <h5 class="tx-poppins">Rekap Penilaian Kinerja Tenaga Kependidikan Unit Perpustakaan</h5>
          </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <div class="dropdown dropdown-custom">
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
                <div class="dropdown dropdown-custom mg-l-10">
                    <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-bulan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Jan-Jun
                    </button>
                    <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-bulan">
                      <a class="dropdown-item active" href="#">Jan-Jun</a>
                      <a class="dropdown-item" href="#">Jul-Des</a>
                    </div>
                </div>
            </div>
        
            {{-- Tabel --}}
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body table-responsive pd-b-10">
                    {{-- <div class="table-responsive pd-b-10"> --}}
                      <table id="example1" class="table table-hover table-borderless" style="width:100%">
                        <thead>
                          <tr>
                            <th class="table-its wd-10p">No</th>
                            <th class="table-its wd-20p">NIP</th>
                            <th class="table-its wd-20p">Nama Pegawai</th>
                            <th class="table-its wd-10p">Hasil dan Kualitas Kerja (%)</th>
                            <th class="table-its wd-10p">Perilaku Kerja (%)</th>
                            <th class="table-its wd-10p">Waktu Kerja Efektif (%)</th>
                            <th class="table-its wd-10p">Kehadiran Tepat Waktu (%)</th>
                            <th class="table-its wd-10p">Kehadiran Tanpa Alpha (%)</th>
                            <th class="table-its wd-10p">Jumlah Alpha (%)</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="bd-b">
                              <td class="table-its">
                                1
                              </td>
                              <td class="table-its">
                                14704141309308
                              </td>
                              <td class="table-its">
                                Untung Sigit, S.T.
                              </td>
                              <td class="table-its">
                                387.5
                              </td>
                              <td class="table-its">
                                91.67
                              </td>
                              <td class="table-its">
                                114.53
                              </td>
                              <td class="table-its">
                                100
                              </td>
                              <td class="table-its">
                                100
                              </td>
                              <td class="table-its">
                                0
                              </td>
                            </tr>
                            <tr class="bd-b">
                              <td class="table-its">
                                2
                              </td>
                              <td class="table-its">
                                14704141309308
                              </td>
                              <td class="table-its">
                                Ayu Adrian, S.T.
                              </td>
                              <td class="table-its">
                                387.5
                              </td>
                              <td class="table-its">
                                91.67
                              </td>
                              <td class="table-its">
                                114.53
                              </td>
                              <td class="table-its">
                                100
                              </td>
                              <td class="table-its">
                                100
                              </td>
                              <td class="table-its">
                                0
                              </td>
                            </tr>
                            <tr class="bd-b tx-bold" bgcolor="#D1E4FC">
                              <td colspan="3" class="table-its">
                                Rata-rata
                              </td>
                              <td class="table-its">
                                387.5
                              </td>
                              <td class="table-its">
                                91.67
                              </td>
                              <td class="table-its">
                                114.53
                              </td>
                              <td class="table-its">
                                100
                              </td>
                              <td class="table-its">
                                100
                              </td>
                              <td class="table-its">
                                0
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    {{-- </div> --}}
                  </div>
                </div>
              </div>  

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

    {{-- Modal Filter --}}
    <div class="modal fade effect-scale" id="btn-filter" tabindex="-1" role="dialog" aria-labelledby="btn-filter" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
            <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Filter</h5>
            <button type="button" class="btn btn-icon btn-sp-icon tx-poppins tx-medium bdr-sp-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            </div>
            {{-- <form action="{{url('portofolio/bahan-ajar/filter')}}" method="GET">
            {{ csrf_token() }} --}}
            <div class="modal-body pd-0">
                <div id="scroll1" class="scrollbar-lg pos-relative ht-450 pd-15">
                <p class="tx-poppins tx-medium tx-15">Unit Kerja</p>
                <div class="form-group form-floating">
                    <select class="form-select select2" name="unit_kerja" id="unit_kerja" required>
                        <option label="Pilih salah satu"></option>
                        <option value="1">S1 Manajemen Bisnis</option>
                        <option value="1">S1 Teknik Elektro</option>
                        <option value="2">S1 Teknik Informatika</option>
                        <option value="2">S1 Teknik Mesin</option>
                    </select>
                    <label for="unit_kerja">Unit Kerja</label>
                </div>
                <div class="form-group form-floating">
                    <select class="form-select select2" name="jenis_pegawai" id="jenis_pegawai" required>
                        <option label="Pilih salah satu"></option>
                        <option value="1">Dosen</option>
                        <option value="1">Tenaga Kependidikan</option>
                    </select>
                    <label for="jenis_pegawai">Unit Kerja</label>
                </div>
                <p class="tx-poppins tx-medium tx-15">Status Keaktifan</p>
                    <div class="form-row">
                        <div class="form-group col-6">
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_1" value="jenis_pegawai_1" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_1">
                            <label class="custom-control-label" for="jenis_pegawai_1">Aktif</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_2" value="jenis_pegawai_2" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_2">
                            <label class="custom-control-label" for="jenis_pegawai_2">Berhenti dengan Hormat</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_3" value="jenis_pegawai_3" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_3">
                            <label class="custom-control-label" for="jenis_pegawai_3">Cuti</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_4" value="jenis_pegawai_4" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_4">
                            <label class="custom-control-label" for="jenis_pegawai_4">Dipekerjakan</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_5" value="jenis_pegawai_5" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_5">
                            <label class="custom-control-label" for="jenis_pegawai_5">Diperbantukan</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_6" value="jenis_pegawai_6" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_6">
                            <label class="custom-control-label" for="jenis_pegawai_6">Ditugaskan</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_7" value="jenis_pegawai_7" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_7">
                            <label class="custom-control-label" for="jenis_pegawai_7">Pindah</label>
                        </div>
                        </div>
                        <div class="form-group col-6">
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_8" value="jenis_pegawai_8" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_8">
                            <label class="custom-control-label" for="jenis_pegawai_8">Mengundurkan Diri</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_9" value="jenis_pegawai_9" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_9">
                            <label class="custom-control-label" for="jenis_pegawai_9">Masa Persiapan Pensiun</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_10" value="jenis_pegawai_10" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_10">
                            <label class="custom-control-label" for="jenis_pegawai_10">Pensiun</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_11" value="jenis_pegawai_11" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_11">
                            <label class="custom-control-label" for="jenis_pegawai_11">Berhenti dengan Tidak Hormat</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_12" value="jenis_pegawai_12" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_12">
                            <label class="custom-control-label" for="jenis_pegawai_12">Tugas Belajar</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_13" value="jenis_pegawai_13" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_13">
                            <label class="custom-control-label" for="jenis_pegawai_13">Ijin Belajar</label>
                        </div>
                        <div class="custom-control custom-checkbox mg-b-10">
                            <input name="jenis_pegawai_14" value="jenis_pegawai_14" type="checkbox" class="filter-jenis custom-control-input" id="jenis_pegawai_14">
                            <label class="custom-control-label" for="jenis_pegawai_14">Wafat</label>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="filter" onclick="filter()" class="btn btn-its-3 tx-poppins tx-medium">Terapkan</button>
            </div>
            {{-- </form> --}}
        </div>
        </div>
    </div>

    {{-- modal hapus --}}
    <div class="modal fade effect-scale" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h5 class="tx-poppins tx-medium">Hapus Penilai</h5>
              <p class="mg-b-0">Apakah Anda yakin ingin menghapus penilai ini?</p>
            </div>
            <form>
              <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Hapus</button>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
<script>
  $(function(){
    'use strict'

    const scroll1 = new PerfectScrollbar('#scroll1', {
      suppressScrollX: true
    });

    const scroll2 = new PerfectScrollbar('#scroll2', {
      suppressScrollX: true
    });

    const scroll3 = new PerfectScrollbar('#scroll3', {
      suppressScrollX: true
    });

    const scroll4 = new PerfectScrollbar('#scroll4', {
      suppressScrollX: true
    });

    const scroll5 = new PerfectScrollbar('#scroll5', {
      suppressScrollX: true
    });

  });
</script>
<script>
  $(function(){
      'use strict'
      
      $('#unit_kerja').select2({
        placeholder: "Cari unit kerja",
        searchInputPlaceholder: 'Cari',
        allowClear: false,
        dropdownParent: $('#my-form')
      });

      $('#tahun').select2({
        placeholder: "Pilih tahun",
        searchInputPlaceholder: 'Cari',
        allowClear: false,
        dropdownParent: $('#my-form')
      });
    });
</script>
@endsection
