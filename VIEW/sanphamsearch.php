<?php
include './DAO/search.php';


$conn = pdo_get_connection();
$keyword = "";
$sanphamNames = [];
if (isset($_POST['timkiem'])) {
    $keyword = $_POST['kyw'];
    $sanphamNames = searchSanPhamByName($conn, $keyword);
}
?>

<!-- FIX-->
<section id="product-search-results" class="section-p1">
                <h2>Kết quả tìm kiếm cho từ khóa '<?= htmlspecialchars($keyword) ?>'</h2>
                <br>
                <div class="pro-container">
                    <?php
                    if (!empty($sanphamNames)) {
                        foreach ($sanphamNames as $sanpham) {
                    ?>
                            <div class="pro">
                                <a href="index.php?pg=sanphamchitiet&idpro=<?= htmlspecialchars($sanpham['id']) ?>">
                                    <img src="LAYOUT/img/<?= htmlspecialchars($sanpham['img']) ?>" alt="">
                                    <div class="des">
                                        <h5><?= htmlspecialchars($sanpham['name']) ?></h5>
                                        <div class="star">
                                            <!-- Hiển thị đánh giá nếu có -->
                                        </div>
                                        <p class="price"><?= htmlspecialchars($sanpham['price']) ?> Đ</p>
                                    </div>
                                </a>
                                <form action="index.php?pg=addcart" method="post">
                                    <input type="hidden" name="name" value="<?= htmlspecialchars($sanpham['name']) ?>">
                                    <input type="hidden" name="img" value="<?= htmlspecialchars($sanpham['img']) ?>">
                                    <input type="hidden" name="price"  value="<?= htmlspecialchars($sanpham['price']) ?>">
                                    <input type="number" name="soluong" min="1" value="1" max="10">
                                    <hr>
                                    <hr>
                                    <div class="cart">
                                        <button style="submit" name="addcart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p>Không có sản phẩm nào phù hợp với từ khóa '" . htmlspecialchars($keyword) . "'.</p>";
                    }
                    ?>
                </div>
</section>