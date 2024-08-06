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
                    <h3><?= $typeName ?></h3>
                    <div class="product">
                        <?php
                        foreach ($listProduct as $sanpham) {
                            extract($sanpham);
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
                    <div class="pagination">
                        <?php if ($current_page > 1) : ?>
                            <a href="?act=sanpham&page=<?= $current_page - 1 ?>">&laquo;</a>
                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                            <a href="?act=sanpham&page=<?= $i ?>" class="<?= $i == $current_page ? 'active' : '' ?>"><?= $i ?></a>
                        <?php endfor; ?>
                        <?php if ($current_page < $total_pages) : ?>
                            <a href="?act=sanpham&page=<?= $current_page + 1 ?>">&raquo;</a>
                        <?php endif; ?>
                    </div>
                </section>


            </div>
        </main>