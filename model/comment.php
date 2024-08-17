<?php
function insert_comment($content, $product_id, $customer_id, $comment_date) {
    $sql = "INSERT INTO `comment` (`content`, `product_id`, `customer_id`, `comment_date`) 
            VALUES ('$content', '$product_id', '$customer_id', '$comment_date');";
    pdo_execute($sql);
}

function loadALL_comment(){
    $sql = "SELECT * FROM comment ORDER BY comment_date DESC";
    $comment = pdo_query($sql);
    return $comment;
}

function loadALL_comment_product($product_id) {
    $sql = "SELECT
        comment.content,
        comment.comment_date,
        customer.username,
        customer.image_user
    FROM
        comment
    JOIN
        customer ON comment.customer_id = customer.customer_id
    WHERE
        comment.product_id = :product_id
    ORDER BY
        comment.comment_date DESC;";

    $comments = pdo_query($sql, ['product_id' => $product_id]);
    return $comments;
}

function delete_comment($comment_id) {
    $sql = "DELETE FROM comment WHERE `comment`.`comment_id` = $comment_id";
    pdo_execute($sql);
}

?>