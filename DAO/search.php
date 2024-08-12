<?php

function searchSanPhamByName($conn, $keyword) {
    $sql = "SELECT * FROM sanpham WHERE name LIKE :keyword";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['keyword' => '%' . $keyword . '%']);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function showspsearch($dssp_search){
    $html_dssp_search = '';
    
    foreach ($dssp_search as $sp) {
        extract($sp);
        $link = "index.php?pg=sanphamchitiet&idpro=" . htmlspecialchars($id);
        $html_dssp_search .= '
        <div class="pro">
            <a href="'.$link.'"><img src="../LAYOUT/img/'.htmlspecialchars($img).'" alt=""></a>
            <div class="des">
                <span>adidas</span>
                <h5>'.htmlspecialchars($name).'</h5>
                <h4>'.htmlspecialchars($price).'</h4>
            </div>
            <form action="index.php?pg=addcart" method="post">
                <input type="hidden" name="idpro" value="'.htmlspecialchars($id).'">
                <input type="hidden" name="name" value="'.htmlspecialchars($name).'">
                <input type="hidden" name="img" value="img/'.htmlspecialchars($img).'">
                <input type="hidden" name="price" value="'.htmlspecialchars($price).'">
                <input type="hidden" name="soluong" value="1">
                <div class="cart"><button type="submit" name="addcart"><i class="fa-solid fa-cart-shopping"></i></button></div>
            </form>         
        </div>
        '; 
    } 
    return $html_dssp_search;
}


    
    
    
