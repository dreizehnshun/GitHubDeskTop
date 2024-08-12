<?php
require_once 'pdo.php';

function thong_ke_san_pham(){
    $sql = "SELECT COUNT(*) AS total_products FROM sanpham";
    return pdo_query($sql);
}
function thong_ke_thanh_vien(){
    $sql = "SELECT COUNT(*) AS total_users FROM user";
    return pdo_query($sql);
}
function thong_ke_danh_muc(){
    $sql = "SELECT COUNT(*) AS total_danhmuc FROM danhmuc";
    return pdo_query($sql);
}
function thong_ke_don_hang(){
    $sql = "SELECT COUNT(*) AS total_donhang FROM bill";
    return pdo_query($sql);
}
function thong_ke_binh_luan(){
    $sql = "SELECT COUNT(*) AS total_binhluan FROM binhluan";
    return pdo_query($sql);
}
function thong_ke_tin_tuc(){
    $sql = "SELECT COUNT(*) AS total_tintuc FROM tintuc";
    return pdo_query($sql);
}
