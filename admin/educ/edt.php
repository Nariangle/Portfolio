<?php
include '../../database.php';
if (isset($_POST['submit'])) {
    $school = $_POST['school'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    $sql = "INSERT INTO `education`(schoolName, course, year) VALUES ('$school','$course', '$year')";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Location: edt.php?msg=New data created");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet" />
    <title>Education</title>
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
                <h3>Eductaion</h3>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td><label for="">School:</label></td>
                            <td><input class="form" type="text" name="school" placeholder="school here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Course:</label></td>
                            <td><input class="form" type="text" name="course" placeholder="course here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Year:</label></td>
                            <td><input class="form" type="text" name="year" placeholder="year here"></td>
                        </tr>
                    </table>

                    <button type="submit" name="submit">Add</button>
            </div>
            </form>
        </div>

        <div>
            <br><br><br>
            <div style="display: flex; justify-content: center;">
                <table style="width: 60%;" class="educTable">
                    <thead>
                        <tr>
                            <th>School</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th style="width: 60px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../database.php';

                        $sql = "SELECT * FROM `education`";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <td><?php echo $row['schoolName'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td style="text-align: right;">
                                <a href="del.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
                            </td>

                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
        <br>
        <div style="padding: 20px; display: flex; justify-content: right;"><a href="../index.php"> <button>Exit</button></a></div>

    </div>
    </div>

    </main>
</body>

</html>