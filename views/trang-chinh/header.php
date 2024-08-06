<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppp</title>
    <link rel="icon" href="upload/logo.jpg" type="image/jpeg">
    <link rel="stylesheet" href="content/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <header>
            <div class="container container-header">
                <div class="logo">
                    <svg viewBox="0 0 64 64">
                        <rect x="16" y="8" width="32" height="48" rx="4" ry="4" fill="#4CAF50" stroke="#333" stroke-width="2"/>
                        <circle cx="32" cy="46" r="2" fill="#333"/>
                        <rect x="22" y="12" width="20" height="28" rx="2" ry="2" fill="#FFF"/>
                    </svg>
                   <a href="index.php" style="text-decoration: none;"> <text>THShop</text></a>
                </div>
                <form action="?act=sanpham" method="POST" class="search" name="search">
                    <input type="text" name="search" placeholder="Nhập tên điện thoại, phụ kiện... cần tìm" value="<?= isset($search) ? $search : '' ?>">
                    <button type="submit" name="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="login-user">
                    <div class="login">
                            <?php
                                if(isset($_SESSION["user"])){
                                    extract($_SESSION["user"])
                                    ?>
                                        <a href=""><i class="fa-solid fa-user" style="color: aliceblue;"></i></a>
                                        <a href="" style="font-size: 17px;"><?=$username?></a>
                                    <?php
                                }else{
                                    ?>
                                        <a href="" class="js-buy-ticket"><i class="fa-solid fa-user" style="color: aliceblue;"></i></a>
                                        <a href="" class="js-buy-ticket">Đăng nhập</a>
                                    <?php
                                }
                            ?>
                    </div>
                    <div class="account">
                        <a href="?act=thongtintaikhoan"><i class="fa-solid fa-user" style="color: aliceblue;"></i></a>
                        <a href="?act=thongtintaikhoan">Tài khoản</a>
                    </div>
                </div>
            </div>
        </header>
            <nav>
                <div class="container">
                    <section class="navbar">
                        <ul>
                            <li><i class="fa-solid fa-house" style="color: aliceblue;"></i><a href="index.php">Trang Chủ</a></li>
                            <li><i class="fa-solid fa-mobile-button" style="color: aliceblue;"></i><a href="?act=sanpham">Sản Phẩm</a></li>
                            <li><i class="fa-solid fa-newspaper" style="color: aliceblue;"></i><a href="?act=gioithieu">Giới Thiệu</a></li>
                            <li><i class="fa-solid fa-clipboard" style="color: aliceblue;"></i><a href="?act=baiviet">Bài Viết</a></li>
                            <li><i class="fa-solid fa-address-book" style="color: aliceblue;"></i><a href="?act=lienhe">Liên Hệ</a></li>
                        </ul>   
                    </section>
                </div>
            </nav>