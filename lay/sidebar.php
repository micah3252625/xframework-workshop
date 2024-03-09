  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= URL_LOCATION ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <!-- Start User Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#crud-1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart3"></i><span>User</span> <i class="bi bi-chevron-right ms-auto"></i>
        </a>
        <ul id="crud-1" class="nav-content collapse <?= ($parameter === 'user' or $parameter === 'user-add-form') ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
          <li>
            <a class="<?= ($parameter === 'user') ? 'active' : '' ?>" href="<?= MAIN_PAGE . urlencode($encryption->encrypt('user')); ?>">
              <i class="bi bi-circle"></i><span>User List</span>
            </a>
          </li>
          <li>
            <a class="<?= ($parameter === 'user-add-form') ? 'active' : '' ?>" href="<?= MAIN_PAGE . urlencode($encryption->encrypt('user-add-form')); ?>">
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End User Nav -->


    </ul>

  </aside>
  <!-- End Sidebar-->
  <main id="main" class="main">