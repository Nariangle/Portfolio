<?php
include '../../database.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];

    $sql = "INSERT INTO `portfolio`(title, descript, img) VALUES ('$title', '$content', '$image_name')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        header("Location: edt.php?msg=New data created");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }

    if ($image_error === UPLOAD_ERR_OK) {
        $target_dir = "C:\xampp\htdocs\anthonyport\anthonyport\assets\img\portfolio";
        $target_file = $target_dir . basename($image_name);
        move_uploaded_file($image_tmp_name, $target_file);
    } else {
        echo "Failed to upload image: " . $image_error;
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
    <title>Skills</title>
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
                <h3>Sample Works</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td><label for="">Title:</label></td>
                            <td><input class="form" type="text" name="title" placeholder="title here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Content:</label></td>
                            <td><input class="form" type="text" name="content" placeholder="content here"></td>
                        </tr>
                        <tr>
                            <td><label for="image">Image:</label></td>
                            <td><input type="file" name="image" id="image"></td>
                        </tr>
                    </table>
                    <br>
                    <button type="submit" name="submit">Add</button>
            </div>
            </form>
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
                            <?php echo $row['descript'] ?>
                            <div><img style="height:200px; width:auto; max-width:500px;" class="img-fluid" src="../../assets/img/portfolio/<?php echo $row['img'] ?>" alt="..." /></div>

                            <a href="del.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
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