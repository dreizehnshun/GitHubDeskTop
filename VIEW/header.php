<?php
    if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='
        
        <li><a href="admin/">'.$username.'</a></li>
        <li><a href="index.php?pg=myaccount"><i class="fa-regular fa-address-card"></i></a></li>
        <li><a href="index.php?pg=logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        
        ' ;
       
       
    }else{
        $html_account='
        <li><a href="index.php?pg=dangnhap"><i class="fa-solid fa-user"></i></a></li>';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EPIC FOOT</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="LAYOUT/style.css">
        <link rel="stylesheet" href="LAYOUT/formmuahang/form.css">
        <!-- tri -->
        <link rel="stylesheet" href="LAYOUT/blog.css">
        <link rel="stylesheet" href="LAYOUT/tintucfooter.css">
        <link rel="stylesheet" href="LAYOUT/search.css">
        
    </head>
    <body>
        <section id="header">
            <a href="index.php">
                <img src="LAYOUT/img/logo1-removebg-preview.png">
            </a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.php">TRANG CHỦ</a></li>
                    <li><a href="index.php?pg=sanpham">CỬA HÀNG</a></li>
                    <li><a href="index.php?pg=gioithieu">GIỚI THIỆU</a></li>
                    <li><a href="index.php?pg=blog">TIN TỨC</a></li>
                    <li id="lg-bag"><a href="index.php?pg=viewcart"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a> 
                        <div class="timkiem">
                        <form action="index.php?pg=sanphamsearch" method="post">
                            <input type="text" name="kyw" placeholder="Bạn muốn tìm gì" style="width: 350px; height: 50px; padding: 16px; border-radius: 40px; border: 1px solid transparent;">
                            <input type="submit" name="timkiem" value="Tìm Kiếm" style="width: 80px; height: 50px;  background-color: #336699; color: #fff; white-space: nowrap; border-radius: 40px; border: 1px solid transparent;">
                        </form>

                        </div>
                        <li>
                            <?=$html_account;?>
                        </li>
            </div>
            <div id="mobile">
                <a href="index.php?pg=viewcart"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i> <!-- icon cho menu cho mobile -->
            </div>
        </section>
        

