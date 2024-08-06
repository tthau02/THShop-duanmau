<?php
function insert_danhmuc($typeName){
    $sql = "INSERT INTO type_product (type_name) VALUES (?)";
    pdo_execute($sql, $typeName);
}

function delete_danhmuc($type_id) {
    $sql = "DELETE FROM type_product WHERE type_id = $type_id";
    pdo_execute($sql);
}

function loadALL_danhmuc(){
    $sql = "SELECT * FROM type_product";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadOne_danhmuc($type_id){
    $sql = "SELECT * FROM type_product WHERE type_id = ?";
    $danhmuc = pdo_query_one($sql, $type_id);
    return $danhmuc;
}

function update_danhmuc($tenloai, $id){
    $sql = "UPDATE type_product SET type_name = ? WHERE type_id = ?";
    pdo_execute($sql, $tenloai, $id);
}
?>