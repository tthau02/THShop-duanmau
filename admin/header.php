<?php
    if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
        $account = $_SESSION['user'];
    } else {
        header('Location: dangnhap.php');
        exit();
    }  
   $img_path = '../upload/';
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
    <header class="pb-0 pt-0">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center justify-content-center p-2 ms-2" >
                    <div class="logo">
                        <svg viewBox="0 0 64 64">
                            <rect x="16" y="8" width="32" height="48" rx="4" ry="4" fill="#4CAF50" stroke="#333" stroke-width="2"/>
                            <circle cx="32" cy="46" r="2" fill="#333"/>
                            <rect x="22" y="12" width="20" height="28" rx="2" ry="2" fill="#FFF"/>
                        </svg>
                        <a href="../index.php" style="text-decoration: none;"> <text>THShop</text></a>
                    </div>
                </div>
            
                <div class="d-flex justify-content-between align-items-center pe-2">
                    <div class="account">
                    <?php
                        if (isset($account) && is_array($account)) {
                            extract($account);
                            ?>
                            <div class="account-image">
                                <img src="<?= $img_path . $image_user ?>" alt="User Image">
                            </div>
                            <div class="account-name">
                                <h3><?= $username ?></h3>
                            </div>
                            <?php
                        } else {
                            echo "<p>Thông tin tài khoản không tồn tại.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- End header bottom -->
        </div>
    </header> 
    