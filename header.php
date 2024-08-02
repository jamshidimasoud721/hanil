<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>hanil</title>
</head>
<body id="bdy">

<!--preloader-->
<div id="spinner"></div>

<header class="header" data-aos="fade-down" data-aos-delay="3000">
    <div class="header_area">
        <div class="menu_content">
            <span class="close_btn">&times;</span>
            <div class="menu_content_inner">
                <a href="home.php" class="texts">خانه</a>
                <a href="products.php">محصولات</a>
                <a href="blogs.php">مقالات</a>
                <a href="#">تماس با ما</a>
                <a href="about.php">درباره ما</a>
            </div>
        </div>
        <section class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="header_menu">
                        <span  class="header_menu_link open_btn">
                            <i class="fal icon-bars icon-2x"></i>
                        </span>
                        <p class="header_menu_title">فهرست</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header_logo">
                        <a href="home.php">
                            <img src="assets/img/logo/logo.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header_icons">
                        <div class="header_icons_cart">
                            <a href="">
                                <i class="fal icon-shopping-bag"></i>
                            </a>
                        </div>
                        <div class="header_icons_user">
                            <a href="">
                                <i class="fal icon-user"></i>
                            </a>
                        </div>
                        <div class="header_icons_search">
                            <a class="search_btn" data-toggle="collapse" href="#search_body_collapse" role="button"
                               aria-expanded="false" aria-controls="search_body_collapse">
                                <i class="fal icon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="search_body_collapse" class="col-md-4 collapse">
                    <div class="search_body">
                        <form>
                            <div class="form_item">
                                <input type="search" name="search" placeholder="جستجو ...">
                                <a type="submit"><i class="fal icon-search"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
