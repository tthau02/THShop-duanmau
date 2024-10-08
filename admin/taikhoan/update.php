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
            <form id="addProductForm" action="?act=update-account" method="POST" class="pb-5 mt-4 ms-4 me-4" enctype="multipart/form-data">
                <div>
                    <h4 class="p-3">Cập nhật tài khoản</h4>
                </div>
                <hr>
                <div class="row">
                    <input type="hidden" name="customer_id" value="<?= isset($customer_id) ? $customer_id : '' ?>">
                    <div class="">
                        <label for="image_pro" class="form-label">Ảnh đại diện</label>
                        <input type="file" class="form-control rounded-0" name="image_user">
                        <?php if (isset($Oneaccount["image_user"]) && $image_user): ?>
                            <img src="../upload/<?= $Oneaccount["image_user"] ?>" alt="Current Image" style="max-width: 100px;">
                        <?php endif; ?>
                    </div>
                    <div class="">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control rounded-0" name="username" placeholder="Nhập họ và tên" value="<?= isset($Oneaccount["username"]) ? $Oneaccount["username"] : '' ?>">
                    </div>
                    <div class="">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" class="form-control" placeholder="Nhập email" value="<?= isset($Oneaccount["email"]) ? $Oneaccount["email"] : '' ?>">
                    </div>
                    <div class="">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control rounded-0" name="phone" placeholder="Nhập số điện thoại" value="<?= isset($Oneaccount["phone"]) ? $Oneaccount["phone"] : '' ?>">
                    </div>
                    <div class="">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control rounded-0" name="address" placeholder="Nhập địa chỉ" value="<?= isset($Oneaccount["address"]) ? $Oneaccount["address"] : '' ?>">
                    </div>
                    <div class="">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control rounded-0" name="password" placeholder="Nhập mật khẩu" value="<?= isset($Oneaccount["password"]) ? $Oneaccount["password"] : '' ?>">
                    </div>
                    <div class="mt-3">
                        <span class="form-label">Vai trò</span>
                        <div class="row ps-3 pt-2">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" name="role" value="1" <?= isset($Oneaccount["role"]) && $Oneaccount["role"] == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="role1">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check col-5">
                                <input class="form-check-input" type="radio" name="role" value="0" <?= isset($Oneaccount["role"]) && $Oneaccount["role"] == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="role2">
                                    Khách hàng  
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-info" name="updateAccount">Cập nhật</button>
                        <button type="reset" class="btn btn-info">Nhập lại</button>
                        <a href="?act=list-account" class="btn btn-info">Danh sách</a>
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
    <script src="../content/js/validata.js"></script>
    <script src="../content/js/comfirm.js"></script>
</body>
</html>
