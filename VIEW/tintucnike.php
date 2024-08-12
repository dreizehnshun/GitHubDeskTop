<?php
    if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='
        
        <li><a href="index.php?pg=myaccount">'.$ten.'</a></a></li>
        ' ;
       
       
    }else{
        $html_account='
        <li><a href="index.php?pg=dangnhap"><img src="LAYOUT/img/user.png" alt="" width="30px"></a></li>';
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EPIC FOOT TIN TỨC</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/LAYOUT/style.css">
        <link rel="stylesheet" href="/LAYOUT/formmuahang/form.css">
        <link rel="stylesheet" href="/LAYOUT/search.css">
        <link rel="stylesheet" href="/LAYOUT/tintuchome.css">
        <link rel="stylesheet" href="/LAYOUT/csstintuc/nike.css">
        
    </head>

    <body>
        <section id="header">
            <a href="index.php"><img src="/LAYOUT/img/logo1-removebg-preview.png" alt="" width="80px"></a>
            <div>

            <div class="timkiem">
                <form action="VIEW/sanphamsearch.php" method="post">
                    <input type="text" name="kyw" placeholder="Bạn muốn tìm gì" style="width: 350px; height: 50px; padding: 16px; border-radius: 40px; border: 1px solid transparent;">
                    <input type="submit" name="timkiem" value="Tìm Kiếm" style="width: 80px; height: 50px;  background-color: #088178; color: #fff; white-space: nowrap; border-radius: 40px; border: 1px solid transparent;">
                </form>
            </div>
                <ul id="navbar">
                    <li><a class="active" href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?pg=sanpham">Cửa hàng</a></li>
                    <li><a href="index.php?pg=gioithieu">Giới thiệu</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="index.php?pg=blog">Tin Tức</a></li>
                    <div class="alo">
                        <li id="lg-bag" ><a href="index.php?pg=viewcart" ><i class="fa-solid fa-bag-shopping" style="font-size: 30px;";></i></a></li>
                        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>                         
                        <li><?=$html_account;?></li>
                    </div>
                </ul>
            </div>
            <div id="mobile">
                <a href="index.php?pg=viewcart"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i> <!-- icon cho menu cho mobile -->
            </div>
        </section>
        <div class="container-content">
            <p id="title">Giày Nike Air Force 1: Một huyền thoại trong lịch sử của thương hiệu Nike</p>
            <p id="content">Với những người yêu thích giày thể thao, Nike Air Force 1 (Nike AF1) chắc chắn là item cần phải có trong tủ giày của bạn. Đây là đôi giày đặc trưng của thương hiệu Nike và đã trở thành đôi giày bán chạy nhất thế giới trong hơn 40 năm liên tiếp. Vậy bạn đã bao giờ nghĩ về lịch sử ra đời, câu chuyện thương hiệu hay công nghệ của đôi giày này chưa? Nike là một công ty thời trang đa quốc gia được thành lập vào năm 1964, tiền thân là “Blue Ribbon Movement”. Ngày 30 tháng 5 năm 1971, công ty chính thức đổi tên thành Nike. Ngoài Nike, tập đoàn này còn sở hữu hai thương hiệu thời trang đình đám là Jordan Brand và Converse. Hiện tại, Nike đang sở hữu Nike Golf, Nike Pro, Nike +, Air Jordan, Nike Blazers, Air Force 1, Nike Dunk, Air Max, Foamposite, Nike Skateboarding, Nike CR7, …</p>
            <p id="title" >Lịch sử ra đời Nike Air Force 1</p>
            <p id="content">Nếu năm 1971 là thời điểm thương hiệu Nike chính thức ra mắt, thì đến năm 1982, Air Force 1 cũng được ra mắt. Sau 11 năm, Air Force 1 là một trong những dòng sản phẩm đầu tiên của công ty. Nike Air Force 1 được nhà thiết kế Nike Bruce Kilgore cho ra mắt vào thời điểm đó và được xác định là dòng giày dành cho các vận động viên bóng rổ. Tất nhiên, sản phẩm đã rất thành công vào thời điểm đó. Nhờ công nghệ đế Air Unit lần đầu tiên được áp dụng cho dòng giày bóng rổ, đôi giày này được đánh giá cao trên toàn thế giới, giúp mang lại cấu trúc chắc chắn khi mang. Để khẳng định đây là đôi giày hàng đầu dành cho các vận động viên bóng rổ, Nike đã không ngần ngại chi chi phí marketing khổng lồ để “đột nhập” NBA (National Basketball Association) hay còn gọi là American Professional Basketball League – giải lớn nhất này. Chính vì vậy, mẫu sneaker này được các siêu sao của Giải bóng rổ nhà nghề Mỹ như Moses Malone và Philadelphia 76ers sử dụng trong các giải đấu lẫn ngoài đời. Điều này giúp Nike Air Force 1 bán chạy.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n1.png" alt="">
            <p id="content">Mặc dù là sản phẩm bán chạy nhất đầu tiên của hãng và tốn chi phí marketing khổng lồ cho các show diễn tại NBA nhưng chỉ 2 năm sau khi ra mắt, vào năm 1984, mẫu giày Air Force 1 “bán chạy nhất” đã hoàn toàn bị ngừng sản xuất mà không rõ lý do. Điều này đã gây ra “sự phẫn nộ” trong ngành giày thể thao, thậm chí có rất đông khách hàng đã đến xưởng giày của Nike để yêu cầu sản xuất lại mẫu giày đặc biệt này. Mức độ tập trung của khách hàng thậm chí còn vượt xa số lượng nhân viên của nhà máy. Các chủ cửa hàng, nhà bán lẻ và hệ thống các nhà bán lẻ lớn trên thế giới cũng đã yêu cầu Nike xem xét việc tái sản xuất Nike Air Force 1. Sau đó, nhờ sự hợp tác giữa East Coast Retail Group và Nike, chiếc Air Force 1 đã được lên kệ trở lại. Sau một thời gian vắng bóng, Nike AF1 đã trở lại trên các kệ hàng và nhanh chóng cháy hàng trên thị trường. Người mua phải xếp hàng dài chờ đợi để được tận tay. Có lẽ, đây cũng là hoạt động marketing của hãng cho sự khan hiếm, nhưng sau sự kiện lịch sử này, việc sản xuất hàng loạt đôi giày Nike Air Force 1 này đã tăng lên. Cho đến nay, nó vẫn đang được sản xuất và đã trải qua nhiều nâng cấp kỹ thuật hơn.</p>
            <p id="title">Công nghệ ở giày Nike Air Force 1</p>
            <p id="content">Nike không chỉ là hãng thời trang, mà còn là hãng tiên phong trong lĩnh vực công nghệ, và quan trọng hơn cả là những ai đam mê các sản phẩm của Nike đều hiểu rõ điều này. Tất cả các loại giày Nike đều có độ êm nhất định và thời gian sử dụng lâu dài. Bao gồm: 
                <br>
                <br>+ Công nghệ Air tiên tiến với cấu trúc túi khí bên trong giúp giảm thiểu chấn thương trong quá trình luyện tập thể dục thể thao dành cho người dùng.
                <br><br>+ Ở phần đế sử dụng cấu trúc đặc từ cao su để chống trơn trượt, tăng độ đàn hồi và mang lại cảm giác dễ chịu, êm chân ngay cả khi sử dụng liên tục.
                <br><br>+ Phần upper của giày Nike AF1 có nhiều lỗ khí giúp tạo không gian thông thoáng, hạn chế tối đa việc giữ nước – đây là nguyên nhân chính dẫn đến hôi.</p>
                <br>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n2.png" alt="">
            <p id="title" >Các phối màu “hot hit” qua mỗi năm</p>
            <p id="content">Chỉ riêng đôi giày Nike Air Force 1 đã tạo ra doanh thu hàng năm xấp xỉ 1 tỷ USD cho thương hiệu Nike. Đây được coi như “gà đẻ trứng vàng” của Nike, sản phẩm luôn đứng đầu trong TOP sản phẩm bán chạy nhất trong hơn 40 năm. Hiện sản phẩm vẫn được săn đón mạnh mẽ, độ tuổi sử dụng ngày càng đa dạng. Để khách hàng không cảm thấy nhàm chán, Nike tiếp tục giới thiệu nhiều phối màu để người dùng thay đổi thường xuyên. Bạn có thể tham khảo những cách phối màu cơ bản và phổ biến sau đây cho dòng Nike Air Force 1. Xin lưu ý rằng chúng chỉ khác nhau về màu sắc, còn chất liệu và kỹ thuật sử dụng là tương tự nhau.
                Nike Air Force 1 real: Đôi giày cơ bản nhất của hãng. Bao gồm Nike Air Force 1 thấp (cổ thấp), Nike Air Force 1 giữa / Nike Air Force 1 cao (cổ cao). Trong đó, Nike Air Force 1 black (đen) và Nike Air Force 1 white (trắng) được ưa chuộng hơn cả.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n3.png" alt="">
            <p id="content">Nike Air Force 1 Customization: Đôi giày được người dùng “tự thiết kế” bằng cách thay đổi màu sắc theo ý muốn. Hiện nay có rất nhiều công ty chuyên “độ” giày theo ý muốn của khách hàng.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n4.png" alt="">
            <p id="content">Nike Air Force 1 Dior: Đây là sản phẩm kết hợp giữa Nike và thương hiệu thời trang cao cấp Dior. Tất nhiên, giá của mẫu xe này khá cao, và số lượng sản xuất toàn cầu có hạn nên không phải ai cũng có.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n5.png" alt="">
            <p id="title">Giá bán giày Nike AF1 chính hãng</p>
            <p id="content">Nike là thương hiệu thời trang số một thế giới với rất nhiều sản phẩm đa dạng. Công ty có tất cả các phân khúc thị trường với đơn vị sản phẩm từ vài triệu đến vài trăm triệu. Đặc biệt là dòng Nike Air Force 1 rất may mắn có mặt ở thị trường giá rẻ. Cụ thể, phiên bản của dòng này chỉ có mức giá hơn 3 triệu đồng. Giá sẽ thay đổi tùy theo màu sắc và thế hệ. Do có mức giá rẻ nên Nike AF1 phù hợp với túi tiền của đại chúng, thậm chí là học sinh, sinh viên tại Việt Nam. Đặc biệt, ngoài những mẫu giày “signature” có giá hơn 3 triệu USD, Nike cũng đã tung ra một số phiên bản Nike Air Force Limited có giá hơn 2.000 USD. Trong đó có dây da cá sấu AF1 Anaconda kết hợp phủ vàng 18K gây sốt. Ngoài việc là đôi giày bán chạy nhất của Nike, Nike Air Force 1 còn là một trong 100 đôi giày bán chạy nhất mọi thời đại trên thế giới. Các phối màu đa dạng của Nike AF1 là một trong những phối màu đẹp nhất trong bảng xếp hạng.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n6.png" alt="">
            <p id = "title">Những sự thật về Nike Air Force 1</p >
            <p id="content">
                Được coi là “đứa con cưng” của thương hiệu thời trang danh tiếng Nike, Air Force 1 đã thực sự gây chấn động làng sneaker ngay khi ra mắt. 
                Sau khoảng 40 năm, Nike Air Force 1 vẫn không có dấu hiệu hạ nhiệt. Nổi tiếng là vậy nhưng không phải tín đồ nào cũng biết “hết” thông tin về những đôi giày vạn người mê. 
                Vì vậy, hãy cùng Shopgiayreplica.com tìm hiểu những sự thật thú vị về Nike Air Force 1 dưới đây nhé!
            <br>
            <p style="font-style: italic;">Phiên bản đầu tiên của Nike Air Force 1</p>
            <br>
            Thiết kế huyền thoại AF1 White, phủ lên đôi giày tông màu trắng vô cùng tinh tế, mình tin ai cũng biết. Nhưng ít ai biết rằng phiên bản đầu tiên của Nike Air Force ra mắt vào năm 1982 đã pha trộn một màu sắc khác. Cụ thể, logo swoosh và đế ngoài đều có màu xám trung tính chứ không phải màu trắng ngà như hiện nay. Tuy nhiên, Nike đã rất khôn ngoan khi thay đổi diện mạo của mẫu giày này, biến phiên bản all-white trở nên “tươi tắn” hơn một chút, dễ mặc và dễ mix đồ. Vì vậy, không quá lời khi nói rằng Nike Air Force 1 Low All White đứng trong top 100 đôi giày bán chạy nhất mọi thời đại, trong khi phiên bản đầu tiên với màu xám và trắng chỉ đứng trong top 2.
            <br>
            <p style="font-style: italic;">Nike Air Force 1 cũng đã từng bị khai trừ</p>
            <br>
            Vào năm 1984, mặc dù có rất nhiều tin đồn nhưng tại sao Nike lại loại trừ toàn bộ dòng giày Air Force 1 vào thời điểm đó vẫn là một ẩn số. Vào thời điểm đó, ngành công nghiệp sneaker đã rất phẫn nộ, tức giận đến mức họ đã đến cửa hàng để hét lên và yêu cầu Nike bán lại đôi giày này. May mắn thay, lỗi này đã nhanh chóng được sửa chữa vào năm 1986, và công ty đã mang đôi giày này trở lại và trở thành một trong những “ông hoàng” trong làng sneaker trắng. Điều đặc biệt trong lần trở lại này là Nike đã cải biên phiên bản OG gốc và không tung ra phiên bản nâng cấp. Điều này làm cho Air Force 1 trở thành mẫu giày retro đầu tiên và thành công nhất trên thế giới.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n7.png" alt="">
            <br>
            <p style="font-style: italic;">Mức độ bán chạy của AF1</p>
            <p id="content">Đừng đánh giá thấp vẻ ngoài đơn giản của Air Force 1, vì đây là dòng giày béo bở của Nike. Chỉ riêng doanh thu hàng năm của loại giày này đã mang lại doanh thu trung bình khoảng 1 tỷ đô la Mỹ cho Nike. Cho đến nay, dòng giày này rất phổ biến đối với giới trẻ hiện nay, và nó được coi là con gà đẻ trứng vàng cho Nike.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n8.png" alt="">
            <br>
            <p style="font-style: italic;">Air Force không phải là đôi giày street style</p>
            <p id="content">Bản thân dòng giày này ban đầu được sản xuất cho bóng rổ. Tuy nhiên, Nike không ngờ rằng AF1 lại được người hâm mộ yêu thích đến vậy. Ngay cả khi công nghệ “Air” đầu tiên trên thế giới được áp dụng, mục đích của nó là hỗ trợ các vận động viên và giảm chấn thương. Nhưng chính vì những ưu điểm vượt trội này mà AF1 luôn được giới trẻ săn đón nồng nhiệt.</p>
            <p id="title">Mua giày Nike AF1 chính hãng ở đâu?</p>
            <p id="content">Tại Việt Nam, các bạn trẻ đam mê giày có thể dễ dàng mua Nike Air Force 1 bằng nhiều cách khác nhau. Tuy nhiên, để tránh hàng giả, bạn cần lưu ý mua hàng ở những địa điểm sau:
            <br>Cửa hàng chính thức của Nike: Thường được đặt tại nhiều trung tâm thương mại, tập trung nhiều nhất ở các thành phố lớn.
            <br>Đại lý ủy quyền của Nike: Cho phép nhiều cửa hàng phân phối sản phẩm chính hãng hoặc nhập khẩu sản phẩm chính hãng để kinh doanh.
            <br>Một nhóm “người bán” chuyên đặt hàng: Một kênh phổ biến không kém khác là mua hàng thông qua một số dịch vụ đặt hàng riêng lẻ.
            <br>Trên thực tế, Nike Air Force 1 rất phổ biến và được Nike bán rộng rãi tại các cửa hàng của mình, do đó, để tránh hàng giả, người mua nên mua trực tiếp tại cửa hàng chứ không nên mua qua trung gian như đại lý hoặc người bán. Bởi Nike Air Force 1 cũng đã trở thành một trong những đôi giày bị làm giả nhiều nhất trên thế giới vì ảnh hưởng của dòng sản phẩm này. Các kích thước có sẵn của sản phẩm này nằm trong khoảng từ EU 35,5 đến EU 42.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n9.png" alt="">
            <p id="title">Hướng dẫn vệ sinh đôi giày Nike Air Force 1</p>
            <p id="content">Nike Air Force 1 all white là “best seller” trên mọi thị trường. Tuy nhiên, do bản chất của sản phẩm này là toàn màu trắng nên một vấn đề nhỏ đối với người mua là giày rất khó vệ sinh và bảo dưỡng. Cụ thể, để đảm bảo đôi giày luôn trong tình trạng tốt nhất và không bị ngả vàng, trong quá trình sử dụng, vệ sinh và bảo quản nên áp dụng những cách sau. Bao gồm: Hạn chế đi giày trắng trong điều kiện trời mưa. Nếu vào mùa mưa, bạn nên thay một đôi giày.</p>
            <img id="img-tintuc" src="/LAYOUT/img/tintuc/n10.png" alt="">
        </div>       
        <section id="newsletter" class="section-p1 section-m1">
                <div class="newstext">
                    <h4>Sign up for newsletter</h4>
                    <p>Get email updates about our latesst shop and <span>special offers.</span>
                    </p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Your email address">
                    <button class="normal"> Sign Up</button>
                </div>
        </section>

        <section class="news-events">
            <h2>TIN TỨC VÀ SỰ KIỆN</h2>
            <div class="news-container">
                <div class="news-item">
                    <div class="date">
                        <span class="day">09</span>
                        <span class="month">Tháng 7</span>
                    </div>
                    <img src="/LAYOUT/img/products/j1.png" alt="Soongsil University">
                    <h3>Những điều bạn chưa biết về đôi giày Air Jordan</h3>
                    <p>Đôi giày Air Jordan đầu tiên được sản xuất cho cầu thủ bóng rổ Michael Jordan trong thời gian thi đấu cho Chicago Bulls vào
                    cuối năm 1984 và ra mắt công chúng vào ngày 1 tháng 4 năm 1985.
                    Đôi giày được thiết kế cho Nike bởi Peter Moore, Tinker Hatfield và Bruce Kilgore.</p>
                    </p>
                </div>

                <div class="news-item">
                    <div class="date">
                        <span class="day">08</span>
                        <span class="month">Tháng 7</span>
                    </div>
                    <img src="/LAYOUT/img/products/m2.png" alt="Du học Hàn Quốc">
                    <h3>MLB là gì? Thương hiệu MLB là của nước nào?</h3>
                    <p>MLB được biết đến là một thương hiệu thời trang, phụ kiện nổi tiếng được giới trẻ yêu thích.
                    Những thiết kế của thương hiệu này mang đến dấu ấn riêng biệt không thể nhầm lẫn.</p>
                </div>

                <div class="news-item">
                    <div class="date">
                        <span class="day">05</span>
                        <span class="month">Tháng 7</span>
                    </div>
                    <img src="/LAYOUT/img/products/airforce1.png" alt="Du học Miễn Phí">
                    <h3>Lịch sử ra đời Nike Air Force 1 </h3>
                    <p>Với những người yêu thích giày thể thao, Nike Air Force 1 (Nike AF1) chắc chắn là item cần phải có trong tủ giày của bạn.
                    Đây là đôi giày đặc trưng của thương hiệu Nike và đã trở thành đôi giày bán chạy nhất thế giới trong hơn 40 năm liên tiếp</p>
                </div>

                <div class="news-item">
                    <div class="date">
                        <span class="day">04</span>
                        <span class="month">Tháng 7</span>
                    </div>
                    <img src="/LAYOUT/img/products/yeezy1.png" alt="Visa Du Lịch Hàn Quốc">
                    <h3>Câu chuyện chi tiết về lịch sử của Yeezy</h3>
                    <p>Kể cả khi ngày phát hành đã trôi qua được gần 12 năm nhưng dòng thiết kế Air Yeezy 1 của Rapper đình đám Kanye West và
                    thương hiệu Nike vẫn là một huyền thoại còn được săn đón cho tới tận bây giờ.</p>
                </div>

            </div>
        </section>
    </body>
</html>



