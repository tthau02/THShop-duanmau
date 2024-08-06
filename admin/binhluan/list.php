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
            <h4 class="p-3">Tổng hợp bình luận</h4>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <form action="" class="ms-4">
                    <div class="input-group input-group-sm">
                        <input class="form-control rounded-0 mb-2" type="search" id="search" name="search" placeholder="Nhập từ khóa tìm kiếm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-sm" >
                            <button type="button" class="btn btn-secondary rounded-0">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>           
                </form>
            </div>
            <div class="pt-4 ms-4 me-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Mã BL</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Mã khách hàng</th>
                            <th scope="col">Ngày bình luận</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($listcomment as $comment){
                                extract($comment)
                                ?>
                                    <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td scope="col"><?=$comment_id?></td>
                                    <td scope="col"><?=$content?></td>
                                    <td scope="col"><?=$product_id?></td>
                                    <td scope="col"><?=$customer_id?></td>
                                    <td scope="col"><?=$comment_date?></td>
                                    
                                    <td>
                                        <button class="btn btn-danger">
                                            <a href="javascript:void(0)" onclick="confirmDelete('?act=deleteCommetn&comment_id=<?=$comment_id?>')" class="text-white">
                                                Xóa      
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                    </table>
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
