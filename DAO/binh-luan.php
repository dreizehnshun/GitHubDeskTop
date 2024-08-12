<?php
require_once 'pdo.php';

function binh_luan_insert($iduser, $idsp, $noidung){
    $sql = "INSERT INTO binhluan(iduser, idsp, noidung) VALUES (?, ?, ?)";
    pdo_execute($sql, $iduser, $idsp, $noidung);
}

function binh_luan_hidden($id){
    $sql = "UPDATE binhluan SET status= 0 WHERE id=?";
    pdo_execute($sql, $id);
}
function binh_luan_hien($id){
    $sql = "UPDATE binhluan SET status= 1 WHERE id=?";
    pdo_execute($sql, $id);
}

function binh_luan_delete($id){
    $sql = "DELETE FROM binh_luan WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function binh_luan_select_all(){
    $sql = "SELECT * FROM binhluan ORDER BY ngaybl DESC";
    return pdo_query($sql);
}

function binh_luan_select_by_id($id){
    $sql = "SELECT * FROM binhluan WHERE id=?";
    return pdo_query_one($sql, $id);
}

function binh_luan_exist($id){
    $sql = "SELECT count(*) FROM binh_luan WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

function binh_luan_select_by_sanpham($idsp){
    $sql = "SELECT * 
            FROM binhluan bl 
            JOIN user on bl.iduser = user.id
            WHERE bl.idsp = ? AND bl.status = 1
            ORDER BY bl.ngaybl DESC";
    return pdo_query($sql, $idsp);
}