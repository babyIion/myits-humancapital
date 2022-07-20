@extends('Ui.base')

@section('title')
Tambah Data Pegawai
@endsection

@section('styles')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            border-color: #c0ccda;
            padding-left: 20px !important;
            padding-top: 3px !important;
        }
        .select2-selection__choice, .select2-selection__choice__remove {
            color: #000 !important;
        }
        .select2-selection__rendered {
            color: #001737;
            border-color: #c0ccda;
            line-height: calc(3em + 0.9375rem + 2px) !important;
            margin-left: 5px;
            margin-top: 5px;
        }
        .select2-container .select2-selection--single {
            border-color: #c0ccda;
            height: calc(3em + 0.9375rem + 2px) !important;
        }
        .select2-selection__arrow {
            padding-right: 20px !important;
            height: calc(3em + 0.9375rem + 2px) !important;
            margin-top: 5px;
            margin-right: 10px;
        }
        .select2-selection__clear {
            margin-right: 10px;
        }
        .select2-selection__placeholder {
            color: #001737 !important;
        }
    </style>
    <link rel="stylesheet" href="assets/css/dashforge.filemgr.css">
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
        <li class="nav-item"><a href="{{ url('/admin/data-pegawai') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate"><img src="{{ asset('assets/img/scholarship-profile.svg') }}" class="wd-20 ht-20 mg-r-15">Data Pegawai</a></li>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <div>
                    <a href="{{ url('/admin/data-pegawai') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <div>
                  <h4 class="tx-poppins tx-medium mg-t-8">
                    Tambah Pegawai
                  </h4>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-7 mg-b-10">
                <div class="card bd-0">
                <div class="card-body">
                    <form action="{{url('admin/data-pegawai/save')}}" method="POST" role="form" id="my-form">
                        @csrf
                        <div class="tab" id="tab1">
                            <div class="progress mg-b-10">
                                <div class="progress-bar wd-30p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="tx-color-03">Halaman 1 dari 3</p>
                            <h5 class="tx-poppins tx-medium mg-b-15">Data Diri</h5>
                            <div class="form-group form-floating">
                                <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{old('nama')}}" required>
                                <label for="nama">Nama Lengkap<span style="color:red"> *</span></label>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" value="{{ old('nik') }}" placeholder="nik" required>
                                <label for="nik">NIK<span style="color:red"> *</span></label>
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="nomor_telepon" type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" value="{{ old('nomor_telepon') }}" placeholder="No. Telepon/HP" required>
                                <label for="nomor_telepon">Nomor Telepon<span style="color:red"> *</span></label>
                                @error('nomor_telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="tempat_lahir" required>
                                <label for="tempat_lahir">Tempat Lahir<span style="color:red"> *</span></label>
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" placeholder="dd-mm-yyyy" required>
                                {{-- <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" value="{{ old('tgl_lahir') }}" placeholder="dd-mm-yyyy" required> --}}
                                <label for="tgl_lahir">Tanggal Lahir<span style="color:red"> *</span></label>
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2 @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option label="Pilih salah satu"></option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <label for="jenis_kelamin">Jenis Kelamin<span style="color:red"> *</span></label>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2 @error('status_kawin') is-invalid @enderror" name="status_kawin" id="status_kawin" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="status_kawin">Status Perkawinan<span style="color:red"> *</span></label>
                                @error('status_kawin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2 @error('agama') is-invalid @enderror" name="agama" id="agama" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="agama">Agama<span style="color:red"> *</span></label>
                                @error('agama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2 @error('gol_darah') is-invalid @enderror" name="gol_darah" id="gol_darah" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="gol_darah">Golongan Darah</label>
                                @error('gol_darah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" value="{{ old('no_telp') }}" onkeypress="return isNumber(event)" placeholder="no_telp" required>
                                <label for="no_telp">Nomor Telepon</label>
                                @error('no_telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2-negara @error('kewarganegaran') is-invalid @enderror" name="kewarganegaraan" id="kewarganegaraan" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                @error('kewarganegaraan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <h6 class="tx-poppins tx-medium mg-b-15">Alamat Domisili</h6>
                            <div class="form-group form-floating">
                                <input name="alamat" type="text" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required>
                                <label for="alamat">Alamat</label>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <div class="form-floating">
                                        <select class="form-select select2-provinsi @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" required>
                                            <option label="Pilih salah satu"></option>
                                        </select>
                                        <label for="provinsi">Provinsi</label>
                                        @error('provinsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="form-floating">
                                        <select class="form-select select2-kota @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten" required>
                                            <option label="Pilih salah satu"></option>
                                        </select>
                                        <label for="kabupaten">Kota/Kabupaten</label>
                                        @error('kabupaten')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>   
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <div class="form-floating">
                                        <select class="form-select select2-kecamatan @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" required>
                                            <option label="Pilih salah satu"></option>
                                        </select>
                                        <label for="kecamatan">Kecamatan</label>
                                        @error('kecamatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="form-floating">
                                        <input name="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" value="{{ old('kelurahan') }}" id="kelurahan" placeholder="kelurahan" required>
                                        <label for="kelurahan">Kelurahan</label>
                                        @error('kecamatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>   
                            </div>
                            <div class="form-row">
                                <div class="form-group col-3">
                                    <div class="form-floating">
                                        <input name="rt" type="text" class="form-control @error('rt') is-invalid @enderror" onkeypress="return isNumber(event)" value="{{ old('rt') }}" id="rt" placeholder="rt" required>
                                        <label for="rt">RT</label>
                                        @error('rt')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <div class="form-floating">
                                        <input name="rw" type="text" class="form-control @error('rw') is-invalid @enderror" onkeypress="return isNumber(event)" value="{{ old('rw') }}" id="rw" placeholder="rw" required>
                                        <label for="rw">RW</label>
                                        @error('rw')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="form-floating">
                                        <input name="kodepos" type="number" class="form-control @error('kodepos') is-invalid @enderror" onkeypress="return isNumber(event)" value="{{ old('kodepos') }}" id="kodepos" placeholder="kodepos" required>
                                        <label for="kodepos">Kode Pos</label>
                                        @error('kodepos')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="tab" id="tab2">
                            <div class="progress mg-b-10">
                                <div class="progress-bar wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="tx-color-03">Halaman 2 dari 3</p>
                            <h5 class="tx-poppins tx-medium mg-b-15">Data Kepegawaian</h5>
                            <div class="form-group form-floating">
                                <select class="form-select select2" name="status_pegawai" id="status_pegawai" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="status_pegawai">Status Kepegawaian<span style="color:red"> *</span></label>
                                @error('status_pegawai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2" name="jenis_sdm" id="jenis_sdm" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="jenis_sdm">Jenis SDM<span style="color:red"> *</span></label>
                                @error('jenis_sdm')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <select class="form-select select2" name="status_aktif" id="status_aktif" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                <label for="status_aktif">Status Keaktifan<span style="color:red"> *</span></label>
                                @error('status_aktif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="no_karpeg" type="text" class="form-control @error('no_karpeg') is-invalid @enderror" value="{{ old('no_karpeg') }}" id="no_karpeg" placeholder="no_karpeg" required>
                                <label for="no_karpeg">No Kartu Pegawai</label>
                                @error('no_karpeg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="nip" type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" id="nip" placeholder="nip" required>
                                <label for="nip">NIP/NPP</label>
                                @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="nidn" type="text" class="form-control @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}" id="nidn" placeholder="nidn" required>
                                <label for="nidn">NIDN/NIDK/NITK</label>
                                @error('nidn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group form-floating">
                                <input name="npwp" type="text" value="{{ old('npwp') }}" class="form-control @error('npwp') is-invalid @enderror" id="npwp" placeholder="npwp" required>
                                @error('npwp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="npwp">{{ __('Admin::biodata.npwp') }}</label>
                            </div>
                            <div class="form-group form-floating">
                                <input name="nm_wp" type="text" value="{{ old('nm_wp') }}" class="form-control @error('nm_wp') is-invalid @enderror" id="nm_wp" placeholder="nm_wp" required>
                                @error('nm_wp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="nm_wp">{{ __('Admin::biodata.nama_wajib_pajak') }}</label>
                            </div> --}}
                            {{-- <div class="form-group form-floating">
                                <input name="tgl_pensiun" id="tgl_pensiun" type="text" class="form-control datepicker @error('tgl_pensiun') is-invalid @enderror" value="{{ old('tgl_pensiun') }}" placeholder="dd-mm-yyyy" required>
                                <label for="tgl_pensiun">{{ __('Admin::biodata.tgl_pensiun') }}</label>
                                @error('tgl_pensiun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                            <div class="form-group form-floating">
                                <select class="form-select select2 @error('usia_pensiun') is-invalid @enderror" name="usia_pensiun" id="usia_pensiun" required>
                                    <option label="Pilih salah satu"></option>
                                </select>
                                @error('usia_pensiun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="usia_pensiun">Usia Pensiun</label>
                                {{-- <input type="hidden" name="tgl_lahir" value=""> --}}
                            </div>
                            <div class="form-group form-floating">
                                <input name="id_simpeg" type="text" value="{{ old('id_simpeg') }}" class="form-control @error('id_simpeg') is-invalid @enderror" id="id_simpeg" id="id_simpeg" placeholder="id_simpeg" required>
                                <label for="id_simpeg">ID Simpeg</label>
                                @error('id_simpeg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="fingerprint" type="text" value="{{ old('fingerprint') }}" class="form-control @error('fingerprint') is-invalid @enderror" id="fingerprint" placeholder="fingerprint" required>
                                <label for="fingerprint">ID Fingerprint</label>
                                @error('fingerprint')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="tab" id="tab3">
                            <div class="progress mg-b-10">
                                <div class="progress-bar wd-100p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="tx-color-03">Halaman 3 dari 3</p>
                            <h5 class="tx-poppins tx-medium mg-b-15">Data Riset</h5>
                            <div class="form-group form-floating">
                                <input name="google_scholar" type="text" value="{{ old('google_scholar') }}" class="form-control @error('google_scholar') is-invalid @enderror" id="google_scholar" placeholder="google_scholar" required>
                                <label for="google_scholar">ID Google Scholar</label>
                                @error('google_scholar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="scopus" type="text" value="{{ old('scopus') }}" class="form-control @error('scopus') is-invalid @enderror" id="scopus" placeholder="scopus" required>
                                <label for="scopus">ID Scopus</label>
                                @error('scopus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-floating">
                                <input name="sinta" type="text" value="{{ old('sinta') }}" class="form-control @error('sinta') is-invalid @enderror" id="sinta" placeholder="sinta" required>
                                <label for="sinta">ID Sinta</label>
                                @error('sinta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-its-3 tx-poppins tx-medium float-right" id="nextBtn" onclick="nextPage()">Selanjutnya</button>
                            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium float-right mg-r-5" id="prevBtn" onclick="prevPage()">Sebelumnya</button>
                        </div>
                        {{-- <button type="submit" class="btn btn-its tx-poppins tx-medium float-right">{{ __('Admin::general.simpan') }}</button> --}}
                        {{-- <a href="{{ url('/admin/profil/data-diri') }}" class="btn btn-sp-icon tx-poppins tx-medium float-right mg-r-5">{{ __('Admin::general.batal') }}</a> --}}
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
<script>
    $(function(){
        'use strict'
      
        // Basic with search
        $('.select2').select2({
                width: '100%',
                placeholder: 'Pilih salah satu',
                searchInputPlaceholder: 'Cari',
                allowClear: true
            });
        
        // Disable search
        $('.select2-no-search').select2({
                minimumResultsForSearch: Infinity,
                placeholder: 'Pilih salah satu',
                allowClear: true
        });

        $('#jenis_kelamin').select2({
            minimumResultsForSearch: Infinity,
            placeholder: "Pilih salah satu",
        });

        $('.datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy'
        });
    }); 
</script>
<script>

    var globalCurrent = 1;

    initialShowTab();

    function initialShowTab()
    {
        document.getElementById('tab1').style.display = "inline";
        document.getElementById('tab2').style.display = "none";
        document.getElementById('tab3').style.display = "none";

        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("prevBtn").style.display = "none";
    }

    function nextPage()
    {
        globalCurrent += 1;

        movePage(globalCurrent);
    }

    function prevPage()
    {
        globalCurrent -=1;

        movePage(globalCurrent);
    }

    function movePage(globalCurrent)
    {
        for(let i = 1; i<=3; i++)
        {
            if(i==globalCurrent)
            {
                // console.info(i);
                document.getElementById('tab'+i).style.display = "inline";

                if(i==3)
                {
                    document.getElementById("nextBtn").innerHTML = "Simpan";
                    // document.getElementById("nextBtn").removeAttribute("onclick");
                    document.getElementById("nextBtn").setAttribute("onclick", "submitForm()");
                    document.getElementById("prevBtn").style.display = "inline";
                }
                else if(i==2)
                {
                    document.getElementById("nextBtn").innerHTML = "Selanjutnya";
                    document.getElementById("nextBtn").style.display = "inline";
                    document.getElementById("nextBtn").setAttribute('onclick', 'nextPage()');
                    document.getElementById("prevBtn").style.display = "inline";
                }
                else if(i==1)
                {
                    document.getElementById("nextBtn").style.display = "inline";
                    document.getElementById("nextBtn").setAttribute('onclick', 'nextPage()');
                    document.getElementById("prevBtn").style.display = "none";
                }
            }
            else {
                document.getElementById('tab'+i).style.display = "none";
            }
        }
    }

    function submitForm()
    {
        location.href='{{ url('/admin/data-pegawai/added') }}';
    }
</script>
@endsection
