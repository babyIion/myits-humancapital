@extends('Ui.base')

@section('title')
Hasil dan Kualitas Kerja Unit
@endsection

@section('styles')
<style>
  .datepicker{ z-index:99999 !important; }
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
                      <li class="breadcrumb-item active" aria-current="page">Hasil dan Kualitas Kerja Unit</li>
                    </ol>
                  </nav>
                  <div class="d-flex align-items-center justify-content-start">
                    <div>
                      <a href="{{ url('/admin/qinerja') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                    </div>
                    <h4 class="tx-poppins tx-medium mg-b-0">Hasil dan Kualitas Kerja Unit</h4>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <div>
                    <p class="tx-color-03 mg-b-0">Periode Bulan</p>
                    <div class="dropdown dropdown-custom">
                        <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-bulan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jan-Jun
                        </button>
                        <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-bulan">
                        <a class="dropdown-item active" href="#">Jan-Jun</a>
                        <a class="dropdown-item" href="#">Jul-Des</a>
                        </div>
                    </div>
                </div>
                <div class="mg-l-10">
                    <p class="tx-color-03 mg-b-0">Periode Tahun</p>
                    <div class="dropdown dropdown-custom">
                        <button class="btn btn-white tx-poppins tx-medium wd-100 dropdown-toggle" type="button" id="dropdown-tahun" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <div class="mg-l-10">
                    <p class="tx-color-03 mg-b-0">Komponen</p>
                    <div class="dropdown dropdown-custom wd-100p">
                        <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-bulan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kesesuaian Prosedur Pengelolaan Keuangan dan/atau Non Keuangan berdasarkan Hasil Audit
                        </button>
                        <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-bulan">
                        <a class="dropdown-item active" href="#">Kesesuaian Prosedur Pengelolaan Keuangan dan/atau Non Keuangan berdasarkan Hasil Audit</a>
                        <a class="dropdown-item" href="#">Nilai Implementasi Budaya Kerja di Unit Kerja</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                <div class="card bd-0">
                  <div class="card-body">
                    <p class="tx-14 tx-color-03"></p>
                    <div class="row row-xs">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
                        {{-- <div class="align-centered"> --}}
                            <p class="tx-13 tx-danger mg-b-0 align-centered text-center">Belum ada data, silakan unggah terlebih dahulu. </p>
                        {{-- </div> --}}
                        <div class="pd-15 pd-sm-10 d-flex align-items-center justify-content-center">
                            <div class="custom-file wd-60p">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Unggah dokumen Excel</label>
                            </div>
                            <button href="#konfirmasi" class="btn btn-its-3 tx-poppins tx-medium d-flex align-items-center mg-l-10" disabled data-toggle="modal" data-animation="effect-scale"><ion-icon name="cloud-upload-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Unggah</button>
                          {{-- <a href="{{ url('/admin/qinerja/kualitas-kerja-added') }}" id="UnggahBtn" class="disabled btn btn-its-3 tx-poppins tx-medium d-flex align-items-center mg-l-10" data-toggle="modal" data-animation="effect-scale"><ion-icon name="cloud-upload-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Unggah</a> --}}
                        </div>
                      </div>
                    </div>
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

  {{-- modal konfirmasi --}}
  <div class="modal fade effect-scale" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="konfirmasi" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5 class="tx-poppins tx-medium">Unggah Dokumen</h5>
          <p class="mg-b-0">Apakah Anda yakin ingin mengunggah dokumen ini?</p>
        </div>
        <form>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
            <a href="{{ url('/admin/qinerja/kualitas-kerja-added') }}" class="btn btn-its-3 tx-poppins tx-medium">Unggah</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>
$(document).ready(function(){
    $('input[type=file]').change(function(){
    if($('input[type=file]').val()==''){
    	$('button').attr('disabled',true)
    } 
    else{
      $('button').attr('disabled',false);
    }
})
});
</script>
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

        $('.datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            container: "#ModalBodyDiv"
        });
    }); 
</script>
{{-- <script>
  $(function(){
      'use strict'
      
      $('#unit_kerja').select2({
        placeholder: "Pilih salah satu",
        searchInputPlaceholder: 'Cari',
        allowClear: true,
        dropdownParent: $('#btn-filter')
      });

      $('#jenis_pegawai').select2({
        placeholder: "Pilih salah satu",
        searchInputPlaceholder: 'Cari',
        allowClear: true,
        dropdownParent: $('#btn-filter')
      });
    });
</script> --}}
@endsection
