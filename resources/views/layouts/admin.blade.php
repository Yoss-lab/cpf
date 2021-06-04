<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ThemeKit - Admin Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="asset/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="asset/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="asset/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="asset/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="asset/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="asset/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="asset/plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="asset/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="asset/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="asset/plugins/c3/c3.min.css">
        <link rel="stylesheet" href="asset/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="asset/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="asset/dist/css/theme.min.css">
        <script src="asset/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

<body>

    <div class="wrapper">
        <!-- header -->
        @include('includesAdmin.header')
    

        <div class="page-wrap">

            @include('includesAdmin.sidebar')


            <div class="main-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            


            </div>

            
            @include('includesAdmin.chat-panel')
           
    
        </div>
    </div>  
     

     

    
    
        
    
  
  <!-- .site-wrap -->


  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="asset/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="asset/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="asset/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="asset/plugins/screenfull/dist/screenfull.js"></script>
        <script src="asset/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="asset/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="asset/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="asset/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="asset/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="asset/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="asset/plugins/moment/moment.js"></script>
        <script src="asset/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="asset/plugins/d3/dist/d3.min.js"></script>
        <script src="asset/plugins/c3/c3.min.js"></script>
        <script src="asset/js/tables.js"></script>
        <script src="asset/js/widgets.js"></script>
        <script src="asset/js/charts.js"></script>
        <script src="asset/dist/js/theme.min.js"></script>
        <script src="asset/js/form-components.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>



</body>

</html>