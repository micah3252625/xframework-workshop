<script>
    <?php if ($parameter === '') : ?>
         // toast variables here
        const successToast = document.getElementById('successToast')
        const errorToast = document.getElementById('errorToast');

        <?php if ($_SESSION[WEB_ABSTRACT]['logged_in']) : ?>
            $('#successToast .toast-body').html('<i class="bi bi-check-lg"></i> Logged in successfully');
            const triggerSuccessToast = new bootstrap.Toast(successToast)
            triggerSuccessToast.show()
            <?php
            // Unset the session variable
            unset($_SESSION[WEB_ABSTRACT]['logged_in']);
            ?>
        <?php endif ?>
    <?php endif; ?>
</script>