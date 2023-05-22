<?php 
require('../config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
<header>
        <div class="logo">
            <div class="logoItem">👽</div>
        </div>
        <?php echo "VERSION: ". $version; ?>
        <nav>
            <li><a href="../pages/home.php">Home</a></li>
            <li><a href="../pages/about.php">About Us</a></li>
        </nav>
    </header>
</body>
</html>