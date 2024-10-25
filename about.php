<?php
require __DIR__ . '/../includes/config.php';

$title = "About";
$url = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require __DIR__ . '/../includes/flash.php'?>
    <div id="header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="faq.php">Frequently Asked Question</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="rules.php">Rules</a></li>
                <li><a href="likes.php">Likes</a></li>
            </ul>
        </nav>

    </div>
    <div id="content">
        <div id="main">
            <h1><?=$title?></h1>
            <p>
                <form action="process_like.php" method="post">
                    <input type="hidden" name="url" value="<?=$url?>">
                    <input type="submit" value="Like">
                </form>
            </p>
        </div>
        <div id="sidebar"></div>
    </div>
    <div id="footer">

    </div>
</body>
</html>