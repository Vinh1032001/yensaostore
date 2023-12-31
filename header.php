<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cửa hàng yến sào Yến Thu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/carouseller.css">
        <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/category.css">
    </head>
    <body>
        <div id="cart-icon">
            <span>10</span>
            <a data-fancybox data-type="ajax" data-src="ajax-cart.php" href="javascript:;">
                <img width="100" src="images/cart-icon.png" alt="alt"/>
            </a>
        </div>
        <header>
            <section class="container">
                <div id="header-bottom">
                    <section id="header-left">
                        <img src="images/Ảnh chụp màn hình 2023-04-25 213250.png " />
                    </section>
                    <section id="header-right">
                        <br/><br/><br/><br/><br/><br/>
                        <section id="header-link">
                            <a id="cart-link" href="#"><img src="images/cart.png" /></a>
                            <a id="login-link" href="#">Đăng nhập</a>
                            <a id="register-link" href="#"><img src="images/register.png" /></a>
                        </section>
                    </section>
                    <section class="clear-both"></section>
                </div>
            </section>
            <section id="menu">
                <section class="container">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Chúng tôi</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li class="clear-both"></li>
                    </ul>
                    <form id="product-search" action="#" method="GET">
                        <input type="submit" value="">
                        <input type="text" name="text_search" placeholder="Tìm kiếm" />
                    </form>
                </section>
            </section>
        </header>