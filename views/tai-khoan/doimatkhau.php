<main class="container">
            <div class="account-info">
                    <h3>Cập nhật tài khoản</h3>
                    <div class="account-main">
                        <?php
                        if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                            extract($_SESSION["user"]);
                        }
                        ?>
                        <form action="" method="post" class="changePass" enctype="multipart/form-data">
                            <label for="username">Mật khẩu cũ</label>
                            <input type="text" name="password" value="<?= $password ?>">
                            <br>
                            <label for="email">Mật khẩu mới</label>
                            <input type="password" name="passnew">
                            <br>
                            <label for="address">Nhập lại mật khẩu mới</label>
                            <input type="password" name="repassnew">
                            <br>
                            
                            <input type="hidden" name="customer_id" value="<?= $customer_id ?>">
                            <input type="submit" name="changePassBtn" value="Xác nhận">
                        </form>
                        <div class="tinhnangtaikhoan">
                            <a href="" id="username"><i class="fa-solid fa-user-check"></i><?=$username?></a>
                            <div class="img-user">
                                <img src="<?=$img_path . $image_user?>" alt="">
                            </div>
                            <div class="tinhnang">
                                <a href="?act=change_pass"><i class="fa-solid fa-caret-right"></i>Đổi mật khẩu</a>
                                <a href="?act=update_account"><i class="fa-solid fa-caret-right"></i>Cập nhật tài khoản</a>
                                <?php
                                    if(isset($_SESSION["user"])){
                                       extract($_SESSION["user"]);
                                        if($role === 1){
                                            ?>
                                                <a href="admin/index.php"><i class="fa-solid fa-caret-right"></i>Quản trị website</a>
                                            <?php
                                        }
                                    }   
                                ?>
                                <a href="?act=dangxuat"><i class="fa-solid fa-caret-right"></i>Đăng Xuất</a>
                            </div>
                        </div>
                    </div>
            </div>
        </main>