<div class="container">
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
            </div>
        </div>

        <main class="container">
            <div class="content">
                <aside class="content-navbar">
                    <div class="intro">
                        <h3>Danh Mục</h3>
                        <div class="list">
                            <ul>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    ?>
                                    <li>
                                        <i style="font-size: 12px;" class="fa fa-chevron-right"></i>
                                        <a href="?act=sanpham&type_id=<?=$type_id?>"><?=$type_name?></a>
                                    </li>
                                    <?php
                                }
                                ?>                
                             </ul>
                        </div>
                    </div>
                    
                    <div class="news">
                        <h3>Top 10 Yêu Tích</h3>
                        <div class="top-product">
                            <?php
                                foreach($listTop10 as $product){
                                    extract($product);
                                    ?>
                                        <div class="top" style="border-bottom: 1px solid #ccc;">
                                            <div class="top-img">
                                                <img src="<?=$img_path.$image_pro?>" alt="">
                                            </div>
                                            <a href="?act=detailpro&product_id=<?=$product_id?>"><?=$name?></a>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </aside>
                <section class="content-product">
                    <div class="title-product">
                        <h3> SẢN PHẨM ĐẶC BIỆT</h3>
                    </div>
                    <div class="product">
                        <?php
                            foreach($productSpecial as $product){
                                extract($product);
                                ?>
                                     <article class="product-item">
                                        <a href="?act=detailpro&product_id=<?=$product_id?>"><img src="<?=$img_path . $image_pro?>" alt="" class="product-img"></a>
                                        <a href="?act=detailpro&product_id=<?=$product_id?>"><h2 class="product-name"><?=$name?></h2></a>
                                        <div class="price-product">
                                            <h2 class="price"><?= number_format($discount, 0, '.', '.') ?>đ</h2>
                                            <del><?= number_format($price, 0, '.', '.') ?>đ</del>
                                        </div>
                                        <form action="" method="post" class="buy">
                                            <button type="submit">Mua Ngay</button>
                                        </form>
                                    </article>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="title-product">
                        <h3>Sản phẩm mới nhất</h3>
                    </div>
                    <div class="product">
                        <?php
                            foreach($listProductNew as $new){
                                extract($new);
                                    ?>
                                     <article class="product-item">
                                        <a href="?act=detailpro&product_id=<?=$product_id?>"><img src="<?=$img_path . $image_pro?>" alt="" class="product-img"></a>
                                        <a href="?act=detailpro&product_id=<?=$product_id?>"><h2 class="product-name"><?=$name?></h2></a>
                                        <div class="price-product">
                                            <h2 class="price"><?= number_format($discount, 0, '.', '.') ?>đ</h2>
                                            <del><?= number_format($price, 0, '.', '.') ?>đ</del>
                                        </div>
                                        <form action="" method="post" class="buy">
                                            <button type="submit">Mua Ngay</button>
                                        </form>
                                    </article>
                                <?php
                            }
                        ?>
                    </div>
                </section>
            </div>
        </main>