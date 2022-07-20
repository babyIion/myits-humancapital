@extends('Ui.base')

@section('title')
Edit Data Riset
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
        <li class="nav-item"><a href="{{ url('profil') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/profile-blank.png') }}" class="wd-20 ht-20 mg-r-15 img-fluid rounded-circle" style="object-fit: cover;">Profil</a></li>
        <li class="nav-item"><a href="{{ url('berkas') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/folder.svg') }}" class="wd-20 mg-r-15">Berkas Saya</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('portofolio') }}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/portfolio.svg') }}" class="wd-20 mg-r-15">Portofolio</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-portofolio" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-portofolio">
          <li class="nav-item mg-l-15"><a href="{{ url('portofolio/bahan-ajar') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-bahan-ajar.svg') }}" class="wd-20 mg-r-15">Bahan Ajar</a></li>
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
          <li class="nav-item mg-l-15"><a href="{{ url('portofolio/sertifikasi') }}" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-certification.svg') }}" class="wd-20 mg-r-15">Sertifikasi</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/tes" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/portfolio-certification.svg') }}" class="wd-20 mg-r-15">Tes</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="kepegawaian" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/scholarship-profile.svg') }}" class="wd-20 mg-r-15">Kepegawaian</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-kepegawaian" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-kepegawaian">
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-hukuman.svg') }}" class="wd-20 mg-r-15">Hukuman</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-kepangkatan.svg') }}" class="wd-20 mg-r-15">Kepangkatan</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-kesejahteraan.svg') }}" class="wd-20 mg-r-15">Kesejahteraan</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-pemberhentian.svg') }}" class="wd-20 mg-r-15">Pemberhentian</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-tugas-belajar.svg') }}" class="wd-20 mg-r-15">Tugas Belajar</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-jabatan.svg') }}" class="wd-20 mg-r-15">Riwayat Jabfung</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/riwayat-jabatan.svg') }}" class="wd-20 mg-r-15">Riwayat Jabstruk</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Riwayat Kenaikan Gaji</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Inpassing</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Beasiswa</a></li>
          <li class="nav-item mg-l-15"><a href="" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/hcm-riwayat-gaji.svg') }}" class="wd-20 mg-r-15">Tunjangan</a></li>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <div>
                  <nav aria-label="breadcrumb" class="mg-b-10">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                      <li class="breadcrumb-item"><a href="{{ url('profil') }}">Profil</a></li>
                      <li class="breadcrumb-item"><a href="{{ url('profil/biodata') }}">Biodata</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Edit Data Riset</li>
                    </ol>
                  </nav>
                  <div class="d-flex align-items-center justify-content-start">
                    <div>
                      <a href="{{ url('/biodata') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                    </div>
                    <h4 class="tx-poppins tx-medium mg-b-0">Edit Data Riset</h4>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-7 mg-b-10">
                <div class="card bd-0">
                <div class="card-body">
                    <form action="" method="POST" role="form" id="my-form">
                        @csrf
                    <div class="form-group form-floating">
                        <input type="text" class="form-control @error('id_scholar') is-invalid @enderror" name="id_scholar" value="{{old('id_scholar')}}" id="id_scholar" placeholder="Aa">
                        <label for="id_scholar">ID Google Scholar</label>
                        @error('id_scholar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="text" name="id_scopus" value="{{old('id_scopus')}}" class="form-control @error('id_scopus') is-invalid @enderror" id="id_scopus" placeholder="Aa">
                        <label for="id_scopus">ID Scopus</label>
                        @error('id_scopus')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="text" name="id_sinta" value="{{old('id_sinta')}}" class="form-control @error('id_sinta') is-invalid @enderror" id="id_sinta" placeholder="Aa">
                        <label for="id_sinta">ID Sinta</label>
                        @error('id_sinta')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-its-3 tx-poppins tx-medium float-right">Simpan</button>
                    <a href="{{ url('/profil/biodata') }}" class="btn btn-its-custom-1 tx-poppins tx-medium float-right mg-r-5">Batal</a>
                    </form>
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