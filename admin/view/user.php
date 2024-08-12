<div class="main-content">
                <h3 class="title-page">
                    Thành viên
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=user_add" class="btn btn-primary mb-2">Thêm thành viên</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Role</th> 
                        </tr>
                    </thead>
                    <?php
 if(isset($kq)&&(count($kq)>1)){
    $i=1;
foreach ($kq as $user) {
    echo '<tr>
    <td>'.$i.'</td>
    <td>'.$user['username'].'</td>
    <td>'.$user['password'].'</td>
    <td>'.$user['ten'].'</td>
    <td>'.$user['diachi'].'</td>
    <td>'.$user['email'].'</td>
    <td>'.$user['dienthoai'].'</td>
    <td>'.$user['role'].'</td>
    

    <td>
        <a href="index.php?pg=useredit&id='.$user['id'].'" class="btn btn-warning"><i
                class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="index.php?pg=deluser&id='.$user['id'].'" class="btn btn-danger"><i
                class="fa-solid fa-trash"></i> Xóa</a>   
    </td>
    </tr>';
    $i++;
}
 }
?>                
                </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>