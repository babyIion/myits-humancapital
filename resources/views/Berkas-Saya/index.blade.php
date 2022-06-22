@extends('Ui.base')

@section('title')
Berkas Saya
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
    <link rel="stylesheet" href="../assets/css/dashforge.filemgr.css">
@endsection

@section('menu')
<aside class="aside aside-fixed">
  <div class="aside-header">
    <a href="../" class="aside-logo tx-medium tx-13 tx-md-15 tx-color-02">
        <img src="../assets/img/portfolio-organization.svg" class="ht-35">
        <p class="tx-poppins tx-medium tx-13 tx-md-15 tx-color-02 mg-b-0 mg-l-15">myITS <span class="tx-semibold">HumanCapital</span></p>
    </a>
    <a href="" class="aside-menu-link">
      <ion-icon name="menu" class="mg-y-2 tx-18"></ion-icon>
    </a>
  </div>
  <div class="aside-body">
    <ul class="sidebar-nav">
      <li class="nav-item"><a href="../" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/home.svg" class="wd-20 mg-r-15">Beranda</a></li>
      <li class="nav-item"><a href="../profil" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="https://c4.wallpaperflare.com/wallpaper/500/442/354/outrun-vaporwave-hd-wallpaper-preview.jpg" class="wd-20 ht-20 mg-r-15 img-fluid rounded-circle" style="object-fit: cover;">Profil</a></li>
      <li class="nav-item"><a href="../berkas" class="nav-link-its-active tx-poppins tx-medium text-truncate"><img src="../assets/img/folder.svg" class="wd-20 mg-r-15">Berkas Saya</a></li>
      <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow-menu"><a href="portofolio" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="../assets/img/portfolio.svg" class="wd-20 mg-r-15">Portofolio</a>
          <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-portofolio" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-forward" class="mg-y-2 tx-18 icon-menu"></ion-icon></button>
      </li>
      <div class="collapse" id="collapse-menu-portofolio">
        <li class="nav-item mg-l-15"><a href="../portofolio/bahan-ajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-bahan-ajar.svg" class="wd-20 mg-r-15">Bahan Ajar</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/detasering" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-detasering.svg" class="wd-20 mg-r-15">Detasering</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/diklat" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-training.svg" class="wd-20 mg-r-15">Diklat</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/hki" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-ipr.svg" class="wd-20 mg-r-15">HKI</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/karya-cipta" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-ipr.svg" class="wd-20 mg-r-15">Karya Cipta</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/karyailmiah" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-scientific.svg" class="wd-20 mg-r-15">Karya Ilmiah</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/kepanitiaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-intern.svg" class="wd-20 mg-r-15">Kepanitiaan</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/organisasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-organization.svg" class="wd-20 mg-r-15">Organisasi Profesi</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/pembicara" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-activity.svg" class="wd-20 mg-r-15">Pembicara</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/penelitian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-enterpreneurship.svg" class="wd-20 mg-r-15">Penelitian</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/pengabdian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-dedication.svg" class="wd-20 mg-r-15">Pengabdian</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/pengelola-jurnal" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-jurnal.svg" class="wd-20 mg-r-15">Pengelola Jurnal</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/penghargaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-competition.svg" class="wd-20 mg-r-15">Penghargaan</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/riwayat-pekerjaan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-enterpreneurship.svg" class="wd-20 mg-r-15">Riwayat Pekerjaan</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/sertifikasi" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-certification.svg" class="wd-20 mg-r-15">Sertifikasi</a></li>
        <li class="nav-item mg-l-15"><a href="../portofolio/tes" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/portfolio-certification.svg" class="wd-20 mg-r-15">Tes</a></li>
      </div>
      <li class="nav-item d-flex justify-content-between align-items-center collapse-arrow-menu"><a href="kepegawaian" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="../assets/img/scholarship-profile.svg" class="wd-20 mg-r-15">Kepegawaian</a>
          <button class="btn btn-icon btn-its-custom-1 rounded-its-50p bdr-sp-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-menu-kepegawaian" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-forward" class="mg-y-2 tx-18 icon-menu"></ion-icon></button>
      </li>
      <div class="collapse" id="collapse-menu-kepegawaian">
        <li class="nav-item mg-l-15"><a href="../kepegawaian/hukuman" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-hukuman.svg" class="wd-20 mg-r-15">Hukuman</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/kepangkatan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-kepangkatan.svg" class="wd-20 mg-r-15">Kepangkatan</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/kesejahteraan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-kesejahteraan.svg" class="wd-20 mg-r-15">Kesejahteraan</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/pemberhentian" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-pemberhentian.svg" class="wd-20 mg-r-15">Pemberhentian</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/tugas-belajar" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-tugas-belajar.svg" class="wd-20 mg-r-15">Tugas Belajar</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/riwayat-jabfung" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-riwayat-jabatan.svg" class="wd-20 mg-r-15">Riwayat Jabfung</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/riwayat-jabstruk" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/riwayat-jabatan.svg" class="wd-20 mg-r-15">Riwayat Jabstruk</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/riwayat-gaji" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Riwayat Kenaikan Gaji</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/inpassing" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Inpassing</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/beasiswa" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Beasiswa</a></li>
        <li class="nav-item mg-l-15"><a href="../kepegawaian/tunjangan" class="nav-link-its tx-poppins tx-medium text-truncate"><img src="../assets/img/hcm-riwayat-gaji.svg" class="wd-20 mg-r-15">Tunjangan</a></li>
      </div>
      <li class="nav-item d-flex justify-content-between align-items-center"><a href="../qinerja" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="../assets/img/skem.svg" class="wd-20 mg-r-15">Qinerja</a>
    </ul>
  </div>
</aside>
@endsection

@section('content')
    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->
      <div class="content-body mg-t-60">
        <div class="container pd-x-0 mn-ht-450 mn-ht-xxl-750" id="content">
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div>
              <h4 class="tx-poppins tx-medium mg-b-0">Berkas Saya</h4>
            </div>
          </div>
          <div class="row row-xs">
            
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#file-upload" onclick="tabbtn()" class="btn btn-its-3 tx-poppins tx-medium d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="cloud-upload" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Unggah Berkas</a>
              <a href="#btn-filter" class="btn btn-white tx-poppins tx-medium d-flex align-items-center mg-l-10" data-toggle="modal" data-animation="effect-scale"><i data-feather="filter" class="tx-18 mg-r-10"></i>Filter</a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mg-b-20 d-flex align-items-center justify-content-end">
              <input type="text" class="form-control" id="nama_file_filter" placeholder="Cari berkas">
              <a class="btn btn-white tx-poppins tx-medium d-flex align-items-center mg-l-10" data-toggle="modal" data-animation="effect-scale"><ion-icon name="search" class="mg-y-2 tx-18"></ion-icon></a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="d-flex justify-content-start align-items-center collapse-arrow">
                <p class="tx-poppins tx-medium tx-15 mg-b-0">Sertifikat/Surat Pernyataan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <a class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-collapse" data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1">
                    <ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon>
                  </a>
                </div>
              </div>
              <div class="collapse show" id="collapse-1">
                <div class="row row-xs mg-t-5">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mg-b-10">
                    <div class="card bd-0">
                      <div class="card-body pos-relative">
                        <div class="dropdown pos-absolute t-5 r-5">
                          <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                          <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                            <a href="#file-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a>
                            <a href="#file-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                            <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                            <a href="#file-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                          </div>
                        </div>
                        <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                          <a href="#">
                            <img src="../assets/img/format-pdf.svg" class="wd-50 wd-md-50 wd-lg-50">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="tx-poppins tx-medium tx-color-02 mg-b-0 crop-text-1" title="File berkas dsfsdf dsfsfse dfsg.pdf">File berkas dsfsdf dsfsfse dfsg.pdf</a>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Dokumen yang diupload hanya contoh untuk keperluan demo.">5 hari &bullet; Dokumen yang diupload hanya contoh untuk keperluan demo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mg-b-10">
                    <div class="card bd-0">
                      <div class="card-body pos-relative">
                        <div class="dropdown pos-absolute t-5 r-5">
                          <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                          <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                            <a href="#file-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a>
                            <a href="#file-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                            <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                            <a href="#file-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                          </div>
                        </div>
                        <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                          <a href="#">
                            <img src="../assets/img/format-img.svg" class="wd-50 wd-md-50 wd-lg-50">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="tx-poppins tx-medium tx-color-02 mg-b-0 crop-text-1" title="Sertif bukti wirausaha.jpg">Sertif bukti wirausaha.jpg</a>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Sertifikat wirausaha">3 hari &bullet; Sertifikat wirausaha</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="d-flex justify-content-start align-items-center collapse-arrow">
                <p class="tx-poppins tx-medium tx-15 mg-b-0">Foto</p>
                <div class="d-flex justify-content-between align-items-center">
                  <a class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center btn-collapse" data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2">
                    <ion-icon name="chevron-up" class="mg-y-2 tx-18 icon"></ion-icon>
                  </a>
                </div>
              </div>
              <div class="collapse show" id="collapse-2">
                <div class="row row-xs mg-t-5">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mg-b-10">
                    <div class="card bd-0">
                      <div class="card-body pos-relative">
                        <div class="dropdown pos-absolute t-5 r-5">
                          <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                          <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                            <a href="#file-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a>
                            <a href="#file-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                            <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                            <a href="#file-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                          </div>
                        </div>
                        <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                          <a href="#">
                            <img src="../assets/img/format-img.svg" class="wd-50 wd-md-50 wd-lg-50">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="tx-poppins tx-medium tx-color-02 mg-b-0 crop-text-1" title="BerkasGambar.jpg">BerkasGambar.jpg</a>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Unggah langsung">3 hari &bullet; Unggah langsung</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ht-300 ht-xxl-550 d-flex justify-content-center align-items-center">
              <div>
                <div class="d-flex justify-content-center align-items-center">
                  <img src="../../assets/img/file-0.svg" class="wd-100" alt="">
                </div>
                <p class="tx-13 text-center mg-b-0">Belum ada berkas yang diunggah</p>
              </div>
            </div> -->
          </div><!-- row -->
        </div><!-- container -->
        <div class="d-none d-lg-block">
          <div class="bd-t bd-2 mg-t-10">
            <div class="d-flex align-items-center row row-xs mg-t-10">
              <div class="col-lg-10">
                <span class="tx-medium tx-color-03 tx-13">Copyright &copy; 2021 Institut Teknologi Sepuluh Nopember</span>
              </div>
              <div class="col-lg-2 mg-lg-t-0 d-flex justify-content-end">
                  <img src="../assets/img/advhum-blue.png" height="60" class="mg-r-10">
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
                  <img src="../assets/img/advhum-blue.png" height="60" class="mg-r-10">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="file-upload" tabindex="-1" role="dialog" aria-labelledby="file-upload" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Unggah Berkas</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">upload</a>
              </li>
            </ul>
          </div>
          <form>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="modal-body">
                  <div class="form-group form-floating">
                    <select class="form-select select2" id="jenis-berkas" aria-label="Floating label select example" required>
                      <option label="Pilih salah satu"></option>
                      <option value="1">Dokumen informasi tambahan admin</option>
                      <option value="2">Sertifikat/Surat pernyataan</option>
                      <option value="3">Foto</option>
                    </select>
                    <label for="jenis-berkas">Jenis Berkas</label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-its-3 tx-poppins tx-medium" onclick="uploadbtn()" id="btn" disabled>Selanjutnya</button>
                </div>
              </div>
              <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" required>
                      <label class="custom-file-label" for="customFile">Pilih berkas</label>
                    </div>
                  </div>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="nama-berkas" placeholder="Nama berkas" required>
                    <label for="nama-berkas">Nama Berkas</label>
                  </div>
                  <div class="form-group form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan-berkas" style="min-height: 100px" required></textarea>
                    <label for="keterangan-berkas">Keterangan</label>
                  </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                  <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Unggah</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="modal fade effect-scale" id="file-detail" tabindex="-1" role="dialog" aria-labelledby="file-detail" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Detail Berkas</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <div class="modal-body card-list">
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Nama</span> 
              <span class="crop-text-1">File berkas dsfsdf dsfsfse dfsg.pdf</span>
            </div>
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Jenis</span> 
              <span class="crop-text-1">Sertifikat/surat pernyataan</span>
            </div>
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Ekstensi</span> 
              <span class="crop-text-1">Portable Document Format (.pdf)</span>
            </div>
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Ukuran</span> 
              <span class="crop-text-1">392849 KB</span>
            </div>
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Diunggah</span> 
              <span class="crop-text-1">2020-09-03 08:49:09.967</span>
            </div>
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Diubah</span> 
              <span class="crop-text-1">2021-04-27 12:45:17.543</span>
            </div>
            <div class="card-list-text">
              <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold d-block">Keterangan</span> 
              <span class="crop-text-1">sertifikat wirausaha</span>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="file-edit" tabindex="-1" role="dialog" aria-labelledby="file-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Berkas</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-berkas" placeholder="Nama berkas" value="File berkas dsfsdf dsfsfse dfsg" required>
                <label for="nama-berkas">Nama Berkas</label>
              </div>
              <div class="form-group form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="keterangan-berkas" style="min-height: 100px" required>sertifikat wirausaha</textarea>
                <label for="keterangan-berkas">Keterangan</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="file-delete" tabindex="-1" role="dialog" aria-labelledby="file-delete" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Berkas</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus berkas ini?</p>
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

    <div class="modal fade effect-scale" id="btn-filter" tabindex="-1" role="dialog" aria-labelledby="btn-filter" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Filter</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-0">
              <div id="scroll1" class="scrollbar-lg pos-relative ht-450 pd-15">
                <p class="tx-poppins tx-medium tx-15">Kategori</p>
                <div class="form-group form-floating">
                  <select class="form-select select2" id="filter-jenis" aria-label="Floating label select example">
                    <option label="Pilih salah satu"></option>
                    <option value="1">Dokumen informasi tambahan admin</option>
                    <option value="2">Sertifikat/Surat pernyataan</option>
                    <option value="3">Foto</option>
                  </select>
                  <label for="filter-jenis">Jenis Berkas</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tampilkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
    
@section('scripts')
    <!-- Lightbox, penampil gambar -->
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script>
      function uploadbtn(){
        $('[href="#upload"]').tab('show');
      }
      function homebtn(){
        $('[href="#home"]').tab('show');
      }
      function tabbtn(){
        $('[href="#home"]').tab('show');
      }
    </script>
    <script>
      $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        var $old_tab = $($(e.target).attr("href"));
        var $new_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() < $old_tab.index()){
          $old_tab.css('position', 'relative').css("right", "0").show();
          $old_tab.animate({"right":"-100%"}, 300, function () {
            $old_tab.css("right", 0).removeAttr("style");
          });
        }
        else {
          $old_tab.css('position', 'relative').css("left", "0").show();
          $old_tab.animate({"left":"-100%"}, 300, function () {
            $old_tab.css("left", 0).removeAttr("style");
          });
        }
      });

      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $new_tab = $($(e.target).attr("href"));
        var $old_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() > $old_tab.index()){
          $new_tab.css('position', 'relative').css("right", "-2500px");
          $new_tab.animate({"right":"0"}, 500);
        }
        else {
          $new_tab.css('position', 'relative').css("left", "-2500px");
          $new_tab.animate({"left":"0"}, 500);
        }
      });

      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // your code on active tab shown
      });
    </script>
    <script>
    $( document ).ready(function() {
      $('#jenis-berkas').on('change', function() {
        if(this.value == 0)
            $('#btn').attr("disabled", true);
          else
            $('#btn').attr("disabled", false);
      });
    });
    </script>
    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
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

      // (function($) {
        
      //   'use strict'
    
      //   var Defaults = $.fn.select2.amd.require('select2/defaults');
    
      //   $.extend(Defaults.defaults, {
      //       searchInputPlaceholder: ''
      //   });
    
      //   var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');
    
      //   var _renderSearchDropdown = SearchDropdown.prototype.render;
    
      //   SearchDropdown.prototype.render = function(decorated) {
    
      //       // invoke parent method
      //       var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));
    
      //       this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));
    
      //       return $rendered;
      //   };
    
      //   })(window.jQuery);
    
    
    $(function(){
      'use strict'
      
      $('#filter-jenis').select2({
        placeholder: "Pilih salah satu",
        searchInputPlaceholder: 'Cari',
        allowClear: true,
        dropdownParent: $('#btn-filter')
      });

      $('#jenis-berkas').select2({
        placeholder: "Pilih salah satu",
        searchInputPlaceholder: 'Cari',
        allowClear: true,
        dropdownParent: $('#file-upload')
      });
    });
  </script>
@endsection