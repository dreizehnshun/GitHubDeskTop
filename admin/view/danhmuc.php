<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=danhmuc_add" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:50%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Ưu tiên</th>
                            <th>Hiển thị</th>
                            <th>Hành động</th>
                            
                        </tr>
                    </thead>
                    <?php
                    //var_dump($kq);


?>
<?php
 if(isset($kq)&&(count($kq)>1)){
    $i=1;
foreach ($kq as $dm) {
    echo '<tr>
    <td>'.$i.'</td>
    <td>'.$dm['name'].'</td>
    <td>'.$dm['home'].'</td>
    <td>'.$dm['stt'].'</td>
    <td>
                                <a href="index.php?pg=updatedmform&id='.$dm['id'].'" class="btn btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?pg=deldmform&id='.$dm['id'].'" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i> Xóa</a>
    
    
    </tr>';
    $i++;
}
 }
?>
                    
                        
                            
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>