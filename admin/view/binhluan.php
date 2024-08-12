<div class="main-content">
    <h3 class="title-page">
        Bình luận
    </h3>
    <table id="example" class="table table-striped" style="width:50%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id người dùng</th>
                <th>Id sản phẩm</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($dsbl) && (count($dsbl) > 1)) {
                $i = 1;
                foreach ($dsbl as $bl) {
                    echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $bl['iduser'] . '</td>
                        <td>' . $bl['idsp'] . '</td>
                        <td>' . $bl['noidung'] . '</td>
                        <td>' . $bl['ngaybl'] . '</td>
                        <td>';
                    if ($bl['status'] == 1) {
                        echo 'Đang hoạt động';
                        echo '</td>
                        <td>
                            <a href="index.php?pg=hidden_comment&id=' . $bl['id'] . '" class="btn btn-warning"> Ẩn </a>
                        </td>';
                    } else {
                        echo 'Tạm ẩn';
                        echo '</td>
                        <td>
                            <a href="index.php?pg=hien_comment&id=' . $bl['id'] . '" class="btn btn-danger"> Hiện </a>
                        </td>';
                    }
                    echo '</tr>';
                    $i++;
                }
            }
            ?>
        </tbody>
    </table>
</div>