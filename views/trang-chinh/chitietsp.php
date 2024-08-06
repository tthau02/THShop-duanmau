<?php
    extract($getOnePro);
?>
<main class="container">
    <div class="detail">
        <div class="detail-product">
            <h3 class="name-product"><?=$name?></h3>
            <div class="detail-image">
                <img src="<?=$img_path.$image_pro?>" alt="">
            </div>
        </div>
        <div class="detail-buy">
            <nav class="breadcrumbs">
                <a href="">Trang Chủ</a>
                <span>/</span>
                <a href="">Điện thoại</a>
                <span>/</span>
                <a href="">iphone</a>
            </nav>
            <div class="price">
                <del><?= number_format($price, 0, ',') ?>đ  </del>
                <h4><?= number_format($discount, 0, ',') ?>đ </h4>
            </div>

            <div class="buy">
                <form action="" method="post">
                    <div class="quantity">
                        <button class="minus" aria-label="Decrease">&minus;</button>
                        <input type="number" class="input-box" value="1" min="1" max="10">
                        <button class="plus" aria-label="Increase">&plus;</button>
                    </div>
                </div>
                <div class="themvaogio">
                    <button type="button" name="">THÊM VÀO GIỎ HÀNG</button>
                </div>
                <div class="call">
                    <button type="button">GỌI NGAY</button>
                    <button type="button">CHAT VỚI TÔI</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="thongtinsanpham">
        <div class="info-product">
            <div class="title-info-product">
                <h4>Thông số kỹ thuật</h4>
            </div>
            <ul>
                <li><i class="fa-solid fa-check"></i>Màn hình: 6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels</li>
                <li><i class="fa-solid fa-check"></i>Camera sau:  48.0 MP + 12.0 MP + 12.0 MP</li>
                <li><i class="fa-solid fa-check"></i>Camera Selfie: 12.0 MP</li>
                <li><i class="fa-solid fa-check"></i>RAM:  8 GB</li>
                <li><i class="fa-solid fa-check"></i>Bộ nhớ trong: 256 GB</li>
                <li><i class="fa-solid fa-check"></i>CPU: Apple A17 Pro</li>
                <li><i class="fa-solid fa-check"></i>Dung lượng pin:  29 Giờ</li>
                <li><i class="fa-solid fa-check"></i>Thẻ sim: 1 - 1 eSIM, 1 Nano SIM</li>
                <li><i class="fa-solid fa-check"></i>Hệ điều hành: iOS 17</li>
                <li><i class="fa-solid fa-check"></i>Xuất xứ: Trung Quốc</li>
                <li><i class="fa-solid fa-check"></i>Thời gian ra mắt: 09/2023</li>
            </ul>
            <div class="title-info-product mota">
                <h4>Mô tả sản phẩm</h4>
                <p><?=$description?></p>
            </div>
        </div>
        <section class="slider">
            <div class="list">
                <div class="item">
                    <img src="content/img/banner.jpg" alt="">
                </div>
                <div class="item">
                    <img src="content/img/banner2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="content/img/banner3.jpg" alt="">
                </div>
                <div class="item">
                    <img src="content/img/banner4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="content/img/banner5.jpg" alt="">
                </div>
                <div class="item">
                    <img src="content/img/bannrfpt.png" alt="">
                </div>
            </div>
            <div class="buttons">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>

            <div class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </div>
        </section>
    </div>
    <!-- Bình Luận -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#comment").load("views/binh-luan/commentForm.php", {product_id: <?=$product_id?>});
        });
    </script>
    <div class="comment-section" id="comment"></div>
    <!-- end Bình Luận -->

    <!-- sản phẩm liên quan -->
    <div class="product-ralate">
        <h3>Sản phẩm liên quan</h3>
        <div class="ralate">
            <?php
                foreach ($getProductByType as $productID){
                    extract($productID);
                    ?>
                        <article class="product-item">
                            <a href="?act=detailpro&product_id=<?=$product_id?>"><img src="<?=$img_path . $image_pro?>" alt="" class="product-img"></a>
                            <a href="?act=detailpro&product_id=<?=$product_id?>"><h2 class="product-name"><?=$name?></h2></a>
                            <div class="price-product">
                                <h2 class="price"><?= number_format($discount, 0, ',') ?>đ </h2>
                                <del><?= number_format($price, 0, ',') ?>đ </del>
                            </div>
                            <form action="" method="post" class="buy">
                                <button type="submit">Mua Ngay</button>
                            </form>
                        </article>
                    <?php
                }
            ?>
        </div>
    </div>
    <!-- end sản phẩm liên quan -->
</main>
