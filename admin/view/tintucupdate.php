<?php




if(is_array($tt)&&(count($tt)>0)){
    extract($tt);
    $idupdate=$id;
    $imgpath=IMG_PATH_ADMIN.$img;
    if(is_file($imgpath)){
        $img='<img src="'.$imgpath.'" width="80px">';
    }else{
        $img="";
    }

}

?>

<div class="main-content">
                <h3 class="title-page">
                    Cập nhật tin tức
                </h3>
                
                <form class="addPro" action="index.php?pg=uptintuc" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm <?=$imgpath?></label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                            <?=$img?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên tin tức:</label>
                            <input type="text" class="form-control" style="width: 800px" name="name" value ="<?=($name!="")?$name:"";?>" id="name" placeholder="Nhập tên bản tin" >
                    </div>
                    
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mota" id="mota" style="width: 1200px"; placeholder="Nhập mô tả tin tức" rows="3"><?=($mota!="")?$mota:""?></textarea>
                        </div>
                        <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" name="noidung" id="noidung" style="width: 1200px" placeholder="Nhập nội dung tin tức" rows="5"><?=($noidung!="")?$noidung:""?></textarea>
                        </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$idupdate?>">
                        <button type="submit" name="uptintuc" class="btn btn-primary">Cập nhật tin tức</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>