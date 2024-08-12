<div class="main-content">
                <h3 class="title-page">
                    Thêm tin tức
                </h3>
                <div class="box500">
                <form class="addPro" action="index.php?pg=tinadd" method="POST"enctype="multipart/form-data">
                <div class="form-group">
                        <label for="exampleInputFile">Ảnh tin tức</label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên tin :</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên tin tức">
                    </div>
                    <div class="form-group">
                        <label for="name">Mô tả</label>
                        <input type="text" class="form-control" name="mota" id="mota" placeholder="Nhập mô tả">
                    </div>
                    <div class="form-group">
                        <label for="name">Nội dung :</label>
                        <input type="text" class="form-control" name="noidung" id="noidung" placeholder="Nhập nội dung">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btnnadd" class="btn btn-primary">Thêm tin tức</button>
                    </div>
                    <?php
                        if(isset($tb) &&($tb!="")){ echo $tb;}
                    ?>
                </form>
                </div>
        </div>