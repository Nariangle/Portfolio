<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet" />
    <title>Gallery</title>
</head>
<header id="header">
  <div class="d-flex flex-column">

    </div>

    <nav id="navbar" class="nav-menu navbar">
      <div>
        <ul>
        <li><a href="../index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="../abtMe/edt.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>About Me</span></a></li>
        <li><a href="../educ/edt.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Education</span></a></li>
        <li><a href="../skill/edt.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Skills</span></a></li>
        <li><a href="../work/edt.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Work</span></a></li>
        <li><a href="../portfolio/gallery.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
      </ul>
</Div><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

<body class="edtpage">
<main id="main">


    <div class="container">

        <div style="margin-bottom: 20px; display: flex; justify-content: center;">
            <div>
                <h1>Gallery</h1>
            </div>
        
        </div>

        <div>
            <?php
            include '../../database.php';

            $sql = "SELECT * FROM `portfolio`";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) == 0) {
                echo 'No Data Yet';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>


                    <div class="incontent">
                        <div>
                            <div style="font-weight: bolder;">
                                <?php echo $row['title'] ?>
                            </div>
                            <br>
                            <?php echo $row['descript'] ?>
                            <br>
                            <br>
                            <div><img style="height:200px; width:auto; max-width:500px;" class="img-fluid" src="../../assets/img/portfolio/<?php echo $row['img'] ?>" alt="..." /></div>
                            
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
        <br>
        <br>
        <div style="padding: 20px; display: flex; justify-content: right;"><a href="../index.php"> <button>Exit</button></a></div>
        

    </div>

    </div>

    </main>
</body>

</html>