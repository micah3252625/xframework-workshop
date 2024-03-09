<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo WEB_NAME ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo IMAGES ?>/favicon.png" rel="icon">
  <link href="<?php echo IMAGES ?>/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="<?php echo VENDOR ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo VENDOR ?>bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo VENDOR ?>boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo VENDOR ?>quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo VENDOR ?>quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo VENDOR ?>remixicon/remixicon.css" rel="stylesheet">
  <!-- <link href="<?php echo VENDOR ?>simple-datatables/datatable.css" rel="stylesheet"> -->
  <link href="<?php echo VENDOR ?>datatables/datatables.min.css" rel="stylesheet">


  <!-- Plug CSS Datatables -->
  <!-- <link href="<?php echo PLUG   ?>datatables.css" rel="stylesheet">
  <link href="<?php echo PLUG   ?>datatables.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="<?php echo CSS ?>style.css" rel="stylesheet">

  <!-- the fileinput plugin styling CSS file -->
  <link href="<?php echo FILE_INPUTS ?>css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Other Css File -->
  <!-- <link href="<?php echo PLUG ?>datatables.min.css" rel="stylesheet"> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <!-- the jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

  <script src="<?php echo JS ?>jqprint.js"></script>



  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <div class="offcanvas-recent-activity pb-2 d-flex justify-content-end">
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Recent Purchase Activity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="pending-approval-table datatable-container datatable-wrapper table-responsive">
          <table id="purchase-request-activities" class="table hover" style="width: 100%;">
            <thead>
              <th style="padding: 0px"></th>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>