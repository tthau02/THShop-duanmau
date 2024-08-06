<?php
    if (isset($sanpham) && is_array($sanpham)) {
        extract($sanpham);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/be9ed8669f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../content/css/admin.css">
    <link rel="icon" href="../upload/logo.jpg" type="image/jpeg">
</head>
<body>
    <?php include "header.php"; ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="container d-flex">
        <!-- Sidebar trái -->
        <?php include "sidebar.php"; ?>
        <!-- Main content -->
        <div class="shadow bg-light pb-5 mt-4 ms-4 col-md-10">
            <form action="?act=update_product" method="POST" class="pb-5 mt-4 ms-4 me-4" enctype="multipart/form-data">
                <div>
                    <h4 class="p-3">Cập nhật sản phẩm</h4>
                </div>
                <hr>
                <div class="row">
                    <input type="hidden" name="product_id" value="<?= isset($product_id) ? $product_id : '' ?>">
                    <div class="">
                        <label for="image_pro" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" class="form-control rounded-0" name="image_pro" placeholder="">
                        <?php if(isset($image_pro)): ?>
                            <img src="../upload/<?= $image_pro ?>" alt="Current Image" style="max-width: 100px;">
                        <?php endif; ?>
                    </div>
                    <div class="">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control rounded-0" name="name" placeholder="Nhập tên sản phẩm" value="<?= isset($name) ? $name : '' ?>">
                    </div>
                    <div class="">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea name="description" cols="30" rows="3" class="form-control" placeholder="Nhập mô tả"><?= isset($description) ? $description : '' ?></textarea>
                    </div>
                    <div class="">
                        <label for="price" class="form-label">Đơn giá</label>
                        <input type="text" class="form-control rounded-0" name="price" placeholder="Nhập giá bán" value="<?= isset($price) ? $price : '' ?>">
                    </div>
                    <div class="">
                        <label for="discount" class="form-label">Giảm giá</label>
                        <input type="text" class="form-control rounded-0" name="discount" placeholder="Nhập giá giảm" value="<?= isset($discount) ? $discount : '' ?>">
                    </div>
                    <div class="">
                        <label for="date_add" class="form-label">Ngày nhập</label>
                        <input type="date" class="form-control rounded-0" name="date_add" placeholder="Nhập ngày nhập" value="<?= isset($date_add) ? $date_add : '' ?>">
                    </div>
                    <div class="mt-3">
                        <span class="form-label">Danh mục sản phẩm:</span>
                        <select class="form-control" name="type_product">
                            <option value="">-- Lựa chọn --</option>
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    ?>  
                                        <option value="<?=$type_id?>" <?= isset($type_product) && $type_product == $type_id ? 'selected' : '' ?>><?=$type_name?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <span class="form-label">Hàng đặc biệt</span>
                        <div class="row ps-3 pt-2">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" name="special" value="1" <?= isset($special) && $special == 1 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="special1">
                                    Đặc biệt
                                </label>
                            </div>
                            <div class="form-check col-5">
                                <input class="form-check-input" type="radio" name="special" value="0" <?= isset($special) && $special == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="special2">
                                    Bình thường
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-info" name="btnUpdateProduct">Cập nhật</button>
                        <button type="reset" class="btn btn-info">Nhập lại</button>
                        <a href="?act=list_product" class="btn btn-info">Danh sách</a>
                    </div>  
                </div>
                <div class="mt-3 mb-2 text-success h5">
                    <?php
                        if (isset($thongbao) && $thongbao !== "") {
                            echo $thongbao;
                        }
                    ?>      
                </div>
            </form>
        </div>      
        <!-- End main content -->
    </main>
    <!-- FOOTER -->
    <?php include "footer.php"; ?>
    <!-- END FOOTER -->
    <script src="../content/js/comfirm.js"></script>
</body>
</html>
