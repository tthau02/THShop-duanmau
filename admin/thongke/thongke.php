
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
        <h4 class="p-3">Thống kê sản phẩm từng loại</h4>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <form action="" class="ms-4">
                <div class="input-group input-group-sm">
                    <input class="form-control rounded-0 mb-2" type="search" id="search" name="search" placeholder="Nhập từ khóa tìm kiếm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    <div class="input-group-sm">
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
                        <th scope="col">Loại hàng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá cao nhất</th>
                        <th scope="col">Giá thấp nhất</th>
                        <th scope="col">Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statistics as $stat): ?>
                        <tr>
                            <td><?= htmlspecialchars($stat['type_name']) ?></td>
                            <td><?= htmlspecialchars($stat['quantity']) ?></td>
                            <td><?= $stat['max_price'] !== null ? number_format($stat['max_price'], 0, ',', '.'): 'Không có dữ liệu' ?></td>
                            <td><?= $stat['min_price'] !== null ? number_format($stat['min_price'], 0, ',', '.') : 'Không có dữ liệu' ?></td>
                            <td><?= $stat['avg_price'] !== null ? number_format($stat['avg_price'], 0, ',', '.') : 'Không có dữ liệu' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="mt-3">
                <button class="btn btn-info">
                        <a href="?act=bieudo" class="text-light">Xem biểu đồ</a>
                    </button>
            </div>  
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
