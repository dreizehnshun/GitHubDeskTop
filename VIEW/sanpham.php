<?php
    $html_dssp_new=showsp($dssp_new);
    $html_dm = '';
    $html_dssp='';

    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=sanpham&iddm='.$id;
        $html_dm .= '<li><a href="'.$link.'">'.$name.'</a></li>';
    }

    foreach($dssp as $sp){
        extract($sp);
        if($bestseller==1){
            $best='<div class="product1"></div>';
        }else{
            $best='';
        }
        $link = "index.php?pg=sanphamchitiet&idpro=" . $id;
        $html_dssp.='
                        <div class="pro" >         
                        <a href="'.$link.'"><img src="./LAYOUT/img/'.$img.'" alt=""></a>
                            <div class="des">
                                <h5>'.$name.'</h5>
                                <span>Lượt Click: '.$view.'</span>
                                <h4>'.$price.' VND </h4>
                            </div>

                            <form action="index.php?pg=addcart" method="post">
                                <input type="hidden" name="idpro" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="img/'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="hidden" name="soluong" value="1">
                                <div class="cart">
                                    <button style="submit" name="addcart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                </div>
                            </form>                                  
                        </div>'; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SẢN PHẨM</title>
    <!-- LINK CSS DANH MUC sanpham.css-->
    <link rel="stylesheet" href="./LAYOUT/sanpham.css">
</head>
<body>
    <section id="page-header"> <!-- Banner bên cửa hàng -->
        <p>Tiết kiệm nhiều hơn với phiếu giảm giá & lên tới 70%</p>
    </section>

    <ul class="description">
        <?=$html_dm;?>
    </ul>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?=$html_dssp; ?>
        </div>
    </section>
</body>
</html>
