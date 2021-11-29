<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Happy Pots</span></strong>. Reservados todos los derechos
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Vendor JS Files -->
<script src="<?= base_url() . 'assets/admin/vendor/bootstrap/js/bootstrap.bundle.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/php-email-form/validate.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/quill/quill.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/tinymce/tinymce.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/simple-datatables/simple-datatables.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/chart.js/chart.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/apexcharts/apexcharts.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/echarts/echarts.min.js'; ?>"></script>

<script src="<?= base_url() . 'assets/plugins/sweetalert/sweetalert2.all.js'; ?>"></script>
<script src="<?= base_url() . 'assets/plugins/toastr/toastr.js'; ?>"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() . 'assets/admin/js/main.js'; ?>"></script>

<script src="<?= base_url() . 'assets/js/main.js'; ?>"></script>

<?php if ($view == 'Productos/ProductosAdmin') { ?>
    <script src="<?= base_url() . 'assets/js/producto/delete_producto.js'; ?>"></script>
<?php } elseif ($view == 'Formulario/Form') { ?>
    <script src="<?= base_url() . 'assets/js/formulario/delete_form.js'; ?>"></script>
<?php } elseif ($view == 'Usuarios/Usuario') { ?>
    <script src="<?= base_url() . 'assets/js/usuario/delete_usuario.js'; ?>"></script>
<?php } ?>

</body>

</html>