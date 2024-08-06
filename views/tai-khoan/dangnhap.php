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
                        <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <a href="" style="font-size: 15px;">Quên mật khẩu?</a>
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
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var errorMessages = [];

        // Validate Username
        if (username === '') {
            errorMessages.push('Username không được để trống.');
        } else if (username.length < 3 || username.length > 30) {
            errorMessages.push('Độ dài Username phải nằm trong khoảng 3 đến 30 ký tự.');
        }

        // Validate Password
        if (password === '') {
            errorMessages.push('Password không được để trống.');
        } else if (password.length < 6 || password.length > 10) {
            errorMessages.push('Độ dài Password phải nằm trong khoảng 6 đến 10 ký tự.');
        }

        // Nếu có lỗi, hiển thị tất cả các lỗi trong alert và trả về false để ngăn form được submit
        if (errorMessages.length > 0) {
            alert(errorMessages.join('\n'));
            return false;
        }

        return true;
    }
</script>
