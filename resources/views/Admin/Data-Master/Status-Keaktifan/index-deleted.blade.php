@extends('Ui.base')

@section('title')
Status Keaktifan
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
        <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow"><a href="{{ url('/admin/data-master') }}" class="nav-link-its-active tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('assets/img/data-master.svg') }}" class="wd-20 mg-r-15">Data Master</a>
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
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-20 mg-lg-b-20">
            <div>
              <nav aria-label="breadcrumb" class="mg-b-10">
                <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                  <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/admin/data-master') }}">Data Master</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Status Keaktifan</li>
                </ol>
              </nav>
              <div class="d-flex align-items-center justify-content-start">
                <div>
                  <a href="{{ url('/admin/data-master') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
                </div>
                <h4 class="tx-poppins tx-medium mg-b-0">Status Keaktifan</h4>
              </div>
            </div>
          </div>
          {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start mg-b-20 mg-sm-b-20 mg-lg-b-20">
            <div>
                <a href="{{ url('admin') }}" class="btn btn-white tx-poppins tx-medium mg-r-15"><i data-feather="arrow-left" class="wd-10 mg-r-5"></i>Kembali</a>
            </div>
            <div></div>
              <div>
                <h4 class="tx-poppins tx-medium mg-t-8">
                  Status Keaktifan
                </h4>
              </div>
          </div> --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
                <a href="#aktif-add" class="btn btn-its-3 tx-poppins tx-medium d-flex align-items-center mg-r-10" data-toggle="modal" data-animation="effect-scale"><i data-feather="plus" class="mg-r-10"></i>Tambah Data Pegawai</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
              <div class="alert alert-success alert-dismissible fade show tx-roboto" role="alert">
                Status keaktifan berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
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
                            <th class="table-its wd-10p">ID</th>
                            <th class="table-its wd-20p">Nama Status Keaktifan</th>
                            <th class="table-its wd-20p">Dibuat pada</th>
                            <th class="table-its wd-20p">Disunting pada</th>
                            <th class="table-its wd-20p">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="bd-b">
                              <td class="table-its">
                                A
                              </td>
                              <td class="table-its">
                                Aktif
                              </td>
                              <td class="table-its">
                                04-05-2021 10:04:05
                              </td>
                              <td class="table-its">04-05-2021 10:04:05</td>
                              <td class="table-its">
                                <div class="d-flex align-items-center justify-content-start">
                                  <a href="" data-toggle="modal" data-target="#aktif-edit" data-animation="effect-scale"><div class="btn-circle btn btn-outline-primary mg-r-10"><ion-icon name="create" class="tx-18"></ion-icon></div></a>
                                  <a href="" data-toggle="modal" data-target="#hapus" data-animation="effect-scale"><div class="btn-circle btn btn-outline-danger mg-r-10"><ion-icon name="trash" class="tx-18"></ion-icon></div></a>
                                </div>
                              </td>
                            </tr>
                            <tr class="bd-b">
                              <td class="table-its">
                                B
                              </td>
                              <td class="table-its">
                                Berhenti dengan hormat
                              </td>
                              <td class="table-its">
                                04-05-2021 10:04:05
                              </td>
                              <td class="table-its">04-05-2021 10:04:05</td>
                              <td class="table-its">
                                <div class="d-flex align-items-center justify-content-start">
                                  <a href="" data-toggle="modal" data-target="#aktif-edit" data-animation="effect-scale"><div class="btn-circle btn btn-outline-primary mg-r-10"><ion-icon name="create" class="tx-18"></ion-icon></div></a>
                                  <a href="" data-toggle="modal" data-target="#hapus" data-animation="effect-scale"><div class="btn-circle btn btn-outline-danger mg-r-10"><ion-icon name="trash" class="tx-18"></ion-icon></div></a>
                                </div>
                              </td>
                            </tr>
                            <tr class="bd-b">
                              <td class="table-its">
                                C
                              </td>
                              <td class="table-its">
                                Cuti
                              </td>
                              <td class="table-its">
                                04-05-2021 10:04:05
                              </td>
                              <td class="table-its">04-05-2021 10:04:05</td>
                              <td class="table-its">
                                <div class="d-flex align-items-center justify-content-start">
                                  <a href="" data-toggle="modal" data-target="#aktif-edit" data-animation="effect-scale"><div class="btn-circle btn btn-outline-primary mg-r-10"><ion-icon name="create" class="tx-18"></ion-icon></div></a>
                                  <a href="" data-toggle="modal" data-target="#hapus" data-animation="effect-scale"><div class="btn-circle btn btn-outline-danger mg-r-10"><ion-icon name="trash" class="tx-18"></ion-icon></div></a>
                                </div>
                              </td>
                            </tr>
                            <tr class="bd-b">
                              <td class="table-its">
                                T
                              </td>
                              <td class="table-its">
                                Berhenti dengan tidak hormat
                              </td>
                              <td class="table-its">
                                04-05-2021 10:04:05
                              </td>
                              <td class="table-its">04-05-2021 10:04:05</td>
                              <td class="table-its">
                                <div class="d-flex align-items-center justify-content-start">
                                  <a href="" data-toggle="modal" data-target="#aktif-edit" data-animation="effect-scale"><div class="btn-circle btn btn-outline-primary mg-r-10"><ion-icon name="create" class="tx-18"></ion-icon></div></a>
                                  <a href="" data-toggle="modal" data-target="#hapus" data-animation="effect-scale"><div class="btn-circle btn btn-outline-danger mg-r-10"><ion-icon name="trash" class="tx-18"></ion-icon></div></a>
                                </div>
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

    {{-- modal tambah --}}
    <div class="modal fade effect-scale" id="aktif-add" role="dialog" aria-labelledby="aktif-add" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Status Keaktifan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              {{-- <div id="inputFormRow" class="mg-b-20 d-flex align-items-center justify-content-between"> --}}
                <div class="form-group form-floating">
                  <input name="status_keaktifan" type="text" class="form-control @error('status_keaktifan') is-invalid @enderror" id="status_keaktifan" value="{{ old('status_keaktifan') }}" placeholder="Status Keaktifan" required>
                  <label for="status_keaktifan">Nama Status Keaktifan</label>
                </div>
              {{-- </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- modal edit --}}
    <div class="modal fade effect-scale" id="aktif-edit" role="dialog" aria-labelledby="aktif-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Status Keaktifan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              {{-- <div id="inputFormRow" class="mg-b-20 d-flex align-items-center justify-content-between"> --}}
                <div class="form-group form-floating">
                  <input name="status_keaktifan" type="text" class="form-control @error('status_keaktifan') is-invalid @enderror" id="status_keaktifan" value="Aktif" placeholder="Status Keaktifan" required>
                  <label for="status_keaktifan">Nama Status Keaktifan</label>
                </div>
              {{-- </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- modal hapus --}}
    <div class="modal fade effect-scale" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Data</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus data ini?</p>
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
