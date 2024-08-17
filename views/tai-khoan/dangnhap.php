    <main class="container">
        <div class="dangky">
            <div class="form-dangky">
                <h4 class="option">
                    Đăng nhập với
                </h4>
                <div class="sign-up">
                    <form action="" method="post" class="form-sign-up" onsubmit="return validateForm()">
                        <div class="social-icons">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="input-field">
                            <input type="text" id="email" name="email" placeholder="Tên đăng nhập">
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <a href="?act=forgot-pass" style="font-size: 15px;">Quên mật khẩu?</a>
                        <div class="input-field">
                            <input type="submit" value="Đăng Nhập" name="btn-login">
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

    <script>
        function validateForm() {
            var email = document.getElementById('email').value.trim();
            var password = document.getElementById('password').value.trim();
            var errorMessages = [];

            if (email === '') {
                errorMessages.push('Email không được để trống.');
            } else if (email.length < 3 || email.length > 30) {
                errorMessages.push('Độ dài email phải nằm trong khoảng 3 đến 30 ký tự.');
            } else {
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailPattern.test(email)) {
                    errorMessages.push('Vui lòng nhập địa chỉ email hợp lệ.');
                }
            }

            if (password === '') {
                errorMessages.push('Mật khẩu không được để trống.');
            } else if (password.length < 6 || password.length > 10) {
                errorMessages.push('Độ dài mật khẩu phải nằm trong khoảng 6 đến 10 ký tự.');
            }

            if (errorMessages.length > 0) {
                alert(errorMessages.join('\n'));
                return false;
            }
        }
    </script>