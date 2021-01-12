<?php 
  include "config.php";
  $user = $_SESSION['user'];
?>
<header>
      <nav>
      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $user['username']?></a>
      <div class="dropdown-menu" aria-labelledby="dropdownId">
        <a class="dropdown-item" href="#">Tài khoản</a>
        <a class="dropdown-item" href="logout.php">Đăng xuất</a>
      </div>
        <ul class="nav-links">
          <li>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
          </li>
          <li>
            <a href="about.php"><i class="fas fa-camera-retro"></i>About</a>
          </li>
          <li>
            <a href="resume.php"><i class="far fa-address-card"></i>Resume</a>
          </li>
          <li>
            <a href="work.php"><i class="fas fa-briefcase"></i>works</a>
          </li>
          <li>
            <a href="blog.php"><i class="fas fa-blog"></i>Blog</a>
          </li>
        </ul>
         <div class="burger">
          <i class="fas fa-bars"></i>
         </div>
      </nav>
    </header>
