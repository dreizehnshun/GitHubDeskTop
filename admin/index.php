<?php
   include "../DAO/global.php";
   include "../DAO/pdo.php";
   include "../DAO/danhmuc.php";
   include "../DAO/sanpham.php";
   include "../DAO/user.php";
   include "../DAO/donhang.php";
   include "./VIEW/header.php";
   if(isset($_GET['pg'])){
        $pg=$_GET['pg'];
    switch ($pg) {
        case 'sanphamlist':
            if(isset($_POST['timkiem'])){
                $kyw=$_POST['kyw'];
             }else{
                $kyw="";
             }
             if(!isset($_GET['page'])){
                $page=1;
             }else{
                $page=$_GET['page'];
             }
             $soluongsp=10;
 
             $dssp=get_dssp_admin($kyw,$page,$soluongsp);
             $tongsosp=get_all_product_admin();
             $hienthisotrang=hien_thi_so_trang($tongsosp,$soluongsp);
            include "view/sanphamlist.php";
            break;
        case 'updateproduct':
            // kiểm tra và lấy dữ liệu
            if(isset($_POST['updateproduct'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $iddm=$_POST['iddm'];
            $id=$_POST['id'];

            $img=$_FILES['img']['name'];
            if($img!=""){

            //upload hình ảnh
            $target_file=IMG_PATH_ADMIN.$img;
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            }else{
                $img="";
            }
            //insert into
            sanpham_update($name, $img, $price, $iddm,$id);
            }
            // show ds sp
            if(isset($_POST['timkiem'])){
                $kyw=$_POST['kyw'];
                }else{
                $kyw="";
                }
                if(!isset($_GET['page'])){
                $page=1;
                }else{
                $page=$_GET['page'];
                }
                $soluongsp=10;
    
                $dssp=get_dssp_admin($kyw,$page,$soluongsp);
                $tongsosp=get_all_product_admin();
                $hienthisotrang=hien_thi_so_trang($tongsosp,$soluongsp);
            include "view/sanphamlist.php";
            break;
        case 'sanphamadd':
            $danhmuclist=danhmuc_all();
            include "view/sanphamadd.php";
            break;
            case 'sanphamupdate':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $sp=get_sanphamchitiet($id);

                }
                //trở về trang dssp
                $danhmuclist=danhmuc_all();
                include "view/sanphamupdate.php";
                break;
        case 'delproduct':
            if(isset($_POST['timkiem'])){
                $kyw=$_POST['kyw'];
                }else{
                $kyw="";
                }
                if(!isset($_GET['page'])){
                $page=1;
                }else{
                $page=$_GET['page'];
                }
                $soluongsp=10;
    
                $dssp=get_dssp_admin($kyw,$page,$soluongsp);
                $tongsosp=get_all_product_admin();
                $hienthisotrang=hien_thi_so_trang($tongsosp,$soluongsp);
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $img=IMG_PATH_ADMIN.get_img($id);
                if(is_file($img)){
                    
                    unlink($img);
                    echo "<h3>Xóa sản phẩm thành công !!! </h3>";
                }
                try {
                    sanpham_delete($id);
                } catch (\Throwable $th) {
                    //throw $th;
                    echo "<h3 style='color:red;text-align:center'>Sản phẩm đã có trong giỏ hàng! Không được quyền xóa!</h3>";
                }     
            }
            //trở về trang dssp
            include "view/sanphamlist.php";
            break;
        case 'addproduct':
            if(isset($_POST['addproduct'])){
                //lấy dữ liệu về
                $name=$_POST['name'];
                $price=$_POST['price'];
                $iddm=$_POST['iddm'];
                $img=$_FILES['img']['name'];
                //insert into
                sanpham_insert($name, $img, $price, $iddm);
                //upload hình ảnh
                $target_file=IMG_PATH_ADMIN.$img;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                // trở về tràn dssp
                if(isset($_POST['timkiem'])){
                    $kyw=$_POST['kyw'];
                 }else{
                    $kyw="";
                 }
                 if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                 $soluongsp=10;
     
                 $dssp=get_dssp_admin($kyw,$page,$soluongsp);
                 $tongsosp=get_all_product_admin();
                 $hienthisotrang=hien_thi_so_trang($tongsosp,$soluongsp);
                include "view/sanphamlist.php";
            }else{
                $danhmuclist=danhmuc_all();
                include "view/sanphamadd.php";
            }
            break;
        case 'order':
            $kq=order_all();
            include "view/order.php";
            break;
        case 'danhmuc':
            $kq=danhmuc_all();
            include "view/danhmuc.php";
            break;
        case 'danhmuc_add':
            if(isset($_POST['btnadd'])){
                $name=$_POST['name'];
                danhmuc_insert($name);
                $tb="Bạn đã thêm thành công!";
            }
            include "view/danhmuc_add.php";
            break;
        case 'deldm':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                deldm($id);
            }
            $kq=danhmuc_all();
            include "view/danhmuc.php";
            break;
        case 'updatedmform':
            //lấy 1 RECORD  đúng với id truyền vào
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $kqone=getonedm($id);
                $kq=danhmuc_all();
                include "view/updatedmform.php";
                break;
            }if(isset($_POST['id'])&&($_POST['id']>0)){
                $id=$_POST['id'];
                $name=$_POST['name'];
                updatedm($id,$name);
                $kq=danhmuc_all();
                include "view/danhmuc.php";
                break;
            }
                    //cần dsdm
        case 'user':
            $kq=user_select_all();
            include "view/user.php";
            break;
        case 'user_add':
            if(isset($_POST['btnnadd'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $ten=$_POST['ten'];
                $diachi=$_POST['diachi'];
                $email=$_POST['email'];
                $dienthoai=$_POST['dienthoai'];

                user_insert($username, $password,$ten,$diachi,$email , $dienthoai);
                $tb="Bạn đã thêm thành công!";
            }
            include "view/user_add.php";
            break;
        case 'useredit':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $user=get_user($id);
            }
            include "view/useredit.php";
            break;
        case 'updateuser':
            // Kiểm tra và lấy dữ liệu
            if (isset($_POST['useredit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ten = $_POST['ten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $dienthoai = $_POST['dienthoai'];
                $role = $_POST['role'];
                $id = $_POST['id'];
                // Cập nhật thông tin người dùng
                user_update($username, $ten, $password, $email, $diachi, $dienthoai, $role, $id);
            }
            // Hiển thị danh sách người dùng
            $kq=user_select_all();
            include "view/user.php";
            break;
        case 'deluser':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                deluser($id);
            }
            $kq=user_select_all();
            include "view/user.php";
            break;
        // NGUYỄN HOÀNG NHẬT
        case 'donhang_update':
            // Lấy ID từ URL
            $id = $_GET['id'] ?? null;
            $donhang = null;
        
            if ($id) {
                // Lấy thông tin đơn hàng từ CSDL
                $donhang = pdo_query_one("SELECT * FROM bill WHERE id = ?", $id);
                // Kiểm tra nếu đơn hàng không tồn tại
                if (!$donhang) {
                    echo "<div class='alert alert-danger'>Đơn hàng không tồn tại!</div>";
                    break; // Thay exit bằng break để không dừng hẳn chương trình
                }
            } else {
                echo "<div class='alert alert-danger'>ID đơn hàng không hợp lệ!</div>";
                break; // Thay exit bằng break để không dừng hẳn chương trình
            }
            // ERROR
           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Nhận dữ liệu từ form
                $nguoidat_ten = $_POST['nguoidat_ten'] ?? '';
                $nguoidat_email = $_POST['nguoidat_email'] ?? '';
                $nguoidat_tel = $_POST['nguoidat_tel'] ?? '';
                $nguoidat_diachi = $_POST['nguoidat_diachi'] ?? '';
                $nguoinhan_ten = $_POST['nguoinhan_ten'] ?? '';
                $nguoinhan_diachi = $_POST['nguoinhan_diachi'] ?? '';
                $nguoinhan_tel = $_POST['nguoinhan_tel'] ?? '';
                $ship = $_POST['ship'] ?? 0;
                $voucher = $_POST['voucher'] ?? '';
                $tongthanhtoan = $_POST['tongthanhtoan'] ?? 0;
                $pttt = $_POST['pttt'] ?? '';
        
                // Cập nhật đơn hàng
                $result = update_donhang($id, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $ship, $voucher, $tongthanhtoan, $pttt);
        
                if ($result) {
                    // Nếu cập nhật thành công, chuyển hướng về trang danh sách đơn hàng
                    header("Location: index.php?pg=order&message=success");
                    exit;
                } else {
                    // Nếu cập nhật thất bại, hiển thị thông báo lỗi
                    echo "<div class='alert alert-danger'>Cập nhật thất bại. Vui lòng thử lại sau.</div>";
                }
            }
            include "view/donhang.php";
            break;
        
            case 'donhang_delete':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    // Xóa đơn hàng theo ID
                    pdo_execute("DELETE FROM bill WHERE id=?", $id);
                }
                $kq = order_all();
                include "view/order.php";
                break;
        default:
            include "view/home.php";
            break;
       }
   }else{
    include "view/home.php";

   }

   include "view/footer.php";
   
