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
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <!---- Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Réservation</title>

    <!-- vendor css -->
    <link href="/template/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/template/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="/template/lib/select2/css/select2.min.css" rel="stylesheet">
    <!---------------------Pour tables---------------------------------------->

    <link href="/template/lib/highlightjs/styles/github.css" rel="stylesheet">
    <link href="/template/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="/template/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/template/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <!----------------------Pour tables---------------------------------------->

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/template/css/bracket.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>

  <body>
    @include('layouts.navbars.navbar')
    @yield('contenu')
    @yield('script')
    <!--- Importation Jquery 3 méthodes -------->
    <!--<script src="template/js/jquery.js"></script>-->
    <script src="/template/lib/jquery/jquery.min.js"></script>
    
    <!--- Importation Jquery -------->
    
    <script src="/template/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="/template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/template/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/template/lib/moment/min/moment.min.js"></script>
    <script src="/template/lib/peity/jquery.peity.min.js"></script>
    <script src="/template/lib/rickshaw/vendor/d3.min.js"></script>
    <script src="/template/lib/rickshaw/vendor/d3.layout.min.js"></script>
    <script src="/template/lib/rickshaw/rickshaw.min.js"></script>
    <script src="/template/lib/jquery.flot/jquery.flot.js"></script>
    <script src="/template/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/template/lib/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/template/lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/template/lib/echarts/echarts.min.js"></script>
    <script src="/template/lib/select2/js/select2.full.min.js"></script>
    <!---------------------tables ---------------------------------------->
    <script src="/template/lib/highlightjs/highlight.pack.min.js"></script>
    <script src="/template/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/template/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="/template/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/template/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    
     <!---------------------tables ---------------------------------------->
    <!--<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>-->
    <!--<script src="template/lib/gmaps/gmaps.min.js"></script>-->
    <!-----------------------Pour le chargement des latitudes et longitude -------------->

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>-->
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJby-hPhgoq4hIhiwKiHYvYmEUn74qnBw&callback=initMap" async defer></script>
    <script src="/template/lib/gmaps/gmaps.min.js"></script>

    <!-----------------------Fin Pour le chargement des latitudes et longitude -------------->
    <script src="/template/js/bracket.js"></script>
    <script src="/template/js/map.shiftworker.js"></script>
    <script src="/template/js/ResizeSensor.js"></script>
    <script src="/template/js/dashboard.js"></script>

    <!--A Enlever-->
  
    <script src="/template/lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/template/lib/parsleyjs/parsley.min.js"></script>

    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({ 
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
