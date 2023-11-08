<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CocktaiLab</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="home-header">
        <div class="home-menu container">
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="basket.php">Basket</a></li>

                    <?php 
			if(isset($_SESSION['u_id'])){?>
				<li><a href="logout.php">Logout </a></li>
			<?php }else{ ?>
				<li><a href="login.php">Login </a></li>
				<li><a href="register.php">Register </a></li>
		     <?php } ?>
                </ul>
            </div>
        </div>
		</div>
