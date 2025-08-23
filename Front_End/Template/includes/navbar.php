<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="Front_End/Layout/images/logo2.png" class='w-50 h-50' alt="">
    </a>
    <button class="navbar-toggler fs-lg-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-lg-2">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $general_info_link; ?>
          </a>
          <div class="dropdown-menu py-2 px-2">
            <div class="mb-2 dropdown-item">
              <a href="<?php echo !isset($_GET['page']) && !isset($_GET['show']) ? '#about_jordan' : '/' ?>" class="dropdown-item"><?php echo $general_sub_link_about ?></a>
            </div>
            <div class="mb-3 dropdown-item">
              <a href="<?php echo isset($_GET['page']) && $_GET['page'] == 'get_around' && !isset($_GET['sub_page']) ? '#get_around' : '?page=get_around'; ?>" class="dropdown-item"><?php echo $general_sub_link_getting ?></a>
            </div>
            <div class="mb-3 dropdown-item">
              <a href="<?php echo isset($_GET['page']) && $_GET['page'] == 'just_facts' && !isset($_GET['sub_page']) ? '#just_facts' : '?page=just_facts'; ?>" class="dropdown-item"><?php echo $general_sub_link_facts ?></a>
            </div>
            <div class=" dropdown-item">
              <a href="<?php echo isset($_GET['page']) && $_GET['page'] == 'val_tradition' && !isset($_GET['sub_page']) ? '#val_tradition' : '?page=val_tradition'; ?>" class="dropdown-item"><?php echo $general_sub_link_val; ?> </a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="?expriances"><?php echo $experinces_link ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="?attraction"><?php echo $attraction_link ?></a>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $media_link; ?>
          </a>
          <div class="dropdown-menu pt-2 px-2">
            <div class="mb-2 dropdown-item">
              <a href="?news" class="dropdown-item"><?php echo $media_news ?></a>
            </div>
            <div class="dropdown-item">
              <a href="?contact" class="dropdown-item"><?php echo $media_contact ?></a>
            </div>
          </div>
        </li>
          <?php if(isset($_SESSION["user_name"]) && isset($_SESSION["user_id"])){ ?>
            <li class="nav-item dropdown box-user">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo strtoupper($_SESSION['user_name']); ?>
              </a>
              <div class="dropdown-menu pt-2 px-2 ">
                <div class="dropdown-item">
                  <a href="?booking&res" class="dropdown-item"><?php echo $res ?></a>
                </div>
                <div class="dropdown-item item-logout">
                  <a href="?booking&logout" class="dropdown-item logout "><?php echo $logout ?></a>
                </div>
              </div>
          </li>
          <?php } ?>
      
      </ul>
    </div>
  </div>
</nav>