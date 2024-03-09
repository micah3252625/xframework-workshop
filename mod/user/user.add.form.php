<!-- Start of Page Title -->
<div class="pagetitle sr-pagetitle">
    <h1>Manage Users</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= URL_LOCATION ?>">Home</a>
            </li>
            <li class="breadcrumb-item">
                Manage Users
            </li>
            <li class="breadcrumb-item active">
                Add User
            </li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section>
    <div class="card">
        <div class="card-body">


            <!-- BACK BUTTON TO BACK TO LIST USER -->
            <div class="btn-action d-flex justify-content-between align-items-center">
                <h5 class="card-title">Add User Form</h5>
                <div class="btn-action-back-container">
                    <a class="btn btn-secondary" href="<?= MAIN_PAGE . urlencode($encryption->encrypt('user')) ?>">Back</a>
                </div>
            </div>
            <section class="form-container w-50">
                <form action="<?= MAIN_PAGE . urlencode($encryption->encrypt('user-add-form-process')) ?>" method="POST">
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                        <div class="col-3">
                            <input type="number" min="0" class="form-control" name="age" placeholder="Enter Age">
                        </div>
                    </div>
                    <div class="my-2">
                        <textarea class="form-control" placeholder="Address" name="address"></textarea>
                    </div>
                    <div class="btn-submit-container">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</section>