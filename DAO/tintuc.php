<?php
function tin_tuc_select_all(){
    $sql = "SELECT * FROM tintuc ORDER BY ngaydang DESC";
    return pdo_query($sql);
}
function tin_tuc_select_4(){
    $sql = "SELECT * FROM tintuc ORDER BY ngaydang DESC LIMIT 4";
    return pdo_query($sql);
}
function tin_tuc_select_by_id($id){
    $sql = "SELECT * FROM tintuc where id=?";
    return pdo_query_one($sql, $id);
}
function update_tin_tuc($name, $img, $mota,$noidung,$id){
    if($img!=""){
        $sql = "UPDATE tintuc SET name=?,img=?,mota=?,noidung=? WHERE id=?";
        pdo_execute($sql, $name, $img, $mota, $noidung, $id);
       }else{
           $sql = "UPDATE tintuc SET name=?,mota=?,noidung=? WHERE id=?";
           pdo_execute($sql, $name, $mota, $noidung, $id);
       }
}
function del_tin_tuc($id){
    $sql = "DELETE FROM tintuc  WHERE id=?";
       pdo_execute($sql, $id);
}
function tin_tuc_insert($name, $img, $mota,$noidung){
    $sql = "INSERT INTO tintuc(name, img, mota, noidung) VALUES (?,?,?,?)";
    pdo_execute($sql, $name, $img, $mota,$noidung);
}
function tin_tuc_select_4_except_id($id) {
    $sql = "SELECT * FROM tintuc WHERE id !=? ORDER BY ngaydang DESC LIMIT 4";
    return pdo_query($sql,$id);
}