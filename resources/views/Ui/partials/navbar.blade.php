<header class="navbar navbar-header navbar-header-fixed pos-fixed z-index-10 wd-100p t-0 d-flex justify-content-between">
    <div class="d-flex align-items-center mg-l-10 mg-lg-l-20">
        <!-- <a href="#menu-sidebar" class="btn btn-icon btn-sp-icon off-canvas-menu bdr-sp-50p mg-r-10 d-flex align-items-center"><ion-icon name="menu" class="mg-y-2 tx-18"></ion-icon></a> -->
    </div>
    <div class="d-flex align-items-center mg-r-10 mg-lg-r-20">
      <div class="dropdown mg-b-0 mg-r-20">
        <a class="btn btn-its-custom-1 tx-uppercase dropdown-toggle" href="#" data-toggle="dropdown"><ion-icon name="globe-outline" class="tx-18 mg-r-5 align-middle"></ion-icon>
            ID
        </a>
        <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
            <a href="" class="dropdown-item">ID - Indonesia</a>
            <a href="" class="dropdown-item">EN - English</a>
        </div>
      </div>
      <div class="dropdown dropdown-profile">
        <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
            <div class="avatar avatar-sm">
                <img src="{{ asset('assets/img/profile-blank.png') }}" class="rounded-circle" alt="">
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right allow-focus shadow rounded-its-10">
            <a href="/profil" class="dropdown-item-its tx-poppins tx-medium" style="padding-top: 20px !important; padding-bottom: 20px !important;">
                <div class="avatar avatar-md mg-r-15">
                    <img src="{{ asset('assets/img/profile-blank.png') }}" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                    <p class="tx-15 tx-poppins tx-semibold mg-b-0 crop-text-1 text-left">Arjuna, S.Kom., M.Kom.</p>
                    <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 text-left">Pegawai</p>
                </div>
            </a>
            <a href="/lainnya/pengaturan" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="settings-sharp" class="tx-18"></ion-icon></span></div>Pengaturan Web</a>
            <a href="" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-target="#chgRoleUser" data-animation="effect-scale"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="people-sharp" class="tx-18"></ion-icon></span></div>Ganti Hak Akses</a>
            <a href="" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-target="#keluar" data-animation="effect-scale"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="log-out-sharp" class="tx-18"></ion-icon></span></div>Keluar</a>
        </div>
      </div>
    </div>
</header>