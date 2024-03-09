<!-- Start of Page Title -->
<div class="pagetitle sr-pagetitle">
    <h1>Manage Users</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= URL_LOCATION ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">
                Manage Users
            </li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User</h5>

            <!-- ADD BUTTON TO ADD NEW USER -->
            <div class="btn-action d-flex justify-content-end my-2">
                <a class="btn btn-primary" href="<?= MAIN_PAGE . urlencode($encryption->encrypt('user-add-form')) ?>">Add User</a>
            </div>

            <!-- LIST OF ALL ADDED USERS -->
            <div class="table-container table-responsive">
                <table class="table table-bordered" id="user-table">
                    <thead>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM user";
                        $rows = $db->get_results($query);
                        ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?= $row->name ?></td>
                                <td><?= $row->age ?></td>
                                <td><?= $row->address ?></td>
                                <td align="middle" width="10%">
                                    <a class="btn btn-primary" href="">View</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>