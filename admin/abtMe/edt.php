<?php
include '../../database.php';

if (isset($_POST['submit'])) {
    $abtme = $_POST['abtme'];
    $adr = $_POST['addr'];
    $bdy = $_POST['bday'];
    $cnt = $_POST['cnt'];
    $eml = $_POST['eml'];
    $exp = $_POST['exp'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ocp = $_POST['ocp'];
    $web = $_POST['web'];
    
    
    $sql = "UPDATE `userinfo` SET `me`='$abtme',`address`='$adr',`birthday`='$bdy',`contact`='$cnt',`email`='$eml',`experience`='$exp',`firstName`='$fname',`lastName`='$lname',`occupancy`='$ocp',`socials`='$web'  WHERE id=1";
    
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Location: ../index.php?msg=data updated");
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
    <title>Admin Detail</title>
    
</head>

<body>
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
<main id="main">
    <div class="container">

        <?php
        $sql = "SELECT * FROM `userinfo` WHERE id = 1";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div>
            <h3>Admin Detail</h3>
            <form action="" method="post">
                <table>
                    <tr class="formtable">
                        <td><label for="">First Name:</label></td>
                        <td><input class="form" type="text" name="fname" value="<?php echo $row['firstName'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Last Name:</label></td>
                        <td><input class="form" type="text" name="lname" value="<?php echo $row['lastName'] ?>"></td>
                    </tr>

                    <tr class="formtable">
                        <td><label for="">Contact</label></td>
                        <td><input class="form" type="text" name="cnt" value="<?php echo $row['contact'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Email:</label></td>
                        <td> <input class="form" type="text" name="eml" value="<?php echo $row['email'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">About Me:</label></td>
                        <td><textarea rows="5" cols="100" type="text" name="abtme" ?><?php echo $row['me'] ?></textarea></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Experience:</label></td>
                        <td> <textarea rows="5" cols="100" type="text" name="exp" ?><?php echo $row['experience'] ?></textarea></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Occupation:</label></td>
                        <td> <input class="form" type="text" name="ocp" value="<?php echo $row['occupancy'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Birthday:</label></td>
                        <td> <input class="form" type="text" name="bday" value="<?php echo $row['birthday'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Website:</label></td>
                        <td> <input class="form" type="text" name="web" value="<?php echo $row['socials'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Address:</label></td>
                        <td> <input class="form" type="text" name="addr" value="<?php echo $row['address'] ?>"></td>
                    </tr>
                </table>
                <br>
                <div>
                    <button type=" submit" name="submit">Save</button>

                </div>
            </form>
            <br>
            <div style="padding: 20px; display: flex; justify-content: right;"><a href="../index.php"> <button>Exit</button></a></div>

        </div>
    </div>
    </main>
</body>

</html>