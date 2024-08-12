<?php
require_once 'pdo.php';


function bill_insert_id($madh,$iduser,$nguoidat_ten,$nguoidat_email,$nguoidat_tel,$nguoidat_diachi,$nguoinhan_ten,$nguoinhan_diachi,$nguoinhan_tel,$total,$ship,$voucher,$tongthanhtoan,$pttt){
$sql = "INSERT INTO bill(madh,iduser,nguoidat_ten,nguoidat_email,nguoidat_tel,nguoidat_diachi,nguoinhan_ten,nguoinhan_diachi,nguoinhan_tel,total,ship,voucher,tongthanhtoan,pttt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
 return pdo_execute_id($sql,$madh,$iduser,$nguoidat_ten,$nguoidat_email,$nguoidat_tel,$nguoidat_diachi,$nguoinhan_ten,$nguoinhan_diachi,$nguoinhan_tel,$total,$ship,$voucher,$tongthanhtoan,$pttt);
}


function order_all(){
    $sql = "SELECT * FROM bill ORDER BY id DESC";
    return pdo_query($sql);
}

function update_donhang($id, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $ship, $voucher, $tongthanhtoan, $pttt) {
    $updateQuery = "UPDATE bill SET 
        nguoidat_ten=?, 
        nguoidat_email=?, 
        nguoidat_tel=?, 
        nguoidat_diachi=?, 
        nguoinhan_ten=?, 
        nguoinhan_diachi=?, 
        nguoinhan_tel=?, 
        ship=?, 
        voucher=?, 
        tongthanhtoan=?, 
        pttt=? 
        WHERE id=?";
    
    // // Thông tin debug
    // echo "Executing query: $updateQuery with parameters: ";
    // var_dump($nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $ship, $voucher, $tongthanhtoan, $pttt, $id);
    
    try {
        pdo_execute($updateQuery, 
            $nguoidat_ten, 
            $nguoidat_email, 
            $nguoidat_tel, 
            $nguoidat_diachi, 
            $nguoinhan_ten, 
            $nguoinhan_diachi, 
            $nguoinhan_tel, 
            $ship, 
            $voucher, 
            $tongthanhtoan, 
            $pttt, 
            $id
        );
        echo "Cập nhật thành công!";
    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
    }
    
    return true;
}