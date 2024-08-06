<main class="container">
            <div class="account-info">
                    <h3>Cập nhật tài khoản</h3>
                    <div class="account-main" style="margin-top: 30px;">
                        <?php
                        if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                            extract($_SESSION["user"]);
                        }
                        ?>
                        <form action="" method="post" class="updateAccount" enctype="multipart/form-data">
                            <label for="username">Họ và tên:</label>
                            <input type="text" name="nameUpdate" value="<?= $username ?>">
                            <br>
                            <label for="email">Địa chỉ email:</label>
                            <input type="text" name="emailUpdate" value="<?= $email ?>">
                            <br>
                            <label for="address">Địa chỉ:</label>
                            <input type="text" name="address" value="<?= $address ?>">
                            <br>
                            <label for="phone">Số điện thoại:</label>
                            <input type="text" name="phoneUpdate" value="<?= $phone ?>">
                            <br>
                            <label for="image_user">Ảnh đại diện:</label>
                            <input type="file" name="image_user">
                            <br><br>
                            <input type="hidden" name="customer_id" value="<?= $customer_id ?>">
                            <input type="submit" name="updateAccountBtn" value="Cập Nhật" style="padding: 5px  5px;font-size: 17px;color: #fff;background-color: #d25050;width: 150px;border: none;outline: none;border-radius: 10px;">
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