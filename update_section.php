<?php
session_start();
require('db.php');

if (!isset($_SESSION['isUserLoggedIn'])) {
    echo "<script>window.location.href = 'log.php' </script>";
}

if (isset($_POST['update_p'])) {
    $p_id = isset($_POST['pid']) ? intval($_POST['pid']) : 0;

    if ($p_id > 0) {
        header("Location: update_section.php?updateproject=true&pid=$p_id");
        exit();
    } else {
        echo "Invalid project ID";
    }
}

if (isset($_POST['update'])) {
    $p_id = isset($_POST['pid']) ? intval($_POST['pid']) : 0;

    if ($p_id > 0) {
        $ptitle = mysqli_real_escape_string($dbcon, $_POST['ptitle']);
        $pdes = mysqli_real_escape_string($dbcon, $_POST['pdes']);
        $gitlink = mysqli_real_escape_string($dbcon, $_POST['gitlink']);

        
        $targetDir = "images/";  
        $imageName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $imageName;
        $uploadOk = 1;
        $imageFileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        
        if (!empty($_FILES["image"]["tmp_name"])) {
            
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
            $updateImageQuery = "UPDATE project SET img='$imageName' WHERE id=$p_id";
            mysqli_query($dbcon, $updateImageQuery);
        }

        
        $updateQuery = "UPDATE project SET title='$ptitle', description='$pdes', link='$gitlink' WHERE id=$p_id";
        mysqli_query($dbcon, $updateQuery);

        
        // header("Location: on.php?projectsetting=true");
        // exit();
    } else {
        echo "Invalid project ID";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="x-icon" href="a.png">
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>

    <?php
    $user_query = $dbcon->query("SELECT * FROM reg_table");
    $user_information = $user_query->fetch_assoc();
    ?>

    <div class="container">
        <nav>
            <ul>
                <li><a href="on.php" class="logo">
                        <img src="a.png" alt="">
                        <span class="nav-item"><?= $user_information['username'] ?></span>
                    </a></li>
                <li><a href="on.php?homesetting=true">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="on.php?aboutsetting=true">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">About</span>
                    </a></li>
                <li><a href="on.php?timelinesetting=true">
                        <i class="fas fa-calendar"></i>
                        <span class="nav-item">Timeline</span>
                    </a></li>
                <li><a href="on.php?skillsetting=true">
                        <i class="fas fa-tasks"></i>
                        <span class="nav-item">Skills</span>
                    </a></li>

                <li><a href="on.php?projectsetting=true">
                        <i class="fas fa-file-invoice"></i>
                        <span class="nav-item">Projects</span>
                    </a></li>
                <li><a href="on.php?hobbysetting=true">
                        <i class="fas fa-icons"></i>
                        <span class="nav-item">Hobbies</span>
                    </a></li>
                <li><a class="logout" href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="log-out">Log out</span>
                    </a></li>
            </ul>
        </nav>

        <?php
        if (isset($_GET['updateproject'])) {
            $p_id = isset($_GET['pid']) ? intval($_GET['pid']) : 0;

            if ($p_id > 0) {
                $result = mysqli_query($dbcon, "SELECT * FROM project WHERE id='$p_id'");
                $project_data = mysqli_fetch_assoc($result);

                if ($project_data) {
        ?>
                    <div class="home-container">
                        <form method="POST" enctype="multipart/form-data">
                            <img src='images/<?= $project_data['img'] ?>' style='width: 200px; height: 200px;'>
                            <br />
                            <label for="proid">Project ID</label>
                            <input type="text" id="proid" name="pid" value="<?= $project_data['id'] ?>" readonly>
                            <label for="protitle">Project Title</label>
                            <input type="text" id="protitle" name="ptitle" value="<?= $project_data['title'] ?>" placeholder="Your name..">
                            <label for="prodesc">Project Description</label>
                            <textarea id="prodesc" name="pdes" placeholder="Write something.." style="height:100px"><?= $project_data['description'] ?></textarea>
                            <label for="glink">Github Repository Link</label>
                            <input type="text" id="glink" name="gitlink" value="<?= $project_data['link'] ?>" placeholder="Github Link">
                            <label for="image"></label>
                            <input type="file" name="image">
                            <input type="submit" name="update" value="Update">
                        </form>
                    </div>
        <?php
                } else {
                    echo "No matching record found for project ID $p_id.";
                }
            } else {
                echo "Invalid project ID";
            }
        } else {
        ?>
            <form action="" method="post">
                <label for="proid">Project ID</label>
                <input type="text" id="proid" name="pid" value="">
                <input type="hidden" name="updateproject" value="true">
                <input type="submit" name="update_p" value="Update Project">
            </form>
        <?php
        }
        ?>
    </div>

</body>

</html>
