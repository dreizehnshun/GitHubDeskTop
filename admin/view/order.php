<div class="main-content">
    <h3 class="title-page">
        Quản lí đơn hàng
    </h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Thứ Tự Đơn hàng</th>
                <th>Mẫ Đơn hàng</th>
                <th>ID người mua</th>
                <th>Tên người đặt  </th>
                <th>Email người đặt</th>
                <th>SĐT người đặt</th>
                <th>Địa chỉ người đặt</th>
                <th>Tên người nhận</th>
                <th>Địa chỉ người nhận</th>
                <th>SĐT người nhận</th>
                <th>SHIP</th>
                <th>Voucher</th>
                <th>Tổng thanh toán</th>
                <th>PTT</th>
                <p ></p>
            </tr>
        </thead>
        <?php
if (isset($kq) && is_array($kq) && count($kq) > 0) {
    $i = 1;
    foreach ($kq as $donhang) {
        echo '<tr>
        <td>' . $i . '</td>
        <td>' . $donhang['id'] . '</td>
        <td>' . $donhang['iduser'] . '</td>
        <td>' . $donhang['nguoidat_ten'] . '</td>
        <td>' . $donhang['nguoidat_email'] . '</td>
        <td>' . $donhang['nguoidat_tel'] . '</td>
        <td>' . $donhang['nguoidat_diachi'] . '</td>
        <td>' . (isset($donhang['nguoinhan_ten']) ? $donhang['nguoinhan_ten'] : 'N/A') . '</td>
        <td>' . (isset($donhang['nguoinhan_diachi']) ? $donhang['nguoinhan_diachi'] : 'N/A') . '</td>
        <td>' . (isset($donhang['nguoinhan_tel']) ? $donhang['nguoinhan_tel'] : 'N/A') . '</td>
        <td>' . $donhang['ship'] . '</td>
        <td>' . $donhang['voucher'] . '</td>
        <td>' . $donhang['tongthanhtoan'] . '</td>
        <td>' . $donhang['pttt'] . '</td>
        <td>
            <a href="index.php?pg=donhang_update&id=' . $donhang['id'] . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
            <a href="index.php?pg=donhang_delete&id=' . $donhang['id'] . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
        </td>
        </tr>';
        $i++;
    }
}
?>
        <tfoot>
            <tr>
                <th>Thứ Tự Đơn hàng</th>
                <th>Mã Đơn hàng</th>
                <th>ID người mua</th>
                <th>Tên người đặt  </th>
                <th>Email người đặt</th>
                <th>SĐT người đặt</th>
                <th>Địa chỉ người đặt</th>
                <th>Tên người nhận</th>
                <th>Địa chỉ người nhận</th>
                <th>SĐT người nhận</th>
                <th>SHIP</th>
                <th>Voucher</th>
                <th>Tổng thanh toán</th>
                <th>PTT</th>
            </tr>
        </tfoot>
    </table>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable('#example');
</script>