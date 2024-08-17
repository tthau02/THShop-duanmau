<main class="container">
    <div class="dangky">
        <div class="form-dangky">
            <h4 class="option">
                Quên mật khẩu
            </h4>
            <div class="sign-up">
                <form action="?act=forgot-pass" method="post" class="form-sign-up">
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <div class="input-field">
                        <input type="text" id="email" name="email" placeholder="Nhập email ">
                    </div>
                    <div style="color: red; padding: 10px 10px;">
                        <?php
                            if (isset($thongbao) && $thongbao !== "") {
                                echo $thongbao;
                            }
                        ?>
                    </div>
                    <a href="?act=dangnhap" style="font-size: 15px;">Đăng nhập</a>
                    <div class="input-field">
                        <input type="submit" value="Gửi" name="btn-forgot">
                    </div>
                    <div class="login-question">    
                        <p>Bạn chưa có tài khoản?</p>
                        <a href="?act=dangky" class="link-login">Đăng ký ngay</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
