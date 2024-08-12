<?php
require_once 'pdo.php';

function danhmuc_insert($ten_danhmuc){
    $sql = "INSERT INTO danhmuc(name) VALUES(?)";
    pdo_execute($sql, $ten_danhmuc);
}

function deldm($id){
    $sql = "DELETE FROM danhmuc WHERE id=".$id;
   if(is_array($id)){
        foreach ($id as $dm) {
            pdo_execute($sql, $dm);
       }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function danhmuc_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC"; //ORDER BY id DESC LÀ DỮ LIỆU MỚI NHẬP LÊN ĐẦU
    return pdo_query($sql);
}

function showdm($dsdm){
    $html_dm='';
    foreach ($dsdm as $dm){
        extract($dm);
        $link='index.php?pg=sanpham$iddm'.$id;
        $html_dm.='<a href="'.$link.'">'.$name.'</a>';
    }
    return $html_dm;
}
function get_name_dm($id){
    $sql = "SELECT name from danhmuc WHERE id=".$id;
    $kq=pdo_query_one($sql);
    return $kq["name"];
}
//admin
function showdm_admin($dsdm,$iddm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        if($id==$iddm){ 
            $se="selected";
        }else{
             $se="";
        }
        $link='index.php?pg=sanpham$iddm'.$id;
        $html_dm.='<option value="'.$id.'" '.$se.' >'.$name.'</option>';
    }
    return $html_dm;
}
function showdm_admin1($dsdm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=sanpham$iddm='.$id;
        $html_dm.='<option value="'.$id.'">'.$name.'</option>';
    }
    return $html_dm;
}

function updatedm($id,$name){
    $conn=pdo_get_connection();
    $sql = "UPDATE danhmuc SET name='".$name."' WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getonedm($id){
    $conn=pdo_get_connection();
    $stmt =$conn->prepare("SELECT * FROM danhmuc WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}