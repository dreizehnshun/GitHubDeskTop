<?php
if(is_array($user)&&(count($user)>0)){
    extract($user);
    $idupdate=$id;
}
?>
<div class="main-content">
    <h3 class="title-page">
        Cập nhật user
    </h3>
    <form class="addPro" action="index.php?pg=updateuser" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Tên Đăng nhập:</label>
            <input type="text" class="form-control" name="username" value ="<?=($username!="")?$username:"";?>" id="username" placeholder="Nhập tên đăng nhập">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value ="<?=($password!="")?$password:"";?>" id="password" placeholder="Nhập mật khẩu">
        </div>

        <div class="form-group">
            <label for="ten">Tên:</label>
            <input type="text" class="form-control" name="ten" value ="<?=($ten!="")?$ten:"";?>" id="ten" placeholder="Nhập tên">
        </div>

        <div class="form-group">
            <label for="diachi">Địa chỉ:</label>
            <input type="text" class="form-control" name="diachi" value ="<?=($diachi!="")?$diachi:"";?>" id="diachi" placeholder="Nhập địa chỉ">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value ="<?=($email!="")?$email:"";?>" id="email" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label for="dienthoai">Số điện thoại</label>
            <input type="text" class="form-control" name="dienthoai" value ="<?=($dienthoai!="")?$dienthoai:"";?>" id="dienthoai" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" name="role" value ="<?=($role!="")?$role:"";?>" id="role" placeholder="Nhập role">
        </div>
        
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$idupdate?>">
            <button type="submit" name="useredit" class="btn btn-primary">Cập nhật người dùng</button>
        </div>
    </form>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>