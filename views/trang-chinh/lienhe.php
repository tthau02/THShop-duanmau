<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content/css/lienhe.css">
    <!-- <link rel="stylesheet" href="content/css/styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <div class="container">
            <section class="slider">
                <div class="list">
                    <div class="item">
                        <img src="content/img/banner.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="content/img/banner2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="content/img/banner3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="content/img/banner4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="content/img/banner5.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="content/img/bannrfpt.png" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button id="prev"><</button>
                    <button id="next">></button>
                </div>

                <div class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </div>
            </section>
        </div>

        <main class="container">
                <section class="content-form">
                    <div class="contact1">
                        <h4><i class="fa fa-handshake-o"></i>Liên hệ với chúng tôi:</h4><br>
                        
                      <form action="" onsubmit="return check()">
                        <label for="lname">Họ và tên:</label>
                        <input type="text" id="hoten" name="hoten" placeholder="Họ và tên...">
                        <br>
        
                        <label for="lphone">Email:</label>
                        <input type="text" id="email" name="email" placeholder="Email...">
                        <br>
        
                        <label for="">Giới Tính</label>
                        <br>
                        <div class="checkbox">
                        <input type="radio" name="gender" id="nam">
                        <label for="male">Nam</label>
                        <input type="radio" name="gender" id="nu">
                        <label for="male">Nữ</label>
                        </div>
        
                        <br>
                        <label for="country">Quốc Tịch:</label>
                        <select id="country" name="country">
                          <option value="vietnam">Chọn quốc tịch</option>
                          <option value="vietnam">Việt Nam</option>
                          <option value="canada">Canada</option>
                          <option value="usa">USA</option>
                          <option value="singapore">singapore</option>
                          <option value="Trung Quốc">Trung Quốc</option>
                          <option value="Thái Lan">Thái Lan</option>
                        </select>
                        <br>
        
                        <label for="note" place>Ý kiến của bạn:</label><br><br>
                          <textarea name="message" rows="10" cols="125" placeholder="Nhập nội dung..."></textarea>
                          <br><br>
                        <input type="submit" value="Đăng Ký">
                      </form>
                    </div>
                    <div class="contact2">
                        <h4><i class="fa fa-location-arrow"></i>Bản đồ đường đi:</h4>
                        
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8889.025346085005!2d106.00178429041566!3d20.490857325466404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135dafc1a549713%3A0xbbea5849d1d7d5ef!2zVHLGsOG7nW5nIFB0dGggQSBCw6xuaCBM4bulYw!5e0!3m2!1sen!2s!4v1706431679204!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <script src="content/js/main.js"></script>
</body>
</html>
