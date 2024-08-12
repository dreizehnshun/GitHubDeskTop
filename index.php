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
                #input
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                //xl 
                $kq=checkuser($username,$password);
                if (is_array($kq)&&count($kq)>0){
                    $_SESSION['s_user']=$kq;

                    if ($kq['role'] == 1) {
                        header("Location: admin");
                    } else {
                        header('location: index.php');

                    }   
                }else{
                    $tb="Tài khoản không tồn tại!";
                    $_SESSION['tb_dangnhap']=$tb;
                    header('location: index.php?pg=dangnhap');
                }
                // dăng xuất
                }
                break;
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
                        $nguoinhan_ten=$_POST['nguoinhan_hoten'];
                        $nguoinhan_diachi=$_POST['nguoinhan_diachi'];
                        $nguoinhan_tel=$_POST['nguoinhan_tel'];
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
                include './VIEW/dangnhap.php';
                break;
    
            case 'updateuser':
                # xác định gái trị đầu vào
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $username=$_POST["username"];
                    $ten=$_POST["ten"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                    $diachi=$_POST["diachi"];
                    $dienthoai=$_POST["dienthoai"];
                    $id=$_POST["id"];
                    $role=0;
                    user_update($username, $ten, $password, $email, $diachi, $dienthoai, $role, $id);
                    include './VIEW/myaccount_confirm.php';
                }
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

    


