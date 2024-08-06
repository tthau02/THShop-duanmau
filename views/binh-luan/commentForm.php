<?php
    include "../../model/pdo.php";
    include "../../model/comment.php";
    session_start();

    if(isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        $listComment = loadALL_comment_product($product_id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bình luận</title>
</head>
<body>
    <h2>Bình Luận</h2>
    <?php foreach ($listComment as $comment) { ?>
        <div class="comment">
            <div class="comment-avatar">
                <img src="upload/IMG_20240427_210051_101.jpg" alt="User Avatar">
            </div>
            <div class="comment-content">
                <h4 class="comment-author" style="font-size: 15px; color: blue;"><?=($comment['username']) ?></h4>
                <p class="comment-text"><?=($comment["content"]) ?></p>
                <div class="comment-meta">
                    <span class="comment-date"><?=($comment["comment_date"]) ?></span>
                    <span class="comment-reply"><a href="#">Trả lời</a></span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){ ?>
        <div class="comment-form">
            <h4>Để lại một bình luận</h4>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="product_id" value="<?= $product_id ?>">
                <textarea name="content" placeholder="Viết bình luận của bạn ở đây..."></textarea>
                <button type="submit" name="btnComment">Gửi</button>
            </form>
        </div>
    <?php } else { ?>
        <div class="comment-section">
            <h4>Đăng nhập để bình luận</h4>
        </div>
    <?php } ?>

    <?php
        if(isset($_POST["btnComment"])){
            $content = $_POST["content"];
            $product_id = $_POST["product_id"];
            $customer_id = $_SESSION["user"]["customer_id"];
            $comment_date = date('Y-m-d H:i:s');
            insert_comment($content, $product_id, $customer_id, $comment_date);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    ?>
</body>
</html>
