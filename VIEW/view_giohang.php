<?php
    $html_cart=viewcart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIỎ HÀNG</title>
    <link rel="stylesheet" href="./LAYOUT/giohang.css">
</head>
    
<body>
    <section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>ĐƠN HÀNG</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?=$html_cart?>
            </table>
                <a href="index.php?pg=viewcart&del=1" style="color: #088178; text-decoration: none; font-size: 14pt;">Xóa giỏ hàng</a>
        </div>
        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
            <div class="total">
                <h3>Tổng:<?=$tongdonhang?></h3>
            </div>
            <div class="coupon">
                <form action="index.php?pg=viewcart&voucher=1" method="post">
                    <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                    <input type="text" name="mavoucher" placeholder="Nhập voucher">
                    <button type="submit">Áp mã </button>
                </form>
                
            </div>
            <div class="total">
                <h3>Tổng thanh toán: <?=$thanhtoan?> </h3>
            </div>
            <a href="index.php?pg=donhang">
                <button  class="bam">Thanh toán</button>
            </a>
            
        </div>


        </div>
    </section>
</body>
</html>
