<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" />
    <title>Admin Panel</title>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    </div>

    <nav id="navbar" class="nav-menu navbar">
      <div class="navbar-list">
        <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="abtMe/edt.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>About Me</span></a></li>
        <li><a href="educ/edt.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Education</span></a></li>
        <li><a href="skill/edt.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Skills</span></a></li>
        <li><a href="work/edt.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Work</span></a></li>
        <li><a href="portfolio/gallery.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <a href="logout.php">Logout</a>
      </ul>
</nav>
</Div><!-- .nav-menu -->
  </div>
</header><!-- End Header -->
<main id="main">
    <div class="sidebar"></div>
    <Div class="container">
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <div class="mainTitle">User Details</div>
            <div><a href="../index.php"><button>Back to Profile</button></a></div>
        </div>

        <div>

            <div class="segment">

                <div class="subTitle">ABOUT ME</div>

                <?php
                include '../database.php';

                $sql = "SELECT * FROM `userinfo`";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo 'No Data Yet';
                } else {
                    $row = mysqli_fetch_assoc($result);
                }
                ?>

                <table>
                    <tbody>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Name:</td>
                            <td><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Contact:</td>
                            <td> <?php echo $row['contact'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Email:</td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">About me:</td>
                            <td><?php echo $row['me'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Experience:</td>
                            <td><?php echo $row['experience'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Occupation:</td>
                            <td><?php echo $row['occupancy'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Address:</td>
                            <td><?php echo $row['address'] ?></td>
                        </tr>
                        <tr>
                        <div>
                                    <img style=" height:200px; width:auto; max-width:500px;" class="img-fluid" src="../assets/img/<?php echo $row['img'] ?>" alt="..."/>
                                    <img style=" height:200px; width:auto; max-width:500px;" class="img-fluid" src="../assets/img/<?php echo $row['aboutimage'] ?>" alt="..." />
                                </div>
                                
                        </tr>
                    </tbody>
                </table>
                <br>
                


            </div>

            <section id="educ" class="segment">
                <div class="subTitle">EDUCATION</div>
                <table class="educTable">
                    <thead>
                        <tr>
                            <th>School</th>
                            <th>Course</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../database.php';

                        $sql = "SELECT * FROM `education`";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            </tr>
                            <td><?php echo $row['schoolName'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
                <br>
                

            </div>

            <div class="segment">
                <div class="subTitle">SKILLS</div>

                <?php
                include '../database.php';

                $sql = "SELECT * FROM `skills`";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo 'No Data Yet';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div>
                            <span style="font-weight: bolder;"> <?php echo $row['title'] ?></span> |
                            <span> <?php echo $row['content'] ?></span> |
                            <span> <?php echo $row['perc'] ?>%</span>
                        </div>
                <?php }
                }
                ?>
                <div>
                    <br>
                  
                </div>
            </div>

            <div class="segment">
                <div class="subTitle">MY WORKS</div>
                <?php
                include '../database.php';

                $cnt = 0;
                $sql = "SELECT * FROM `portfolio`";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo 'No Data Yet';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cnt++;
                ?>


                        <div class="content">
                            <div style="text-align: center;">
                                <div>
                                    <img style=" height:200px; width:auto; max-width:500px;" class="img-fluid" src="../assets/img/portfolio/<?php echo $row['img'] ?>" alt="..." />
                                </div>
                                <div style="font-weight: bolder;">
                                    <?php echo $row['title'] ?>
                                </div>
                                <div>
                                    <?php echo $row['descript'] ?>
                                </div>

                            </div>
                        </div>

                <?php }
                } ?>
                <br>
                <div>
                <section id="educ" class="segment">
                <div class="subTitle">MESSAGES</div>
                <table class="educTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../database.php';

                        $sql = "SELECT * FROM `contact` ORDER BY id DESC LIMIT 10";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            </tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['subject'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
                </div>
            </div><br>
            <br>
            <div style="text-align: center; margin: 10px;">
                <a href="../index.php"><button>Back to Profile</button></a>
            </div>


        </div>
    </div>
    </Div>
    </main>
</body>

</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>