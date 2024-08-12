<?php
   $html_dstt="";
   $i=1;
   foreach ($dstt as $item) {
      extract($item);
      $hinhanh=IMG_PATH_ADMIN.$img;
      $imgtag="<img src='".$hinhanh."' width='80px'>";
      $link = "index.php?pg=sanphamchitiet&idpro=" . $id;
      $mota_rutgon = (isset($mota) && $mota != "") ? substr($mota, 0, 20) . "..." : "";
      $noidung_rutgon = (isset($noidung) && $noidung != "") ? substr($noidung, 0, 50) . "..." : "";
      $html_dstt.='<tr>
              <td>'.$i.'</td>
               <td>'.$name.'</td>
               <td>'.$imgtag.'</td>
               <td>'.$mota_rutgon.'</td>
              <td>'.$noidung_rutgon.'</td>
               <td>
                  <a href="index.php?pg=tintucupdate&id='.$id.'" class="btn btn-warning"
                    ><i class="fa-solid fa-pen-to-square"></i> Sửa</a
                  >
                  <a href="#" onclick="return confirmDelete('.$id.');" class="btn btn-danger">
    <i class="fa-solid fa-trash"></i> Xóa
</a>
                </td>
            </tr>';
            $i++;
   }
?>
<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?pg=tinadd" class="btn btn-primary mb-2"
              >Thêm tin tức</a
            >
          </div>
          
          
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên tin</th>
                <th>Ảnh</th>
                <th>Mô tả</th>
                <th>Nội dung</th>
                <th>Thao tác</th>

              </tr>
            </thead>
            
            <tbody>
            <?=$html_dstt;?>
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
    <script>
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
        window.location.href = "index.php?pg=deltin&id=" + id;
        return true;
    } else {
        return false;
    }
}
</script>