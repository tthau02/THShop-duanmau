<?php

    function insert_account($password, $username, $email, $phone){
        $sql = "INSERT INTO `customer` (`password`, `username`, `email`, `phone`) VALUES ('$password', '$username', '$email', '$phone');";
        pdo_execute($sql);
    }

    function insert_account_admin($password, $username, $email, $phone, $image_user, $role, $address){
        $sql = "INSERT INTO `customer` (`password`, `username`, `email`, `phone`, `image_user`, `role`, `address` ) 
        VALUES ('$password', '$username', '$email', '$phone', '$image_user', '$role', '$address');";
        pdo_execute($sql);
    }

    function check_account($email, $password){
        $sql = "SELECT * FROM customer WHERE `email` = '$email' AND `password` = '$password'";
        $user = pdo_query_one($sql);
        return $user;
    }

    function check_email($email){
        $sql = "SELECT * FROM customer WHERE `email` = '$email'";
        $user = pdo_query_one($sql);
        return $user;
    }

    function loadOne_account($customer_id){
        $sql = "SELECT * FROM customer WHERE customer_id = $customer_id";
        $account = pdo_query_one($sql);
        return $account;
    }

    function get_current_image_account($customer_id) {
        $sql = "SELECT image_user FROM customer WHERE customer_id = ?";
        $result = pdo_query_one($sql, $customer_id);
        return $result ? $result['image_user'] : '';
    }

    function update_account($customer_id, $username, $email, $phone, $address, $image_user) {
        $sql = "UPDATE customer SET 
                username = ?, 
                email = ?, 
                phone = ?, 
                address = ?, 
                image_user = ? 
                WHERE customer_id = ?";
        pdo_execute($sql, $username, $email, $phone, $address, $image_user, $customer_id);
    }

    function update_account_admin($customer_id, $username, $email, $phone, $address, $image_user, $role) {
        $sql = "UPDATE customer SET 
                username = ?, 
                email = ?, 
                phone = ?, 
                address = ?, 
                image_user = ?, 
                role = ? 
                WHERE customer_id = ?";
        pdo_execute($sql, $username, $email, $phone, $address, $image_user, $role, $customer_id);
    }

    function loadAll_account(){
        $sql = "SELECT * FROM customer";
        $listaccount = pdo_query($sql);
        return $listaccount;
    }
    

    function delete_account($customer_id) {
        $sql = "DELETE FROM customer WHERE `customer`.`customer_id` = $customer_id";
        pdo_execute($sql);
    }

    function change_password($customer_id, $password){
        $sql = "UPDATE `customer` SET `password` = '$password' WHERE `customer`.`customer_id` = $customer_id;";
        pdo_execute($sql);
    }

?>