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
    <?php include "header.php" ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="container d-flex">
        <!-- Sidebar trái -->
        <?php include "sidebar.php" ?>
        <!-- Main content -->
        <div class="shadow bg-light pb-5 mt-4 ms-4 mb-4 col-md-10">
            <h4 class="p-3">Danh sách sản phẩm</h4>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
            <form action="?act=list_product" method="POST" class="ms-4">
                <div class="input-group input-group-sm">
                    <input class="form-control rounded-0 mb-2 w-100" type="search" id="search" name="search" placeholder="Nhập từ khóa tìm kiếm" value="<?= isset($search) ? $search : '' ?>">
                    <select class="form-select form-select-lg mb-3 text-center" aria-label=".form-select-lg example" name="type_product">
                        <option value="0" <?= isset($type_product) && $type_product == 0 ? 'selected' : '' ?>>Tất cả</option>
                        <?php
                            foreach($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                ?>  
                                    <option value="<?= $type_id ?>" <?= isset($type_product) && $type_product == $type_id ? 'selected' : '' ?>><?= $type_name ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <div class="input-group-sm">
                        <button type="submit" class="btn btn-secondary rounded-0" name="btnSearch">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="me-4">
                    <button class="btn btn-success">
                        <i class="fa-solid fa-plus"></i>
                        <a href="?act=add_product" class="text-light">Thêm Mới</a>
                    </button>
                </div>
            </div>
          
            <div class="pt-4 ms-4 me-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th scope="col">Mã SP</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá bán</th>
                            <th scope="col">Giảm giá</th>
                            <th scope="col">Ngày nhập</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Số lượt xem</th>
                            <th scope="col">Mã Loại</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($listproduct as $pro){
                                extract($pro);
                                ?>
                                    <tr>
                                    <td>
                                        <input type="checkbox" class="selectItem" name="selectedItems[]" value="<?=$type_id?>">
                                    </td>
                                    <td scope="row"><?=$product_id?></td>
                                    <td><img src="../upload/<?=$image_pro?>" alt="" style="width: 100px; height: 100px;"></td>
                                    <td><?=$name?></td>
                                    <td><?=$price?></td>
                                    <td><?=$discount?></td>
                                    <td><?=$date_add?></td>
                                    <td>
                                    <?php if ($special == 0) {?>
                                            <span class="badge bg-danger">Bình thường</span>
                                        <?php } else {?>
                                            <span class="badge bg-success">Đặc biệt</span>
                                        <?php } ?>
                                    </td>
                                    <td><?=$views?></td>
                                    <td><?=$type_product?></td>
                                    <td>
                                        <div class="d-flex ml-2">
                                            <button class="btn btn-success">
                                                <a href="?act=updateSP&product_id=<?=$product_id?>" class="text-white">
                                                    Sửa
                                                </a>
                                            </button>
                                            <button class="btn btn-danger">
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không!')" href="?act=deleteSP&product_id=<?=$product_id?>" class="text-white">
                                                    Xóa      
                                                </a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                        ?>
                    </tbody>
                    </table>
                    <form class="pb-5 mt-4 ms-4 mb-4 col-md-11" method="post" action="index.php?act=deleteSelected">
                    <button type="button" class="btn btn-info text-light" id="selectAllBtn">Chọn tất cả</button>
                    <button type="button" class="btn btn-info text-light" id="deselectAllBtn">Bỏ chọn tất cả</button>
                    <button type="submit" class="btn btn-info text-light">Xóa mục chọn</button>
                    <button type="button" class="btn btn-info"><a href="?act=add_product" class="text-light">Nhập thêm</a></button>
                  </form>
            </div>
        </div>
        <!-- End main content -->
    </main>
    <!-- FOOTER -->
    <?php include "footer.php" ?>
    <!-- END FOOTER -->
    
    <script src="../content/js/comfirm.js"></script>
</body>
</html>
