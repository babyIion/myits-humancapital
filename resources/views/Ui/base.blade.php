<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Icon/favicon.png">

    <title>@yield('title') &bullet; myITS HumanCapital</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="lib/animate.css/animate.min.css" rel="stylesheet">
    <link href="lib/ekko-lightbox/css/ekko-lightbox.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css">


    <!-- DashForge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.customs.css">
    <link rel="stylesheet" href="assets/css/dashforge.sizexxl.css">

    <link rel="stylesheet" href="assets/css/skin.light.css">
    <link rel="stylesheet" href="assets/css/skin.light.customs.css">

    <!-- <link rel="stylesheet" href="assets/css/skin.dark.css">
    <link rel="stylesheet" href="assets/css/skin.dark.customs.css"> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
    @yield('styles')

    @if (session('skin') == 'dark')
        <link rel="stylesheet" href="{{ asset('assets/css/skin.dark.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/skin.light.css') }}">
    @endif
  </head>
  <body>

@include('Ui.partials.navbar')
@include('Ui.partials.modal-akses')
@yield('menu')

<!-- Navigation Rail -->
<!-- <div class="pos-fixed l-20 t-80 d-none d-lg-block z-index-10">
    <ul class="list-group">
        <li class="list-group-item-sp"><a href="beranda" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Beranda"><img src="assets/img/home.svg" class="wd-20"></a></li>
        <li class="list-group-item-sp"><a href="profil" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Profil"><img src="assets/img/profile-blank.png" class="wd-20 ht-20 rounded-circle" style="object-fit: cover;"></a></li>
        <li class="list-group-item-sp"><a href="berkas" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Berkas"><img src="assets/img/folder.svg" class="wd-20"></a></li>
        <li class="list-group-item-sp"><a href="portofolio" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Portofolio"><img src="assets/img/portfolio.svg" class="wd-20"></a></li>
        <li class="list-group-item-sp"><a href="skem" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="SKEM"><img src="assets/img/skem.svg" class="wd-20"></a></li>
        <li class="list-group-item-sp"><a href="beasiswa" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Beasiswa"><img src="assets/img/scholarship.svg" class="wd-20"></a></li>
        <li class="list-group-item-sp"><a href="magang" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Magang"><img src="assets/img/intern.svg" class="wd-20"></a></li>
        <li class="list-group-item-sp"><a href="kewirausahaan" class="btn btn-icon btn-sp-list bdr-sp-10" data-toggle="tooltip" data-placement="right" title="Kewirausahaan"><img src="assets/img/enterpreneur.svg" class="wd-20"></a></li>
    </ul>
</div> -->

@yield('content')
    
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jqueryui/jquery-ui.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- <script src="lib/prismjs/prism.js"></script> -->
    <script src="lib/js-cookie/js.cookie.js"></script>
    <script src="assets/js/dashforge.js"></script>
    <script src="assets/js/dashforge.aside.js"></script>
    <script src="/lib/select2/js/select2.min.js"></script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- Script base -->
    @yield('scripts')
    <script>
    $(function(){
        'use strict'

        $('.off-canvas-menu').on('click', function(e){
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).addClass('show');
        });

        $('.off-canvas .close').on('click', function(e){
            e.preventDefault();
            $(this).closest('.off-canvas').removeClass('show');
        })

        $(document).on('click touchstart', function(e){
            e.stopPropagation();
            if(!$(e.target).closest('.off-canvas-menu').length) {
            var offCanvas = $(e.target).closest('.off-canvas').length;
            if(!offCanvas) {
                $('.off-canvas.show').removeClass('show');
            }
            }
        });
    });
    </script>

    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>

    <script>
        $(document).on('click', '.allow-focus', function (e) {
            e.stopPropagation();
        });
    </script>

    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <!-- Sementara -->
    <script>
        var goBtn = document.getElementById("goBtn");
        var select_user = document.getElementById("select_user");

        goBtn.onclick = function() {
        window.location = select_user.value;
        }
    </script>
    <script>
      $(function(){
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()

        $('.df-example .btn-primary').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-secondary').tooltip({
          template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-success').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-danger').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })


      });
    </script>

  </body>
</html>
