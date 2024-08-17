<?php
function insert_sanpham($name, $price, $discount, $image_pro, $date_add, $description , $special ,$type_product){
    $sql = "INSERT INTO `product` (`product_id`, `name`, `price`, `discount`, `image_pro`, `date_add`, `description`, `special`, `type_product`) 
    VALUES (NULL, '$name', '$price', '$discount', '$image_pro', '$date_add', '$description', '$special', '$type_product');";
    pdo_execute($sql);
}

function delete_sanpham($product_id) {
    $sql = "DELETE FROM product WHERE product_id = $product_id";
    pdo_execute($sql);
}

function loadALL_sanpham($search, $type_product, $limit, $offset) {
    $sql = "SELECT * FROM product WHERE 1";
    if ($search != "") {
        $sql .= " AND name LIKE '%" . $search . "%'";
    }
    if ($type_product > 0) {
        $sql .= " AND type_product = '" . $type_product . "'";
    }
    $sql .= " LIMIT $limit OFFSET $offset";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function count_sanpham($search, $type_product) {
    $sql = "SELECT COUNT(*) as total FROM product WHERE 1";
    if ($search != "") {
        $sql .= " AND name LIKE '%" . $search . "%'";
    }
    if ($type_product > 0) {
        $sql .= " AND type_product = '" . $type_product . "'";
    }
    $result = pdo_query_one($sql);
    return $result['total'];
}

function loadALL_sanpham_admin($search, $type_product) {
    $sql = "SELECT * FROM product WHERE 1";
    if ($search != "") {
        $sql .= " AND name LIKE '%" . $search . "%'";
    }
    if ($type_product > 0) {
        $sql .= " AND type_product = '" . $type_product . "'";
    }
    $sql .= " ORDER BY date_add DESC";
    $listproduct = pdo_query($sql);
    return $listproduct;
}


function loadALL_sanpham_special(){
    $sql = "SELECT * FROM product WHERE special = 1 ORDER BY product_id DESC LIMIT 0, 6";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadALL_sanpham_top10(){
    $sql = "SELECT * FROM product WHERE 1 ORDER BY views DESC LIMIT 0,10";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadALL_product(){
    $sql = "SELECT * FROM product";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadALL_sanpham_new(){
    $sql = "SELECT * FROM product WHERE 1 ORDER BY product_id DESC LIMIT 0,6";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadOne_sanpham($product_id){
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    $product = pdo_query_one($sql);
    return $product;
}

function loadOne_name_type($type_product){
    $sql = "SELECT * FROM type_product WHERE type_id = $type_product";
    $type = pdo_query_one($sql);
    extract($type);
    return $type_name;
}

function update_sanpham($product_id, $name, $price, $discount, $image_pro, $date_add, $description , $special ,$type_product){
    $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price', `discount` = '$discount', `image_pro` = '$image_pro', `date_add` = '$date_add', `description` = '$description', `special` = '$special', `type_product` = '$type_product' WHERE `product`.`product_id` = $product_id;";
    pdo_execute($sql);
}

function get_current_image($product_id) {
    $sql = "SELECT `image_pro` FROM `product` WHERE `product_id` = $product_id";
    $result = pdo_query_one($sql);
    return $result['image_pro'];
}

function getProductByTypeID($type_product){
    $sql = "SELECT * FROM product WHERE 1 ORDER BY type_product = $type_product DESC LIMIT 0,8";
    $productID = pdo_query($sql);
    return $productID;
}

function getTypeIDByProduct($type_id = null) {
    if ($type_id) {
        $sql = "SELECT * FROM product WHERE type_product = ? ORDER BY product_id ASC";
        $productList = pdo_query($sql, $type_id);
    } else {
        $sql = "SELECT * FROM product ORDER BY product_id ASC";
        $productList = pdo_query($sql);
    }
    return $productList;
}

function update_views($product_id) {
    $sql = "UPDATE `product` SET `views` = views + 1 WHERE `product`.`product_id` = ?";
    pdo_execute($sql, $product_id);
}


?>