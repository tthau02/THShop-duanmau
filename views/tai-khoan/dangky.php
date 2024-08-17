<main class="container">
        <div class="dangky">
            <div class="form-dangky">
                <h4 class="option">
                    Đăng ký với
                </h4>
                <div class="sign-up">
                    <form id="registerForm" action="?act=dangky" method="POST" class="form-sign-up">
                        <div class="social-icons">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="input-field">
                            <input type="text" id="username" name="username" placeholder="Họ và tên">
                        </div>
                        <div class="input-field" id="emailField">
                            <input type="text" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-field" id="phoneField">
                            <input type="text" id="phone" name="phone" placeholder="Số điện thoại">
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="input-field">
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="input-field">
                            <input type="submit" value="Đăng ký" name="btn-register">
                        </div>
                        <div class="login-question">
                            <p>Bạn đã có tài khoản?</p>
                            <a href="?act=dangnhap" class="link-login">Đăng nhập ngay</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var username = document.getElementById('username').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('phone').value.trim();
            var password = document.getElementById('password').value.trim();
            var confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (username === "" || email === "" || phone === "" || password === "" || confirmPassword === "") {
                alert("Vui lòng điền đầy đủ thông tin.");
                event.preventDefault();
                return;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Email không hợp lệ.");
                event.preventDefault();
                return;
            }

            var phonePattern = /^\d{10,11}$/;
            if (!phonePattern.test(phone)) {
                alert("Số điện thoại không hợp lệ.");
                event.preventDefault();
                return;
            }

            if (password.length < 6) {
                alert("Mật khẩu phải có ít nhất 6 ký tự.");
                event.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                alert("Mật khẩu và xác nhận mật khẩu không khớp.");
                event.preventDefault();
                return;
            }
        });
    </script>