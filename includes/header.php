<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- our custom CSS -->
    <link rel="stylesheet" href="../public/css/custom.css" />
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>
    <!-- header section starts  -->
    <header class="header">

        <a href="/home" class="logo"> <i class="fas fa-store"></i> shopie </a>

        <form action="" class="header__search">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="login" class="fas fa-user"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="cart" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <!-- header section ends -->

    <!-- side-bar section starts -->
    <div class="side-bar">
        <div id="close-side-bar" class="fas fa-times"></div>
        <div class="user">
            <img src="img/user-img.png" alt="">
            <h3>hadeel jameel</h3>
            <a href="#">log out</a>
        </div>
        <nav class="navbar">
            <a href="home"> <i class="fas fa-angle-right"></i> home </a>
            <a href="about"> <i class="fas fa-angle-right"></i> about </a>
            <a href="products"> <i class="fas fa-angle-right"></i> products </a>
            <a href="contact"> <i class="fas fa-angle-right"></i> contact </a>
            <a href="login"> <i class="fas fa-angle-right"></i> login </a>
            <a href="register"> <i class="fas fa-angle-right"></i> register </a>
            <a href="cart"> <i class="fas fa-angle-right"></i> cart </a>
        </nav>
    </div>
    <!-- side-bar section ends -->
    <!-- container -->
    <div class="container">

        <?php
        // show page header
        echo "<div class='page-header'>
                <h1>{$page_title}</h1>
            </div>";
        ?>