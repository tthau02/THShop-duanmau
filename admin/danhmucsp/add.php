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
                <h4 class="p-3">Danh mục sản phẩm</h4>
            </div>
            <hr>
            <form id="addTypeForm" action="index.php?act=add_type" method="POST" class="pb-5 mt-4 ms-4 mb-4 col-md-11">
                <div class="form-group">
                    <label for="typeID">Mã loại</label>
                    <input type="text" class="form-control mt-2 mb-3" name="typeID">
                </div>
                <div class="form-group">
                    <label for="typeName">Tên loại</label>
                    <input type="text" class="form-control mt-2 mb-3" id="typeName" name="typeName">
                </div>
                <button type="submit" class="btn btn-info text-light" name="btn_type">Thêm mới</button>
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

    <script>
        document.getElementById('addTypeForm').addEventListener('submit', function(event) {
            var typeName = document.getElementById('typeName').value.trim();
            
            if (typeID === "" || typeName === "") {
                alert("Vui lòng điền đầy đủ thông tin.");
                event.preventDefault();
            }
        });

    </script>
</body>
</html>
