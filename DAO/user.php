<?php
// require_once 'pdo.php';

function user_insert($username, $password,$ten,$diachi ,$email , $dienthoai){
    $sql = "INSERT INTO user(username, password,ten, diachi, dienthoai, email) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $username, $password,$ten,$diachi ,$email , $dienthoai);
}

function user_insert_id($username, $password,$ten,$diachi, $dienthoai, $email){
    $sql = "INSERT INTO user(username, password,ten, diachi, dienthoai, email) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute_id($sql,$username, $password,$ten, $diachi, $dienthoai, $email);
    
}

 function checkuser($username,$password){
    $sql = "Select * from user where username=? and password=?";
    return pdo_query_one($sql,$username,$password);
    
    
 }
 function get_user($id){
    $sql = "Select * from user where id=? ";
    return pdo_query_one($sql,$id);
    
    
 }


function user_update($username, $ten, $password, $email, $diachi, $dienthoai,$role, $id){
    $sql = "UPDATE user SET username=?,ten=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql, $username, $ten, $password, $email, $diachi, $dienthoai, $role,$id);
}

function deluser($id){
    $sql = "DELETE FROM user  WHERE id=?";

       pdo_execute($sql, $id);
   }

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
