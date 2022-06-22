@extends('Ui.base')

@section('title')
Biodata
@endsection

@section('menu')
<aside class="aside aside-fixed">
    <div class="aside-header">
      <a href="beranda" class="aside-logo tx-medium tx-13 tx-md-15 tx-color-02">
          <img src="assets/img/portfolio-organization.svg" class="ht-35">
          <p class="tx-poppins tx-medium tx-13 tx-md-15 tx-color-02 mg-b-0 mg-l-15">myITS <span class="tx-bold">HumanCapital</span></p>
      </a>
      <a href="" class="aside-menu-link">
        <ion-icon name="menu" class="mg-y-2 tx-18"></ion-icon>
      </a>
    </div>
    <div class="aside-body">
      <ul class="sidebar-nav">
        <li class="nav-item"><a href="." class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/home.svg" class="wd-20 mg-r-15">Beranda</a></li>
        <li class="nav-item"><a href="profil" class="nav-link-its-active tx-poppins tx-medium text-truncate"><img src="assets/img/profile-blank.png" class="wd-20 ht-20 mg-r-15 img-fluid rounded-circle" style="object-fit: cover;">Profil</a></li>
        <li class="nav-item"><a href="berkas" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/folder.svg" class="wd-20 mg-r-15">Berkas Saya</a></li>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow-menu"><a href="portofolio" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="assets/img/portfolio.svg" class="wd-20 mg-r-15">Portofolio</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-portofolio" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-forward" class="mg-y-2 tx-18 icon-menu"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-portofolio">
          <li class="nav-item mg-l-15"><a href="/portofolio/bahan-ajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-bahan-ajar.svg" class="wd-20 mg-r-15">Bahan Ajar</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/detasering" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-detasering.svg" class="wd-20 mg-r-15">Detasering</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/diklat" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-training.svg" class="wd-20 mg-r-15">Diklat</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/hki" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-ipr.svg" class="wd-20 mg-r-15">HKI</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karya-cipta" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-ipr.svg" class="wd-20 mg-r-15">Karya Cipta</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/karyailmiah" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-scientific.svg" class="wd-20 mg-r-15">Karya Ilmiah</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/kepanitiaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-intern.svg" class="wd-20 mg-r-15">Kepanitiaan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/organisasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-organization.svg" class="wd-20 mg-r-15">Organisasi Profesi</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/pembicara" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-activity.svg" class="wd-20 mg-r-15">Pembicara</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/penelitian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-enterpreneurship.svg" class="wd-20 mg-r-15">Penelitian</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/pengabdian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-dedication.svg" class="wd-20 mg-r-15">Pengabdian</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/pengelola-jurnal" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-jurnal.svg" class="wd-20 mg-r-15">Pengelola Jurnal</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/penghargaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-competition.svg" class="wd-20 mg-r-15">Penghargaan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/riwayat-pekerjaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-enterpreneurship.svg" class="wd-20 mg-r-15">Riwayat Pekerjaan</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/sertifikasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-certification.svg" class="wd-20 mg-r-15">Sertifikasi</a></li>
          <li class="nav-item mg-l-15"><a href="/portofolio/tes" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/portfolio-certification.svg" class="wd-20 mg-r-15">Tes</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow-menu"><a href="kepegawaian" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="assets/img/scholarship-profile.svg" class="wd-20 mg-r-15">Kepegawaian</a>
            <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-kepegawaian" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-forward" class="mg-y-2 tx-18 icon-menu"></ion-icon></button>
        </li>
        <div class="collapse" id="collapse-menu-kepegawaian">
          <li class="nav-item mg-l-15"><a href="/kepegawaian/hukuman" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-hukuman.svg" class="wd-20 mg-r-15">Hukuman</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/kepangkatan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-kepangkatan.svg" class="wd-20 mg-r-15">Kepangkatan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/kesejahteraan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-kesejahteraan.svg" class="wd-20 mg-r-15">Kesejahteraan</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/pemberhentian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-pemberhentian.svg" class="wd-20 mg-r-15">Pemberhentian</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/tugas-belajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-tugas-belajar.svg" class="wd-20 mg-r-15">Tugas Belajar</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-jabfung" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-riwayat-jabatan.svg" class="wd-20 mg-r-15">Riwayat Jabfung</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-jabstruk" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/riwayat-jabatan.svg" class="wd-20 mg-r-15">Riwayat Jabstruk</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/riwayat-gaji" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Riwayat Kenaikan Gaji</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/inpassing" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Inpassing</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/beasiswa" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Beasiswa</a></li>
          <li class="nav-item mg-l-15"><a href="/kepegawaian/tunjangan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Tunjangan</a></li>
        </div>
        <li class="nav-item d-flex justify-content-between align-items-center"><a href="beasiswa" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="assets/img/skem.svg" class="wd-20 mg-r-15">Qinerja</a>
      </ul>
    </div>
  </aside>
@endsection

@section('content')
<div class="row row-xs">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
      <div class="card bd-0">
        <div class="card-body">
          <h5 class="tx-poppins tx-medium mg-b-15">Data Diri<span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="{{ url('profil/biodata/edit/data-diri') }}" class="badge badge-its-link tx-poppins tx-medium tx-15"> Edit </a></h5>
          <div class="card-list-item">
            <div class="row row-xs">
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.nama') }} </div>
              <div class="col-8 col-md-10 mg-b-10">Arjuna, S.Kom., M.Kom.</div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.nik') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> 029842841247 </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.tempat_lahir') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->tempat_lahir }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.tgl_lahir') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->tgl_lahir != null ? date('d-m-Y', strtotime($sdm->tgl_lahir)) : '' }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.jenis_kelamin') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $jenis_kelamin[$sdm->jenis_kelamin] }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.gol_darah') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->gol_darah }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.no_telp') }}</div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->no_telp }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.agama') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->agama->nama }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.status_kawin') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->statusKawin->nama }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.warga_negara') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->negara->nama }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.alamat_domisili') }} </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->jalan }}, <br>RT/RW: {{$sdm->rt}}/{{$sdm->rw}} <br>Kode Pos: {{$sdm->kode_pos}} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.alamat_ktp') }} </div>
              <div class="col-8 col-md-10 mg-b-10">
                @if ($sdm->jalan_ktp!=NULL)
                  {{ $sdm->jalan_ktp }}
                @endif
                @if ($sdm->rt_ktp!=NULL && $sdm->rw_ktp!=NULL)
                  <br>RT/RW: {{$sdm->rt_ktp}}/{{$sdm->rw_ktp}}
                @endif
                @if ($sdm->kode_pos_ktp!=NULL)
                  <br>Kode Pos: {{$sdm->kode_pos_ktp}}
                @endif
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
      <div class="card bd-0">
        <div class="card-body">
          <h5 class="tx-poppins tx-medium mg-b-15">{{ __('Profil::general.kepegawaian') }} {{-- <span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="{{ url('profil/biodata/edit/data-kepegawaian') }}" class="badge badge-its-link tx-poppins tx-medium tx-15"> Edit </a> --}}</h5>
          <div class="card-list-item">
            <div class="row row-xs">
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.status_kepeg') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->statusPegawai->nama }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.jenis_sdm') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->jenisSdm->nama }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.status_aktif') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->statusAktif->nama }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.no_kapeg') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->no_karpeg }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.nip') }}</div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->nip }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.nidn') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->nidn }} </div>
                {{-- <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.npwp') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->npwp }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.nama_wajib_pajak') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->nm_wp }} </div> --}}
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.tgl_pensiun') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->tgl_pensiun != null ? date('Y-m-d', strtotime($sdm->tgl_pensiun)) : '' }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.tgl_wafat') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->tgl_wafat != null ? date('Y-m-d', strtotime($sdm->tgl_wafat)) : '' }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.tgl_resign') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->tgl_resign != null ? date('Y-m-d', strtotime($sdm->tgl_resign)) : '' }} </div>
                <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> {{ __('Profil::biodata.id_finger') }} </div>
                <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->fingerprint }} </div>
            </div>
            </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
      <div class="card bd-0">
        <div class="card-body">
          <h5 class="tx-poppins tx-medium mg-b-15">{{ __('Profil::general.riset') }}  <span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="{{ url('profil/biodata/edit/data-riset') }}" class="badge badge-its-link tx-poppins tx-medium tx-15"> Edit </a></h5>
          <div class="card-list-item">
            <div class="row row-xs ">
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> ID Google Scholar </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->id_gscholar }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> ID Scopus </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->id_scopus }} </div>
              <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> ID Shinta </div>
              <div class="col-8 col-md-10 mg-b-10"> {{ $sdm->id_sinta }} </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
      <div class="card bd-0">
        <div class="card-body">
          {{-- <h5 class="tx-poppins tx-medium mg-b-15"> Berkas <span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="{{ url('profil/biodata/edit/' . $sdm->id_sdm . '/part/3') }}" class="badge badge-its-link tx-poppins tx-medium tx-15"> Edit </a></h5> --}}
          <div class="card-list-item">
            {{-- span edit ada waktu belum diajukan --}}
            <h5 class="tx-poppins tx-medium mg-b-15">{{ __('Profil::general.berkas') }}<span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="{{url('profil/biodata/edit-berkas/' . $sdm->id_sdm)}}" class="badge badge-its-link tx-poppins tx-medium tx-15">{{ __('Profil::general.sunting') }}</a> </h5>
            <div class="card-list">
              @foreach ($dokBiodata as $dok)
              <div class="card-list-media">
                <p class="tx-poppins tx-medium tx-13">
                  {{$dok['deskripsi']}}
                  @if ($dok['is_mandatory']=="0")
                    <b>(Opsional)</b>
                  @endif
                </p>
                @if (count($dok['dokumen'])>0)
                  @foreach ($dok['dokumen'] as $item)
                    <div class="row row-xs">
                      <div class="col-12 col-md-6 col-lg-4 mg-b-10">
                        <div class="bd pd-y-15 pd-x-15 pd-sm-x-20 rounded-its-10 d-flex justify-content-between align-items-center">
                          <div class="media d-flex justify-content-center align-items-center">
                              @if (trim($item['ekstensi'])=="pdf")
                                <img src="{{ asset('assets/img/format-pdf.svg')}}" class="wd-35 wd-md-35 wd-lg-35 mg-r-10">
                              @else
                                <img src="{{ asset('assets/img/format-img.svg')}}" class="wd-35 wd-md-35 wd-lg-35 mg-r-10">
                              @endif
                              <div class="media-body">
                                @if (trim($item['ekstensi'])=="pdf")
                                    <a target="_blank" href="{{ url('api/profil/biodata/berkas/stream/detail/' . $item['id_dokumen'] . '/' . $item['nama_dokumen'] . '.' . trim($item['ekstensi'])) }}" class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">{{$item['nama_dokumen']}}.{{$item['ekstensi']}}</a>
                                @else
                                    <a target="_blank" href="{{ url('api/profil/biodata/berkas/stream/detail/' . $item['id_dokumen'] . '/' . $item['nama_dokumen']) }}" class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">{{$item['nama_dokumen']}}.{{$item['ekstensi']}}</a>
                                @endif
                                <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">{{date('d-m-Y H:i', strtotime($item['updated_at']))}}</p>
                              </div>
                          </div>
                              <div class="dropdown">
                                <a href="" class="dropdown-link btn btn-icon btn-sp-icon bdr-sp-50p" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                                  @if (trim($item['ekstensi'])=="pdf")
                                      <a href="{{ url('api/profil/biodata/berkas/stream/unduh/' . $item['id_dokumen'] . '/' . $item['nama_dokumen'] . '.' . trim($item['ekstensi'])) }}" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div>{{ __('Profil::general.unduh') }}</a>
                                  @else
                                      <a href="{{ url('api/profil/biodata/berkas/stream/unduh/' . $item['id_dokumen'] . '/' . $item['nama_dokumen']) }}" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div>{{ __('Profil::general.unduh') }}</a>
                                  @endif
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                @else
                  <span class="badge badge-danger-transparent tx-12 ">{{ __('Ui::general.berkas_kosong') }}</span>
                @endif
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- row -->
  @endsection