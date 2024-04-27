<!DOCTYPE html>
<html lang="en">
<?php $msg=""?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simple Portfolio of Anthony Elizalde</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header">
      <nav class="navbar">
    <div class="navbar-brand">
     <a href="admin/admin.php" class="custom-link">
  <h1>AE</h1>
</a>
    </div>
    <div class="navbar-list">
        <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#educ" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Education</span></a></li>
          <li><a href="#skill" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Skill</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="cv-Elizalde.pdf" target="_blank" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        </ul>
    </div>
</nav>

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 
  <?php
      include 'database.php';

      $sql = "SELECT * FROM `userinfo`";
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) == 0) {
        echo 'No Data Yet';
      } else {
        $row = mysqli_fetch_assoc($result);
      }
      ?>


  <!-- <main id="main"> -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="d-flex flex-row justify-content-between align-items-center hero-container" data-aos="fade-in">
    <div>
      <h1><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?></h1>
      <br>
      <p>I'm an <span><a><?php echo $row['occupancy'] ?></a></span></p>
    </div>

    <div class="col-lg-4" data-aos="fade-right">
    <img src="assets/img/<?php echo $row['img']; ?>" class="oval-image" alt="">
    </div>
  </div>
</section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <?php echo $row['me'] ?>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/<?php echo $row['aboutimage']; ?>"class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            </p>
            <div style="font-size: 3vw; width: 100%; " class="row">
              <div class="col-lg-6">
                <ul style="width: 700px;">
                  <li><strong>Birthday:</strong> <span><?php echo $row['birthday'] ?></span></li>
                  <li><strong>Website:</strong> <span><?php echo $row['socials'] ?></span></li>
                  <li><strong>Phone:</strong> <span><?php echo $row['contact'] ?></span></li>
                  <li><strong>Email:</strong> <span><?php echo $row['email'] ?></span></li>
                </ul>
              </div>
            </div>
            <br>
            <br>
            <p>
              <?php echo $row['experience'] ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="educ" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Education</h2>
        </div>



        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">

            <?php
            include 'database.php';

            $sql = "SELECT * FROM `education`";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

              <div class="resume-item">
                <h4><?php echo $row['course'] ?></h4>
                <h5><?php echo $row['year'] ?></h5>
                <p><?php echo $row['schoolName'] ?></p>
              </div>
            <?php
            }
            ?>
          </div>

        </div>



      </div>
    </section><!-- End Resume Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skill" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <?php
            include 'database.php';

            $sql = "SELECT * FROM `skills`";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="progress" style="margin-top: 20px; height: 75px;">
                <span style="font-size: 20px;" class="skill"><?php echo $row['title'] ?><i class="val"><?php echo $row['perc'] ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['perc'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span style="font-size: 15px;"><?php echo $row['content'] ?> </span>
              </div>
            <?php
            }
            ?>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <?php
          include 'database.php';

          $sql = "SELECT * FROM `portfolio`";
          $result = mysqli_query($connect, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img style="width: auto; height: auto; " src="assets/img/portfolio/<?php echo $row['img'] ?>" class="img-fluid" alt="not available">
                <div class="resume-item">
                  <h4><?php echo $row['title'] ?></h4>
                  <p><?php echo $row['descript'] ?></p>
                </div>

              </div>
            </div>


          <?php
          }
          ?>



        </div>


    </section><!-- End Portfolio Section -->

    <?php
    include 'database.php';

    $sql = "SELECT * FROM `userinfo`";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 0) {
      echo 'No Data Yet';
    } else {
      $row = mysqli_fetch_assoc($result);
    }
    ?>

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-6">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?php echo $row['address'] ?></p>
              <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7921.602875556133!2d122.06539041537474!3d6.9143284646454175!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTQnNTcuOCJOIDEyMsKwMDQnMDcuMSJF!5e0!3m2!1sen!2sph!4v1709901743397!5m2!1sen!2sph" width="100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
      <br>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><?php echo $row['email'] ?></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><?php echo $row['contact'] ?></p>
            </div>

          </div>

        </div>
              <div class="col-lg-6">
              <?php include("contact.php"); ?>
                <form action="" method="post" role="form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                        </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                
                  </div>
                  <div class="text-center"><button type="submit" name="submit" class="btn btn-danger">Send Message</button></div>
                </form>
              </div>
            </div>
          </div>
                </div>
                  </div>
        </section>

  </main><!-- End #main -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/style.js"></script>

</body>
<footer>
    <p> @Anthony Elizalde 2024| All rights reserved</p>
</footer>

</html>