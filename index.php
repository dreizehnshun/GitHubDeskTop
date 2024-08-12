<?php 
    session_start();
    ob_start();
    if (!isset($_SESSION["giohang"])) {
        $_SESSION["giohang"]=[];
    }

    include 'DAO/pdo.php';
    include 'DAO/danhmuc.php';
    include 'DAO/sanpham.php';
    include 'DAO/giohang.php';
    include 'DAO/user.php';
    include 'DAO/donhang.php';
    include './VIEW/header.php';
    include 'DAO/m_sentmail.php';
    
    //data dành cho sản phẩm
    $dssp_new=get_dssp_new();
    $dssp_best=get_dssp_best();
    $dssp_view=get_dssp_view();

    if (!isset($_GET['pg'])) {
        include './VIEW/home.php';
    }else{
        switch ($_GET['pg']) {
            case 'sanpham':   
                 $dsdm=danhmuc_all(); 
                if(!isset($_GET['iddm'])){
                    $iddm =0;
                }else{
                    $iddm =$_GET['iddm'];
                    
                }
                $dssp=get_dssp($iddm,12);
                include './VIEW/sanpham.php';
                break;
            case 'sanphamchitiet':   
                if (isset($_GET['idpro'])) {
                    $id=$_GET['idpro'];
                     $spchitiet= get_sp_by_id($id);
                    $iddm=$spchitiet['iddm'];
                    $splienquan= get_dssp_splienquan($iddm,$id,4);
                    include './VIEW/sanphamchitiet.php';
                }else{
                    include './VIEW/home.php';
                }
                
                break;
            case 'addcart':
                if (isset($_POST["addcart"])) {
                    $idpro=$_POST['idpro'];
                    $name=$_POST["name"];
                    $img=$_POST["img"];
                    $price=$_POST["price"];
                    $soluong=$_POST["soluong"];
                    $thanhtien=(int)$soluong*(int)$price;            
                    $sp=array("idpro"=>$idpro,"name"=>$name,"img"=>$img,"price"=>$price,"soluong"=>$soluong,"thanhtien"=>$thanhtien );
                    array_push($_SESSION["giohang"],$sp);
                header('location: index.php');
                }
                break;

            case 'viewcart':
                $tongdonhang = 0;  //  $tongdonhang không thông báo
                $giatrivoucher = 0;  // để ngăn biến $giatrivoucher = 0 không thông báo
                if (isset($_GET['del'])&&($_GET['del']==1)) {
                    unset($_SESSION['giohang']);
                    header('location: index.php?pg=viewcart');
                }else{
                    if ($_SESSION['giohang']) {
                        $tongdonhang=get_tongdonhang();
                    }
                        $giatrivoucher=0;
                    if (isset($_GET['voucher'])&&($_GET['voucher']==1)) {
                        $tongdonhang=$_POST['tongdonhang'];
                        $mavoucher=$_POST['mavoucher'];
                        #so sánh với databay giá trị về 
                        $giatrivoucher=10;                   
                    }
                        $thanhtoan=$tongdonhang - $giatrivoucher;
                    include './VIEW/view_giohang.php';
                }
                break;
            case 'login':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $kq = checkuser($username, $password);
                    if (is_array($kq) && count($kq) > 0) {
                        $_SESSION['s_user'] = $kq;
    
                        if ($kq['role'] == 1) {
                            header("Location: admin/index.php");
                            exit();
                        } else {
                            header('Location: index.php');
                            exit();
                        }
                    } else {
                        $tb = "Tài khoản không tồn tại!";
                        $_SESSION['tb_dangnhap'] = $tb;
                        header('Location: index.php?pg=dangnhap');
                        exit();
                    }
                }
            case 'logout':
                if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    unset($_SESSION['s_user']);
                }
                header('location: index.php');
                break;
                case 'donhang':
                    include 'VIEW/donhang.php';
                    break;
                case 'donhangsubmit':
                    if (isset($_POST['donhang'])){                   
                        $hoten=$_POST['hoten'];
                        $diachi=$_POST['diachi'];
                        $email=$_POST['email'];
                        $dienthoai=$_POST['dienthoai'];                   
                        $nguoinhan_ten=$_POST['hoten_nguoinhan'];
                        $nguoinhan_diachi=$_POST['diachi_nguoinhan'];
                        $nguoinhan_tel=$_POST['dienthoai_nguoinhan'];
                        $pttt=$_POST['pttt'];
                    
                        // insert use mới
                        $username="epic-foot".rand(1,999);
                        $password="123456";
                        $iduser=user_insert_id($username, $password, $hoten, $diachi, $dienthoai, $email);
                        // tạo don hang
                        $madh="epicfoot".$iduser."-".date("His-dmY");
                        $total=get_tongdonhang();
                        $ship=0;
                        if(isset($_SESSION['giatrivoucher'])){
                            $voucher=$_SESSION['giatrivoucher'];
                        }else{
                            $voucher=0;
                        }                  
                        $tongthanhtoan=($total-$voucher)+$ship;                   
                        $idbill=bill_insert_id($madh,$iduser,$hoten,$email,$dienthoai,$diachi,$nguoinhan_ten,$nguoinhan_diachi,$nguoinhan_tel,$total,$ship,$voucher,$tongthanhtoan,$pttt);
                    foreach ($_SESSION['giohang']as $sp){
                        extract($sp);
                        cart_insert($idpro, $price, $name, $img, $soluong,$thanhtien, $idbill);
                    }        
                }
                include './VIEW/donhang_confirm.php ';     
                break;
            case 'myaccount':
                if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    include './VIEW/myaccount.php';
                }
                break;
            case 'dangnhap':
                include './VIEW/dangnhap.php';
                break;
            case 'adduser':
                # xác định gái trị đầu vào
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $ten=$_POST['ten'];
                    $dienthoai =$_POST['dienthoai'];
                    $diachi = $_POST['diachi'];
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                }
                # xử lý
                user_insert($username, $password,$ten,$diachi ,$email , $dienthoai);
                $emailBody = "
                <h2>Cảm ơn bạn đã đăng ký tài khoản tại cửa hàng của chúng tôi</h2>
                
                <p>Trân trọng,</p>
                <p>Đội ngũ cửa hàng của chúng tôi</p>
                ";
                SendMail($email, 'Đăng ký thành viên mới', 'EPIC FOOT', $emailBody);
                header('location: index.php?pg=dangnhap');
                break;
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
                 $tongsosp=get_dssp_new();
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
                    $tongsosp=get_dssp_new();
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
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $img=IMG_PATH_ADMIN.get_img($id);
                    if(is_file($img)){
                        unlink($img);
                    }
                    try {
                        sanpham_delete($id);
                    } catch (\Throwable $th) {
                        echo "<h3 style='color:red;text-align:center'>Sản phẩm đã có trong giỏ hàng! Không được quyền xóa!</h3>";
                    }     
                }
                //trở về trang dssp
                $sanphamlist=get_dssp_new(100);
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
                    $sanphamlist=get_dssp_new(100);
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

            case 'dangky':
                include './VIEW/dangky.php';
                break;
            case 'gioithieu':
                include './VIEW/gioithieu.php';
                break;
            case 'blog':
                include './VIEW/blog.php';
                break;
            case 'sanphamsearch':
                include './VIEW/sanphamsearch.php';
                break;
            default:
                include './VIEW/home.php';
                break;
        }
    }
    include './VIEW/footer.php';

    


