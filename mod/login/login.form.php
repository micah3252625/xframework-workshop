<main>
  <!-- Start of Toast Here -->
  <div class="toast-container">
    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" id="successToast">
      <div class="d-flex">
        <div class="toast-body">

        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>

    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" id="errorToast">
      <div class="d-flex">
        <div class="toast-body">
          <span class="me-2"><i class="bi bi-check-circle-fill"></i></span>Operation Failed!
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <!-- End of Toast Here -->
  <div class="container">
    <?php include('includes/include.toasts.php') ?>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="<?php echo IMAGES ?>logo.png" alt="">
                <span class="d-none d-xl-block"><?= WEB_NAME ?></span>
              </a>
            </div>
            <!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form name="login-form" id="login-form" class="row g-3" method="POST" action="<?= MAIN_PAGE . urlencode($encryption->encrypt('login-process')) ?>">

                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                      <input type="text" name="username" class="form-control" id="username" required>
                      <!-- <div class="invalid-feedback">Please enter your username.</div> -->
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <!-- <div class="invalid-feedback">Please enter your password!</div> -->
                  </div>

                  <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit" id="login-button">
                      <span id="button-text">Login</span>
                      <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                    </button>

                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="<?= MAIN_PAGE . urlencode($encryption->encrypt('register-frm')); ?>">Create an account</a></p>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->