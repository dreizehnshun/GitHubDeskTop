<?php
    if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);

        $usetinfo=get_user($id);
        extract($usetinfo);
    }

?>

<style>
.form-container {
  max-width: 400px;
  margin: 100px 40% 100px;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-container h3 {
  text-align: center;
  margin-bottom: 20px;
}

.form-container .input{
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.form-container input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}


</style>




<div class="form-container">

   <form action="index.php?pg=updateuser" method="post">
      <h3>Tài khoản của bạn</h3>
        
        <div class="input">Tên đăng nhập: <?=$username?></div> 
        <div class="input">Họ và tên:<?=$ten?></div> 
        <div class="input">Email:<?=$email?></div> 
        <div class="input">Địa chỉ:<?=$diachi?></div> 
        <div class="input">Số điện thoại:<?=$dienthoai?></div> 

     
   </form>

</div> 