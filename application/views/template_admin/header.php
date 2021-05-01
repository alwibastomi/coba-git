<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="semanticarticle.com">
    <meta name="author" content="ThemePixels">

    <title>Semantic Article</title>
    <link rel="icon" href="<?= site_url('assets/images/Logo-01.png') ?>">

    <!-- vendor css -->
    <link href="<?= site_url('assets/template/lib/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/Ionicons/css/ionicons.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/jquery-switchbutton/jquery.switchButton.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= site_url('assets/bootstrap-select/dist/css/bootstrap-select.min.css'); ?>"/>

    <link href="<?= site_url('assets/template/lib/datatables/jquery.dataTables.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/rickshaw/rickshaw.min.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/chartist/chartist.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/select2/css/select2.min.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/template/lib/SpinKit/spinkit.css'); ?>" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?= site_url('assets/template/css/bracket.css'); ?>">

    <!-- JS -->
    <script type="text/javascript"> var BASE_URL = "<?php echo base_url();?>"; </script>
    <script src="<?= site_url('assets/template/lib/jquery/jquery.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/popper.js/popper.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/bootstrap/bootstrap.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/moment/moment.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/jquery-ui/jquery-ui.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/jquery-switchbutton/jquery.switchButton.js'); ?>"></script>

    <script type="text/javascript" src="<?= site_url('assets/bootstrap-select/dist/js/bootstrap-select.min.js') ?>"></script>
    <!-- Datatable -->
    <script src="<?= site_url('assets/template/lib/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/datatables-responsive/dataTables.responsive.js'); ?>"></script>
    <script src="<?= site_url('assets/customm.js'); ?>"></script>
    <!-- datatable -->

    <script src="<?= site_url('assets/template/lib/peity/jquery.peity.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/chartist/chartist.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/jquery.sparkline.bower/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/d3/d3.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/rickshaw/rickshaw.min.js'); ?>"></script>
    <script src="<?= site_url('assets/template/lib/select2/js/select2.min.js'); ?>"></script>


    <script src="<?= site_url('assets/template/js/bracket.js'); ?>"></script>
    <script src="<?= site_url('assets/template/js/ResizeSensor.js'); ?>"></script>
    <script src="<?= site_url('assets/template/js/dashboard.js'); ?>"></script>
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
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <!-- sidebar -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <!-- top bar -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- tab pane topbar -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <!-- lanjut footer -->
