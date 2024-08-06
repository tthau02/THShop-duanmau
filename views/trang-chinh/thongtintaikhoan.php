<main class="container">
            <div class="account-info">
                <h3>Tài khoản của bạn</h3>
                <div class="account-main">
                    <div class="thongtintaikhoan">
                        <?php
                        if (isset($account) && is_array($account)) {
                            extract($account);
                        ?>
                            <p class="user">Họ và tên: <?= $username ?></p>
                            <p>Email: <?= $email ?></p>
                            <p>Số điện thoại: <?= $phone ?></p>
                            <p>Ngày Sinh: </p>
                            <p>Địa chỉ: <?= $address ?></p>
                        <?php
                        } else {
                            echo "<p>Không tìm thấy thông tin tài khoản.</p>";
                        }
                        ?>
                    </div>
               
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