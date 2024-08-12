<?php
    $total_products = $dem_sp[0]['total_products'];
    $total_users =$dem_tv[0]['total_users'];
    $total_danhmuc=$dem_dm[0]['total_danhmuc'];
    $total_donhang=$dem_dh[0]['total_donhang'];
    $total_binhluan=$dem_bl[0]['total_binhluan'];
    $total_tintuc=$dem_tt[0]['total_tintuc'];
?>
<div class="main-content">
                <h3 class="title-page">
                    Dashboards
                </h3>
                <section class="statistics row">
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=sanphamlist">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Sản phẩm
                                    </h5>
                                    <p>Tổng số sản phẩm:<?php echo $total_products ?></p>
                                </div>
                                <span class="widget-numbers"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=user">
                            <div class="card mb-3 widget-chart">

                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Thành viên
                                    </h5>
                                    <p>Tổng số thành viên:<?php echo $total_users ?></p>
                                </div>
                                <span class="widget-numbers"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=danhmuc">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Danh mục
                                    </h5>
                                    <p>Số lượng danh mục:<?php echo $total_danhmuc ?></p>

                                </div>
                                <span class="widget-numbers"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=order">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Đơn hàng
                                    </h5>
                                    <p>Tổng số đơn hàng đang có:<?php echo $total_donhang ?></p>
                                </div>
                                <span class="widget-numbers"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=binhluan">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Bình luận
                                    </h5>
                                    <p>Tổng số bình luận của người dùng:<?php echo $total_binhluan ?></p>
                                </div>
                                <span class="widget-numbers"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?pg=tintuc">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                       Tin tức
                                    </h5>
                                    <p>Tổng số tin tức đã đăng:<?php echo $total_tintuc ?></p>
                                </div>
                                <span class="widget-numbers"></span>
                            </div>
                        </a>
                    </div>
                </section>

                <a href="../index.php">Quay Lại Trang Chủ</a> 
                
            </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>