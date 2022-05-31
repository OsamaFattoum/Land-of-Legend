<nav class="navbar navbar-expand bg-dark py-3 sticky-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="bars fs-5 ms-2">
          <i class="fa-solid fa-bars-staggered"></i>
      </div>
      
      <div class="dropdown ms-auto mb-2  me-lg-5 me-3 mb-lg-0">
        <a  href="" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo strtoupper($_SESSION['admin_name']); ?>
        </a>
        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>