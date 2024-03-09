</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<!-- File item template -->
<script type="text/html" id="files-template">
  <li class="media">
    <div class="media-body mb-1">
      <p class="mb-2">
        <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
      </p>
      <div class="progress mb-2">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
      </div>
      <hr class="mt-1 mb-1" />
    </div>
  </li>
</script>
<script src="<?php echo VENDOR ?>apexcharts/apexcharts.min.js"></script>
<script src="<?php echo VENDOR ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo VENDOR ?>chart.js/chart.min.js"></script>
<script src="<?php echo VENDOR ?>echarts/echarts.min.js"></script>
<script src="<?php echo VENDOR ?>quill/quill.min.js"></script>
<!-- <script src="<?php echo VENDOR ?>simple-datatables/simple-datatables.js"></script> -->
<script src="<?php echo VENDOR ?>datatables/datatables.min.js"></script>
<script src="<?php echo VENDOR ?>tinymce/tinymce.min.js"></script>
<script src="<?php echo VENDOR ?>php-email-form/validate.js"></script>


<!-- Template Main JS File -->
<script src="<?php echo JS ?>script.js"></script>
<script src="<?php echo JS ?>printThis.js"></script>
<!-- BOOTSTRAP FILE INPUTS -->
<script src="<?php echo FILE_INPUTS ?>js/plugins/buffer.min.js"></script>
<script src="<?php echo FILE_INPUTS ?>js/plugins/filetype.min.js"></script>
<script src="<?php echo FILE_INPUTS ?>js/fileinput.min.js"></script>

<!-- 
  Optional Dependent Plugins
The piexif.min.js file is the source for the Piexifjs plugin by hMatoba. It is required to be loaded before fileinput.min.js when you wish to auto orient JPEG image files based on their orientation tag. This library is also needed for restoring the exif data to the image files when using the image resize feature of the bootstrap-fileinput plugin.

The sortable.min.js file is the source for the Sortable plugin by rubaxa. It is required to be loaded before fileinput.min.js if you wish to sort the thumbnails in the initial preview.
    -->
<!-- <script src="<?php echo FILE_INPUTS ?>js/plugins/piexif.min.js"></script>
<script src="<?php echo FILE_INPUTS ?>js/plugins/sortable.min.js"></script> -->


<!-- Plug JS Datatables -->
<!-- <script src="<?php echo PLUG ?>datatables.js"></script> -->
<!-- <script src="<?php echo PLUG ?>datatables.min.js"></script> -->
<script>
  
</script>
<?php include MODULES . $module_jsfilename; ?>
<?php include MODULES . $login_register_js; ?>
<!-- Other JS File -->

<!-- <script src="<?php echo PLUG ?>datatables.min.css"></script> -->

</body>

</html>