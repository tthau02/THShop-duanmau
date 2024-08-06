<?php
    session_start();

    include "model/pdo.php";
    include "global.php";
    include "model/sampham.php";
    include "model/danhmuc.php";
    include "model/account.php";
    include "views/trang-chinh/header.php";

    $productSpecial = loadALL_sanpham_special();
    $listdanhmuc = loadALL_danhmuc();
    $listTop10 = loadALL_sanpham_top10();
    $listProductNew = loadALL_sanpham_new();
    
    if(isset($_GET['act'])&&($_GET['act']!=="")){
        $act = $_GET['act'];

        switch ($act) {
            case 'sanpham':
                $items_per_page = 12;
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($current_page - 1) * $items_per_page;
            
                if (isset($_POST['btn'])) {
                    $search = $_POST['search'];
                    $type_product = isset($_POST['type_product']) ? $_POST['type_product'] : 0;
                    $total_products = count_sanpham($search, $type_product);
                    $listProduct = loadALL_sanpham($search, $type_product, $items_per_page, $offset);
                    $typeName = $type_product > 0 ? loadOne_name_type($type_product) : "Kết quả tìm kiếm";
                } elseif (isset($_GET['type_id'])) {
                    $idType = $_GET['type_id'];
                    $total_products = count_sanpham("", $idType);
                    $listProduct = loadALL_sanpham("", $idType, $items_per_page, $offset);
                    $typeName = loadOne_name_type($idType);
                } else {
                    $total_products = count_sanpham("", 0);
                    $listProduct = loadALL_sanpham("", 0, $items_per_page, $offset);
                    $typeName = "Tất cả sản phẩm";
                }
            
                $total_pages = ceil($total_products / $items_per_page);
            
                include "views/trang-chinh/sanpham.php";
                break;            
            
            case 'gioithieu':
                include "views/trang-chinh/gioithieu.php";
                break;
            case 'baiviet':
                include "views/trang-chinh/baiviet.php";
                break;
            case 'lienhe':
                include "views/trang-chinh/lienhe.php";
                break;
            case 'detailpro':
                if (isset($_GET['product_id'])) {
                    $product_id = $_GET['product_id'];
                    update_views($product_id);
                    $getOnePro = loadOne_sanpham($product_id);
                    if ($getOnePro) {
                        $type_product = $getOnePro['type_product']; 
                        $getProductByType = getProductByTypeID($type_product);
                    } else {
                        $getProductByType = [];
                    }
            
                    include "views/trang-chinh/chitietsp.php";
                } else {
                    include "views/trang-chinh/home.php";
                }
                break;
                
                break;
            case 'dangky':
                if(isset($_POST["btn-register"])){
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    insert_account($password, $username, $email, $phone);
                    echo "<script>alert('Bạn đã tạo tài khoản thành công')</script>";
                }
                include "views/tai-khoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST["btn-login"])){
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $checkuser = check_account($username, $password);
                    if(is_array($checkuser)){
                        $_SESSION["user"] = $checkuser;
                        echo "<script>alert('Bạn đã tạo tài khoản thành công')</script>";
                        header("location: index.php");
                    }else{
                        echo "<script>alert('Tài khoản không tồn tại. Vui lòng kiểm tra lại')</script>";
                    }
                }
                include "views/tai-khoan/dangnhap.php";
                break;
                
            case 'thongtintaikhoan':
                if (!isset($_SESSION['user'])) {
                    echo "<script>alert('Bạn phải đăng nhập mới xem được thông tin.')</script>";
                    echo "<script>window.location.href = '?act=dangnhap';</script>";
                    exit();
                } else {
                    $customer_id = $_SESSION['user']['customer_id'];
                    $account = loadOne_account($customer_id);
                    include "views/trang-chinh/thongtintaikhoan.php";
                }
                break;
                
            case 'dangxuat':
                session_destroy();
                header("location: index.php");
                break;

            case 'update_account':
                if (isset($_POST["updateAccountBtn"])) {
                    $customer_id = $_POST["customer_id"];
                    $nameUpdate = $_POST["nameUpdate"];
                    $emailUpdate = $_POST["emailUpdate"];
                    $address = $_POST["address"];
                    $phoneUpdate = $_POST["phoneUpdate"];
            
                    $fileName = $_FILES["image_user"]["name"];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($fileName);
                    $image_user = $fileName;
            
                    if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
                    }
            
                    update_account($customer_id, $nameUpdate, $emailUpdate, $phoneUpdate, $address, $image_user);
                    $_SESSION["user"] = check_account($nameUpdate, $_SESSION["user"]["password"]);
                    header("location: index.php?act=thongtintaikhoan");
                }
                include "views/tai-khoan/capnhattaikhoan.php";
                break;

                case 'change_pass':
                    if (isset($_POST['changePassBtn'])) {
                        $currentPassword = $_POST['password'];
                        $newPassword = $_POST['passnew'];
                        $confirmNewPassword = $_POST['repassnew'];
                        $customer_id = $_POST['customer_id'];
                        change_password($customer_id, $password);
                        
                    }
                    include "views/tai-khoan/doimatkhau.php";
                    break;
                case "remopassword":
                    if(isset($_POST["passwordRemo"])){
                        $passwordOld = $_POST["password"];
                        $passwordnew = $_POST["passwordnew"];
                        $repaasswordnew = $_POST["repasswordnew"];
                    }
            default:
                include "views/trang-chinh/home.php";
                break;

            
        }
    }else{
        include "views/trang-chinh/home.php";
    }

    include "views/trang-chinh/footer.php";
?>