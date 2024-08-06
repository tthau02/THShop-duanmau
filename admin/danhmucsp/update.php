<?php
    // Ensure that $danhmuc is defined
    if (isset($danhmuc) && is_array($danhmuc)) {
        extract($danhmuc);
    } else {
        $type_id = '';
        $type_name = '';
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
    <?php include "header.php" ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="container d-flex">
        <!-- Sidebar trái -->
        <?php include "sidebar.php" ?>
        <!-- Main content -->
        <div class="shadow bg-white pb-5 mt-4 ms-4 mb-4 col-md-10">
            <div>
                <h4 class="p-3">Sửa danh mục sản phẩm</h4>
            </div>
            <hr>
            <form action="?act=updatedanhmuc" method="POST" class="pb-5 mt-4 ms-4 mb-4 col-md-11">
                <div class="form-group">
                    <label for="typeID">Mã loại</label>
                    <input type="text" class="form-control mt-2 mb-3" name="typeID" value="<?php echo $type_id; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="typeName">Tên loại</label>
                    <input type="text" class="form-control mt-2 mb-3" name="typeName" value="<?php echo htmlspecialchars($type_name); ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $type_id; ?>">
                <button type="submit" class="btn btn-info text-light" name="update_type">Cập nhật</button>
                <button type="reset" class="btn btn-info text-light">Nhập lại</button>
                <a href="index.php?act=listds" class="btn btn-info text-light">Danh sách</a>
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
    <?php include "footer.php" ?>
    <!-- END FOOTER -->
</body>
</html>
