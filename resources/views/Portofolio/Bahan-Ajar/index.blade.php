@extends('Ui.base')

@section('title')
Bahan Ajar
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
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/home.svg') }}" class="wd-20 mg-r-15">Beranda</a></li>
        <li class="nav-item"><a href="{{ url('profil') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/profile-blank.png') }}" class="wd-20 ht-20 mg-r-15 img-fluid rounded-circle" style="object-fit: cover;">Profil</a></li>
        <li class="nav-item"><a href="{{ url('berkas') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/folder.svg') }}" class="wd-20 mg-r-15">Berkas Saya</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('portofolio') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/portfolio.svg') }}" class="wd-20 mg-r-15">Portofolio</a>
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
        <li class="nav-item d-flex justify-content-between align-items-center"><a href="beasiswa" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/skem.svg') }}" class="wd-20 mg-r-15">Qinerja</a>
      </ul>
    </div>
  </aside>
@endsection

@section('content')
<div class="content pd-0" style="position: relative">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-10 mg-t-60">
    <div class="content-body">
        <div class="container pd-x-0 mn-ht-450 mn-ht-xxl-750" id="content">
          {{-- <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div>
              <nav aria-label="breadcrumb" class="mg-b-10">
                <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                  <li class="breadcrumb-item"><a href={{ url('') }}>Beranda</a></li>
                  <li class="breadcrumb-item"><a href="/profil">Portofolio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bahan Ajar</li>
                </ol>
              </nav>
              <h4 class="tx-poppins tx-medium mg-b-0">Bahan Ajar</h4>
            </div>
          </div> --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <div>
                    <nav aria-label="breadcrumb" class="mg-b-10">
                      <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href={{ url('') }}>Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/profil">Portofolio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bahan Ajar</li>
                      </ol>
                    </nav>
                    {{-- <a href="{{ url('/portofolio') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a> --}}
                    <div>
                      <h4 class="tx-poppins tx-medium mg-t-8">
                        Bahan Ajar
                      </h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <a href="{{ url('portofolio/bahan-ajar/tambah') }}" class="btn btn-its-3 tx-poppins tx-medium d-flex align-items-center mg-r-10"><i data-feather="plus" class="mg-r-10"></i>Tambah Bahan Ajar</a>
                <a href="#btn-filter" class="btn btn-white tx-poppins tx-medium d-flex align-items-center mg-l-5" data-toggle="modal" data-animation="effect-scale"><i data-feather="filter" class="tx-18 mg-r-10"></i>Filter</a>
            </div>
        
            {{-- Tabel --}}
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body table-responsive pd-b-10">
                    {{-- <div class="table-responsive pd-b-10"> --}}
                      <table id="example1" class="table table-hover table-borderless" style="width:100%">
                        <thead>
                          <tr>
                            <th class="table-its wd-20p">Judul</th>
                            <th class="table-its wd-20p">Jenis</th>
                            <th class="table-its wd-20p">Penerbit</th>
                            <th class="table-its wd-20p">No SK</th>
                            <th class="table-its wd-20p">Tanggal SK</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="bd-b">
                              <td class="table-its">
                                <a href="{{ url('/portofolio/bahan-ajar/detail/') }}" class="tx-poppins tx-medium tx-color-its3">Buku A</a>
                                <p class="tx-13 tx-color-03 mg-b-0">SADLJF-2144-SADAF</p>
                              </td>
                              <td class="table-its">
                                Buku Ajar
                              </td>
                              <td class="table-its">Erlangga
                              </td>
                              <td class="table-its">ITS/VI/SDK/90</td>
                              <td class="table-its">12 September 2020</td>
                            </tr>
                        </tbody>
                      </table>
                    {{-- </div> --}}
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
                          <p class="tx-poppins tx-medium tx-15">{{ __('Portofolio::general.rentang_waktu') }}</p>
                          <div class="form-group form-floating">
                            <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" placeholder="0">
                            <label for="datepicker1">{{ __('Portofolio::general.awal') }}</label>
                          </div>
                          <div class="form-group form-floating">
                            <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" placeholder="0">
                            <label for="datepicker2">{{ __('Portofolio::general.akhir') }}</label>
                          </div>
                          <p class="tx-poppins tx-medium tx-15">{{ __('Portofolio::bahan-ajar.jenis') }}</p>
                              <div class="form-row">
                                <div class="form-group col-6">
                                  <div class="custom-control custom-checkbox">
                                    {{-- <input name="id_jenis_bahan_ajar[]" value="{{$jenis->id_jenis_bahan_ajar}}" type="checkbox" class="filter-jenis custom-control-input" id="jenis{{$jenis->id_jenis_bahan_ajar}}">
                                    <label class="custom-control-label" for="jenis{{$jenis->id_jenis_bahan_ajar}}">{{$jenis->nama}}</label> --}}
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="filter" onclick="filter()" class="btn btn-its tx-poppins tx-medium">{{ __('Portofolio::general.tampilkan') }}</button>
                      </div>
                    {{-- </form> --}}
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
@endsection

@section('scripts')
