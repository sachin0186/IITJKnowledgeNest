<?php
    session_start();
    $user_logged_in = false;
    include('SessionConstant.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITJKnowledgeNest</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
            padding: 15px 0;
            color: #fff;
        }

        .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .navbar-right {
            display: flex;
            align-items: center;
        }

        .btn {
            margin-left: 10px;
        }

        .logo {
            max-width: 50px;
            margin-right: 10px;
        }

        .footer {
            background-color: #007bff;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-media-icons a {
            color: #fff;
            margin-left: 10px;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>

<header class="navbar">
    <section class="container-fluid">
        <img src="IITJLogobig.png" alt="Logo" class="logo">
        <div class="navbar-brand">
            <a href="index.php" style="text-decoration: none; color: #fff;">IITJKnowledgeNest <p></p></a>
            

        
        </div>

        <nav class="navbar-right">
            <?php
                if (isset($_SESSION[SESSION_STATUS]) && $_SESSION[SESSION_STATUS] == true) {
                    echo "Logged in as " . $_SESSION[SESSION_STUDENT_USERNAME] ."!";
                    $user_logged_in = true;
                    ?>
                    <a href="../notes-sharing-website/write.php" class="btn btn-default">Upload</a>
                    <a href="?link=1" name="link1" class="btn btn-default">Log out</a>
                    <?php
                } else {
                    echo "Not logged in";
                    ?>
                    <a href="../notes-sharing-website/login.php" class="btn btn-default">Log in</a>
                    <a href="../notes-sharing-website/register.php" class="btn btn-default">Sign up</a>
                    <?php
                }

                if (isset($_GET['link'])) {
                    $link = $_GET['link'];
                    if ($link == '1') {
                        session_destroy();
                        header('Location: index.php');
                        exit();
                    }
                }
            ?>
            <a href="index.php" class="btn btn-default">Home</a>
            <a href="included-files\contactUS.html" class="btn btn-default">Contact us</a>
            <a href="included-files\aboutus.html" class="btn btn-default">About Us</a>
        </nav>
    </section>
</header>

<!-- Page content goes here -->



</body>
</html>
