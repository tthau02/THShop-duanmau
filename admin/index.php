<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sampham.php";
include "../model/account.php";
include "../model/comment.php";
include "../model/thong-ke.php";
$thongbao = "";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_type':
            if (isset($_POST['btn_type'])) {
                $tenloai = $_POST['typeName'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmucsp/add.php";
            break;

        case 'listds':
            $listdanhmuc = loadALL_danhmuc();
            include "danhmucsp/list.php";
            break; 

        case 'xoadanhmuc':
            if (isset($_GET['type_id']) && $_GET['type_id'] > 0) {
                $type_id = $_GET['type_id'];
                delete_danhmuc($type_id);
            }
            $listdanhmuc = loadALL_danhmuc(); 
            $thongbao = "Xóa thành công";
            include "danhmucsp/list.php"; 
            break;

        case 'updateDM':
            if (isset($_GET['type_id']) && $_GET['type_id'] > 0) {
                $danhmuc = loadOne_danhmuc($_GET['type_id']);
            } else {
                $danhmuc = null;
            }
            include "danhmucsp/update.php"; 
            break;

        case 'updatedanhmuc':
            if (isset($_POST['update_type'])) {
                    $tenloai = $_POST['typeName'];
                    $id = $_POST['id'];
                    update_danhmuc($tenloai, $id);
                    $thongbao = "Cập nhật thành công";
            }
            
            include "danhmucsp/update.php"; 
            break;


        // controller prduct
        case 'add_product':
            if (isset($_POST['btnAddProduct'])) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $date_add = $_POST['date_add'];
                $type_product = $_POST['type_product'];
                $special = isset($_POST['special']) ? $_POST['special'] : 0; 
        
                if (!empty($_FILES["image_pro"]["name"])) {
                    $fileName = $_FILES["image_pro"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($fileName);
                    $image_pro = $fileName;
                    if (move_uploaded_file($_FILES["image_pro"]["tmp_name"], $target_file)) {
                    }
                } else {
                    $image_pro = get_current_image($product_id);
                }  

                insert_sanpham($name, $price, $discount, $image_pro, $date_add, $description, $special, $type_product);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadALL_danhmuc(); 
            include "product/add.php";
            break;
        
        case 'list_product':
            if (isset($_POST['btnSearch'])) {
                $search = $_POST['search'];
                $type_product = $_POST['type_product'];
            } else {
                $search = '';
                $type_product = 0;
            }
            $listproduct = loadALL_sanpham_admin($search, $type_product);
            $listdanhmuc = loadALL_danhmuc();
            include "product/list.php";
            break;

            case 'deleteSP':
                if (isset($_GET['product_id']) && $_GET['product_id'] > 0) {
                    $idsp = $_GET['product_id'];
                    delete_sanpham($idsp);
                }
        
                $search = isset($search) ? $search : '';
                $type_product = isset($type_product) ? $type_product : 0;
            
                $listproduct = loadALL_sanpham_admin($search, $type_product);
                include "product/list.php";
                break;

        case 'updateSP':
            if (isset($_GET['product_id']) && $_GET['product_id'] > 0) {
                $sanpham = loadOne_sanpham($_GET['product_id']);
            } else {
                $sanpham = null;
            }
            $listdanhmuc = loadALL_danhmuc(); 
            include "product/update.php"; 
            break;
        
        case 'update_product':
            if (isset($_POST['btnUpdateProduct'])) {
                $product_id = $_POST['product_id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $date_add = $_POST['date_add'];
                $type_product = $_POST['type_product'];
                $special = isset($_POST['special']) ? $_POST['special'] : 0; 
        
                if (!empty($_FILES["image_pro"]["name"])) {
                    $fileName = $_FILES["image_pro"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($fileName);
                    $image_pro = $fileName;
                    if (move_uploaded_file($_FILES["image_pro"]["tmp_name"], $target_file)) {
                    }
                } else {
                    $image_pro = get_current_image($product_id);
                }   
        
                update_sanpham($product_id, $name, $price, $discount, $image_pro, $date_add, $description, $special, $type_product);
                $thongbao = "Cập nhật thành công";
            }
            include "product/update.php"; 
            break;

        case 'list-account':
            $listaccount = loadAll_account();
            include "taikhoan/list.php";
            break;

        case 'create-account':
            if(isset($_POST["btnAddAccount"])){
                $customer_id = $_POST["customer_id"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                $role = isset($_POST['role']) ? $_POST['role'] : 0;

                if (!empty($_FILES["image_user"]["name"])) {
                    $fileName = $_FILES["image_user"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($fileName);
                    $image_user = $fileName;
                    if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
                    }
                } else {
                    $image_user = get_current_image($customer_id);
                }   
                insert_account_admin($password, $username, $email, $phone, $image_user, $role, $address);
                $thongbao = "Thêm mới thành công";

            }
            $listaccount = loadAll_account();
            include "taikhoan/create.php";
            break;

        case 'updateAc':
            if (isset($_GET['customer_id']) && $_GET['customer_id'] > 0) {
                $Oneaccount = loadOne_account($_GET['customer_id']);
            } else {
                $Oneaccount = null;
            }
            $listaccount = loadAll_account();
            include "taikhoan/update.php";
            break;
        
        case 'update-account':
            if(isset($_POST["updateAccount"])){
                $customer_id = $_POST["customer_id"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                $role = isset($_POST['role']) ? $_POST['role'] : 0;
                if (!empty($_FILES["image_user"]["name"])) {
                    $fileName = $_FILES["image_user"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($fileName);
                    $image_user = $fileName;
                    if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
                    }
                } else {
                    $image_user = get_current_image_account($customer_id);
                }   
                update_account_admin($customer_id, $username, $email, $phone, $address, $image_user, $role);
                $thongbao = "Cập nhật thành công";
            }
            include "taikhoan/update.php";
            break;
            
        case 'deleteAc':
            if (isset($_GET['customer_id']) && $_GET['customer_id'] > 0) {
                $idaccount = $_GET['customer_id'];
                delete_account($idaccount);
            }
    
            $listaccount = loadAll_account();
            include "taikhoan/list.php";
            break;
        case 'comment':
            $listcomment = loadALL_comment();
            include "binhluan/list.php";
            break;
        case 'deleteCommetn':
            if (isset($_GET['comment_id']) && $_GET['comment_id'] > 0) {
                $idcommetn = $_GET['comment_id'];
                delete_comment($idcommetn);
            }
    
            $listcomment = loadALL_comment();
            include "binhluan/list.php";
            break;
           
        case "thongke":
            $statistics = getStatistics();
            include "thongke/thongke.php";
            break;
        case "bieudo":
            include "thongke/bieudo.php";
            break;
    } 
} else {
    include "trangchu/trangchu.php";
}
?>