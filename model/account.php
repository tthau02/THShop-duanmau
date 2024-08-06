<?php

    function insert_account($password, $username, $email, $phone){
        $sql = "INSERT INTO `customer` (`password`, `username`, `email`, `phone`) VALUES ('$password', '$username', '$email', '$phone');";
        pdo_execute($sql);
    }

    function check_account($username, $password){
        $sql = "SELECT * FROM customer WHERE `username` = '$username' AND `password` = '$password'";
        $user = pdo_query_one($sql);
        return $user;
    }

    function loadOne_account($customer_id){
        $sql = "SELECT * FROM customer WHERE customer_id = $customer_id";
        $account = pdo_query_one($sql);
        return $account;
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