<?php
$html_dstt_con ='';
foreach($dstt as $a){
  extract($a);
  $link = "index.php?pg=tintucchitiet&idtt=" . $id;
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
extract($tt);
?>
<body>
  <div class="container-blog">
    <div class='tintucchinh'>
      <div class="tin-header">
      <h1><?=$name?></h1>
      </div>
      <img src="./LAYOUT/img/<?=$img?>" alt="Article Image" class="article-image">
      <div class="tin-noidung">
      <p><?=$mota?></p>
      <h3>Ngày đăng tin: <?=$ngaydang?></h3>
      <p><?=$noidung?></p>
      
      <!-- Add more content as needed -->
      </div>
    </div>
    <div class='tintucphu'>
      <h2>Tin tức liên quan</h2>
    <?=$html_dstt_con; ?>
    </div>
    
  </div>
  
  <script>
    // JavaScript code goes here
  </script>
</body>
