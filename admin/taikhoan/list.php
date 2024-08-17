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
            <h4 class="p-3">Danh sách tài khoản</h4>
            <hr>
          
            <div class="pt-4 ms-4 me-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Mã KH</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Password</th>
                            <th scope="col">Địa Chỉ email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Vai trò</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($listaccount as $taikhoan){
                                extract($taikhoan)
                                ?>
                                    <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td><?=$customer_id ?></td>
                                    <td scope="row"><img src="../upload/<?=$image_user?>" alt="" style="width: 100px; height: 100px;"></td>
                                    <td><?=$username?></td>
                                    <td><?=$password?></td>
                                    <td><?=$email?></td>
                                    <td><?=$phone?></td>
                                    <td><?=$address?></td>
                                    <td><?=$role?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="?act=updateAc&customer_id=<?= $customer_id ?>" class="btn btn-success text-white">
                                                Sửa
                                            </a>

                                            <button class="btn btn-danger">
                                                <a onclick="return confirm('Bạn có muốn xóa tài khoản này không!')" href="?act=deleteAc&customer_id=<?=$customer_id?>" class="text-white">
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
                        <button type="button" class="btn btn-info"><a href="?act=create-account" class="text-light">Nhập thêm</a></button>
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
