
<?php
    $html_dssp_new=showsp($dssp_new);
    $html_dssp_best=showsp($dssp_best);
    $html_dssp_view=showsp($dssp_view);
    $html_dstt = '';
    foreach($dstt as $tt){
        extract($tt);
        $mota_rutgon = (isset($mota) && $mota != "") ? substr($mota, 0, 50) . "..." : "";
        $noidung_rutgon = (isset($noidung) && $noidung != "") ? substr($noidung, 0, 130) . "..." : "";
        $link = "index.php?pg=tintucchitiet&idtt=" . $id;
        $html_dstt.='
            <div class="news-item-footer">
                        <div class="date">
                            <span class="day">'.$ngaydang.'</span>
                        </div>
                        <a href="'.$link.'"><img src="./LAYOUT/img/'.$img.'" alt=""></a>
                        <h3>'.$name.'</h3>
                        <p>'. $mota_rutgon.'</p>
                        </p>
                </div>
        ';
    }
?>

<section id="hero">
            <h4>CHUYÊN TRAO ĐỔI VÀ CUNG CẤP</h4>   
            <h2>ƯU ĐÃI SIÊU HOT</h2>
            <h1 style="color: #369abf">Voucher áp dụng cho tất cả sản phẩm</h1>
            <button class="blink" ><a href="index.php?pg=sanpham">MUA NGAY</a></button>
</section>

    <section id="product1" class="section-p1">
                <h2>SẢN PHẨM HOT</h2>
                <p>Mặt hàng mùa hè</p>
                <div class="pro-container">
                    <?=$html_dssp_best; ?>
                </div>
            </section>
        

        <section id="banner" class="section-m1">
            <h4>Hỗ trợ sản phẩm</h4>
            <h2>Lên đến<span>70%</span>- Tất cả áo phông & Phụ kiện-</h2>
            <button class="normal">Tìm hiểu thêm</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>CÁC SẢN PHẨM MỚI</h2>
            <p>Mùa hè sôi động</p>
            <div class="pro-container">
                <?=$html_dssp_new; ?>
                </div>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>SẢN PHẨM NHIỀU LƯỢT XEM NHẤT</h2>
             <div class="pro-container">
                <?=$html_dssp_view; ?>
        </section>

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <!-- <h4>crazy deals</h4>
                <h2>Mua 1 tặng 1</h2>
                <span>The best clasic dress is on sale at cara</span>
                <button class="white">Learn More</button> -->
            </div>
            <div class="banner-box banner-box2">         <!--  banner-box2 có thể nối chuổi 2 class  -->
                <!-- <h4>Spring/summer</h4>
                <h2>upcoming season</h2>
                <span>The best clasic dress is on sale at cara</span>
                <button class="white">Collection</button> -->
            </div>
        </section>

        <section id="banner3">
            <div class="banner-box">
                <!-- <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -50% OFF</h3> -->
            </div>
            <div class="banner-box banner-box2">
                <!-- <h2>New footwear collection</h2>
                <h3>spring 2023/ Summer 2023</h3> -->
            </div>
            <div class="banner-box banner-box3">
                <!-- <h2>T-SHIRTS</h2>
                <h3>NEW trendy Prints</h3> -->
            </div>
        </section>
        <section class="news-events-footer">
                <h2>TIN TỨC VÀ SỰ KIỆN</h2>
                <div class="news-container-footer">
                <?=$html_dstt; ?>

                </div>
</section>
        
        
