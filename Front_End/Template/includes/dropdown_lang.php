<div class="dropdown ">
           <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa fa-earth"></i>
           </a>
           <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
               <?php if ($_SESSION['lang'] == 'en') { ?>
                   <li>
                       <form action="Front_End/Helpers/change_lang.php" method="POST">
                           <button type="submit" name="en" value='en' class="dropdown-item bg-dark active">en</button>
                       </form>
                   </li>
                   <li>
                       <form action="Front_End/Helpers/change_lang.php" method="POST">
                           <button type="submit" name="ar" value='ar' class="dropdown-item ">ar</button>
                       </form>
                   </li>
                   <script>
                       document.dir = 'ltr';
                   </script>
               <?php } else { ?>
                   <li>
                       <form action="Front_End/Helpers/change_lang.php" method="POST">
                           <button type="submit" class="dropdown-item" name="en" value='en'>en</button>
                       </form>
                   </li>
                   <li>
                       <form action="Helpers/change_lang.php" method="POST">
                           <button type="submit" class="dropdown-item active bg-dark" name="ar" value='ar'>ar</button>
                       </form>
                   </li>
                   <script>
                       document.dir = 'rtl';
                       let nav_link = document.querySelector('.navbar-nav');
                       nav_link.setAttribute('class', 'navbar-nav me-auto mb-2  mb-lg-0');
                   </script>
               <?php } ?>
           </ul>

       </div>