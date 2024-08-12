<?php 
$html_dstt = '';
$html_dstt_con ='';
foreach($dstt as $tt){
    extract($tt);
    $mota_rutgon = (isset($mota) && $mota != "") ? substr($mota, 0, 20) . "..." : "";
    $noidung_rutgon = (isset($noidung) && $noidung != "") ? substr($noidung, 0, 130) . "..." : "";
    $link = "index.php?pg=tintucchitiet&idtt=" . $id;
    $html_dstt.='
                    <div class="news-item">
                <div class="news-content">
                    <h2>'.$name.'</h2>
                    <div class="news-meta">
                        <span class="category">'.$mota_rutgon.'</span>
                        <span class="date">'.$ngaydang.'</span>
                    </div>
                    <p>'.$noidung_rutgon.'</p>
                </div>
                <div class="news-image">
                    <a href="'.$link.'"><img src="./LAYOUT/img/'.$img.'" alt=""></a>
                </div>
            </div>'; 
    $html_dstt_con.='
                <div class="sidebar-item">
                <div class="sidebar-image">
                    <a href="'.$link.'"><img src="./LAYOUT/img/'.$img.'" alt="" ></a>
                </div>
                <div class="sidebar-content">
                    <h3>'.$name.'</h3>
                    <span class="date">'.$ngaydang.'</span>
                </div>
            </div>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức Mới Nhất</title>

    <link rel="stylesheet" href="LAYOUT/style.css">
    <link rel="stylesheet" href="LAYOUT/blog.css">
    <link rel="stylesheet" href="LAYOUT/formmuahang/form.css">
    <link rel="stylesheet" href="LAYOUT/search.css">

</head>
<body>

   
    <div class="container">
        <div class="main-content">
            <h1>Tin Tức Mới Nhất</h1>
            <?=$html_dstt; ?>
            
        </div>
        
        <div class="sidebar">
        <?=$html_dstt_con; ?>
        </div>
    </div>
</body>
</html>
