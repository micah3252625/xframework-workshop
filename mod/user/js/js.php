<script>
    <?php if ($parameter === 'user') : ?>
        $('#user-table').DataTable();
        <?php if (isset($_SESSION['status']) && $_SESSION['status']) : ?>
            alert('User added successfully!')
        <?php elseif (isset($_SESSION['status']) && !$_SESSION['status']) : ?>
            alert('Something went wrong!')
        <?php endif ?>
        <?php unset($_SESSION['status']) ?>
    <?php elseif ($parameter === 'user-add-form') : ?>
        <?php if (isset($_SESSION['status']) && $_SESSION['status']) : ?>
            alert('User added successfully!')
        <?php elseif (isset($_SESSION['status']) && !$_SESSION['status']) : ?>
            alert('Something went wrong!')
        <?php endif ?>
        <?php unset($_SESSION['status']) ?>
    <?php endif ?>
</script>