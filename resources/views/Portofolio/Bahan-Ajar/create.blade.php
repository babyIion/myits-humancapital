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
        <li class="nav-item"><a href="/" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/home.svg') }}" class="wd-20 mg-r-15">Beranda</a></li>
        <li class="nav-item"><a href="profil" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/profile-blank.png') }}" class="wd-20 ht-20 mg-r-15 img-fluid rounded-circle" style="object-fit: cover;">Profil</a></li>
        <li class="nav-item"><a href="berkas" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/folder.svg') }}" class="wd-20 mg-r-15">Berkas Saya</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="portofolio" class="nav-link-its-active tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/portfolio.svg') }}" class="wd-20 mg-r-15">Portofolio</a>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <div>
                    <a href="{{ url('/portofolio') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <div>
                  <h4 class="tx-poppins tx-medium mg-t-8">
                    Tambah Bahan Ajar
                  </h4>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-7 mg-b-10">
                <div class="card bd-0">
                <div class="card-body">
                    <form action="" method="POST" role="form" id="my-form">
                        @csrf
                    <div class="form-label-group in-border">
                        <select class="form-select select2" name="id_jenis_bahan_ajar" id="jenis" required>
                            <option label="{{ __('Portofolio::general.pilih') }}"></option>
                            <option value="1">Buku Ajar</option>
                            <option value="2">Buku Ajar</option>
                        </select>
                        {{-- <input type="text" id="tt3" class="form-control form-control-lg" placeholder="Floating Label lg" /> --}}
                        <label for="tt3">Floating Label lg</label>
                    </div> 
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <select class="form-select select2" name="id_jenis_bahan_ajar" id="jenis" required>
                            <option label="{{ __('Portofolio::general.pilih') }}"></option>
                            <option value="1">Buku Ajar</option>
                            <option value="2">Buku Ajar</option>
                        </select>
                        {{-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> --}}
                    </div>
                    <div class="form-group form-floating">
                        <select class="form-select select2" name="id_jenis_bahan_ajar" id="jenis" required>
                            <option label="{{ __('Portofolio::general.pilih') }}"></option>
                            <option value="1">Buku Ajar</option>
                            <option value="2">Buku Ajar</option>
                        </select>
                        <label for="jenis">{{ __('Portofolio::bahan-ajar.jenis') }}<span style="color:red"> *</span></label>
                        @error('id_jenis_bahan_ajar')
                            <div class="invalid-feedback">
                                
                            </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" value="{{old('judul_buku')}}" id="judul_buku" placeholder="Aa" required>
                        <label for="judul_buku">{{ __('Portofolio::bahan-ajar.judul') }}<span style="color:red"> *</span></label>
                        @error('judul_buku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating">
                        <input type="text" name="penerbit" value="{{old('penerbit')}}" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" placeholder="Aa" required>
                        <label for="penerbit">{{ __('Portofolio::bahan-ajar.penerbit') }}<span style="color:red"> *</span></label>
                        @error('penerbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                      <div class="form-group form-floating wd-100p">
                        <select class="form-select select2 @error('peran') is-invalid @enderror" id="peran" name="peran" required>
                          <option value="">{{ __('Portofolio::general.pilih') }}</option>
                          <option value="A" @if(old('peran') == "A") selected @endif>Penulis</option>
                          <option value="B" @if(old('peran') == "B") selected @endif>Editor</option>
                          <option value="C" @if(old('peran') == "C") selected @endif>Penerjemah</option>
                          <option value="D" @if(old('peran') == "D") selected @endif>Penemu/Inventor</option>
                        </select>
                        <label for="peran">{{ __('Portofolio::bahan-ajar.peran') }}<span style="color:red"> *</span></label>
                        @error('peran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" value="{{old('isbn')}}" id="isbn" placeholder="Aa">
                                <label for="isbn">{{ __('Portofolio::bahan-ajar.isbn') }}</label>
                                @error('isbn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="form-floating">
                                <input type="date" id="tanggal_terbit" name="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" placeholder="" value="{{old('tanggal_terbit')}}">
                                {{-- <input type="text" class="form-control datepicker" name="tanggal_terbit" id="tanggal_terbit" placeholder="dd-mm-yyyy" value="{{old('tanggal_terbit')}}" required> --}}
                                <label for="tgl_terbit">{{ __('Portofolio::bahan-ajar.tgl_terbit') }}</label>
                                @error('tanggal_terbit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-floating">
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Aa" id="deskripsi" style="height: 100px">{{old('deskripsi')}}</textarea>
                        <label for="deskripsi">{{ __('Portofolio::bahan-ajar.deskripsi') }}</label>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('no_sk') is-invalid @enderror" name="no_sk" value="{{old('no_sk')}}" id="no_sk" placeholder="Aa">
                                <label for="no_sk">{{ __('Portofolio::bahan-ajar.no_sk') }}</label>
                                @error('no_sk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="form-floating">
                                <input type="date" id="tgl_sk_tugas" name="tanggal_sk_tugas" class="form-control @error('tanggal_sk_tugas') is-invalid @enderror" placeholder="" value="{{old('tanggal_sk_tugas')}}">
                                {{-- <input type="text" class="form-control datepicker" name="tanggal_sk_tugas" id="tgl_sk_tugas" placeholder="dd-mm-yyyy" value="{{old('tanggal_sk_tugas')}}" required> --}}
                                <label for="tgl_sk">{{ __('Portofolio::bahan-ajar.tgl_sk') }}</label>
                                @error('tanggal_sk_tugas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-its tx-poppins tx-medium float-right">{{ __('Portofolio::general.simpan') }}</button>
                    <a href="{{ url('/portofolio/bahan-ajar') }}" class="btn btn-sp-icon tx-poppins tx-medium float-right mg-r-5">{{ __('Portofolio::general.batal') }}</a>
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

@section('scripts')
