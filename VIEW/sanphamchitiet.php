<?php
    extract($spchitiet);
    $html_dssp_splienquan=showsp($splienquan);
?>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="./LAYOUT/img/<?=$img?>" alt="" width="100%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="./LAYOUT/img/<?=$img?>" width="100%" class="small-img" alt="">
            </div>

            <div class="small-img-col">
                <img src="./LAYOUT/img/<?=$img?>" width="100%" class="small-img" alt="">
            </div>

            <div class="small-img-col">
                <img src="./LAYOUT/img/<?=$img?>" width="100%" class="small-img" alt="">
            </div>
            
            <div class="small-img-col">
                <img src="./LAYOUT/img/<?=$img?>" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-prp-details">
        <h4><?=$name?></h4>
        <h2><?=$price?></h2>
            <select>
                <option>Chọn kích thước</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Nhỏ</option>
                <option>Lớn</option>
            </select>

            <form action="index.php?pg=addcart" method="post">
                <input type="hidden" name="idpro" value="<?=$id?>">
                    <input type="hidden" name="name" value="<?=$name?>">
                    <input type="hidden" name="img" value="img/<?=$img?>">
                    <input type="hidden" name="price" value="<?=$price?>">
                    <input type="number" name="soluong" id="" min="1" value="1" max="10">
                    <button class="normal"style="submit" name="addcart">Thêm vào giỏ hàng</button>
            </form>  

        <h4>Chi tiết sản phẩm</h4>
        <span><?=$mota?></span>
    </div>
</section>
<div>
    <h1>Bình luận </h1>
    <div class="comment-section">
    <div class="comment-form">
        <?php
        if(isset($_SESSION['s_user'])):?> 
    <form action="index.php?pg=add_comment&idpro=<?=$id?>" method="post">
    <textarea name="noidung" placeholder="Nhập bình luận của bạn"></textarea>
    <button type="submit" name="add_comment">Gửi</button>
</form>
<?php else: ?>
<p><a href="index.php?pg=dangnhap">Đăng nhập</a> để có thể bình luận</p>
<?php endif; ?>
    <div class="comments">
    <?php foreach($dsbl as $bl): ?>
        <div class="comment">
            <div>
            <strong><?=$bl['ten']?></strong>
            <?=$bl['ngaybl'] ?>
            </div>
            <p><?=$bl['noidung']?></p>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
    </div>



<section id="product1" class="section-p1">
    <h2>Sản phẩm liên quan</h2>
    <p>Bộ sưu tập mùa hè</p>
    <div class="pro-container">
        <?=$html_dssp_splienquan; ?>
    </div>
</section>