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
                <h4 class="p-3">Danh sách danh mục</h4>
            </div>
            <hr>
            <div class="pb-5 mt-4 ms-4 mb-4 ">
                <table class="table table-hover ">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">
                          <input type="checkbox" id="selectAll">
                        </th>
                        <th scope="col">Mã danh mục</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Tính năng</th>
                      </tr>
                    </thead>
                      <?php
                            foreach($listdanhmuc as $danhsachdanhmuc){
                              extract($danhsachdanhmuc);
                              ?>
                                <tbody>
                                    <tr>
                                      <th scope="row mt-4">
                                          <input type="checkbox" class="selectItem" name="selectedItems[]" value="<?=$type_id?>">
                                      </th>
                                      <td><?=$type_id?></td>
                                      <td><?=$type_name?></td>
                                      <td class="align-items-center">
                                            <button class="btn btn-success">
                                                <a href="?act=updateDM&type_id=<?=$type_id?>" class="text-white">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </button>
                                            <button class="btn btn-danger">
                                                <a onclick="return confirm('Bạn chắc chắn muốn xóa danh mục này không!')" href="?act=xoadanhmuc&type_id=<?=$type_id?>" class="text-white">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </button>
                                      </td>
                                    </tr>
                                    
                                  </tbody>
                              <?php
                            }
                      ?>
                     
                  </table>
                  <form class="pb-5 mt-4 ms-4 mb-4 col-md-11" method="post" action="index.php?act=deleteSelected">
                    <button type="button" class="btn btn-info text-light" id="selectAllBtn">Chọn tất cả</button>
                    <button type="button" class="btn btn-info text-light" id="deselectAllBtn">Bỏ chọn tất cả</button>
                    <button type="submit" class="btn btn-info text-light">Xóa mục chọn</button>
                    <button type="button" class="btn btn-info"><a href="index.php?act=add_type" class="text-light">Nhập thêm</a></button>
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
