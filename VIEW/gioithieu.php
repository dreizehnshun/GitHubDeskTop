<style>
    /* Đặt font và màu sắc mặc định cho trang */
body {
    font-family: Arial, sans-serif;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Khung chứa nội dung giới thiệu */
.khung-gt {
    padding: 20px;
    margin: 0 auto;
    max-width: 1200px;
    text-align: center;
}

/* Style cho tiêu đề chính */
h1 {
    color: #2c3e50;
}

/* Style cho phần nội dung */
p {
    font-size: 18px;
    line-height: 1.6;
    margin: 0 0 20px 0;
}

/* Style cho phần về chúng tôi */
.about {
    background-color: #f9f9f9;
    padding: 40px 20px;
}

/* Style cho bản đồ */
#map {
    height: 300px;
    width: 100%;
    margin-top: 20px;
}

/* Style cho sản phẩm nổi bật */
.products {
    padding: 40px 20px;
    background-color: #ffffff;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.product-card img {
    width: 100%;
    height: auto;
}

.product-info {
    padding: 15px;
}

.product-info h3 {
    margin: 0;
    color: #2c3e50;
}

.product-info p {
    color: #7f8c8d;
}

/* Hiệu ứng hover cho sản phẩm */
.product-card:hover {
    transform: scale(1.05);
}

</style>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Giày - StepUp</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9nwCwWTX2VRPkTJRIXOQYPYjoy7aAoRA&callback=initMap" async defer></script>

    <link rel="stylesheet" href="./LAYOUT/gioithieu.css">
</head>

<body>
        <div class="khung-gt">
            <h1>Chào mừng đến với EPIC FOOT !</h1>
            <p>Khám phá bộ sưu tập giày thời trang và chất lượng của chúng tôi.</p>
        </div>
    <main>
        <section class="about">
            <div class="khung-gt">
                <h2>Về chúng tôi</h2>
                <p>EPIC FOOT cung cấp những mẫu giày độc quyền, chất lượng hàng đầu với thiết kế thời thượng. Đến với chúng tôi, bạn sẽ tìm thấy sự hoàn hảo cho phong cách của mình.</p>
                <h3>Địa chỉ của chúng tôi</h3>
                <p>123, đường Tô Ký, phường Tân Thới Hiệp, Quận 12, Tp HCM</p>
                <div id="map"></div>
            </div>
        </section>
        <section class="products">
            <div class="khung-gt">
                <h2>Sản phẩm nổi bật</h2>
                <div class="product-grid">
                    <div class="product-card">
                        <img src="./LAYOUT/img/products/a1.png" alt="Giày thể thao">
                        <div class="product-info">
                            <h3>Giày thể thao</h3>
                            <p>Thiết kế năng động và bền bỉ cho mọi hoạt động thể thao.</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <img src="./LAYOUT/img/products/f1.png" alt="Giày công sở">
                        <div class="product-info">
                            <h3>Giày công sở</h3>
                            <p>Thanh lịch và chuyên nghiệp, hoàn hảo cho môi trường công sở.</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <img src="./LAYOUT/img/products/f3.png" alt="Giày mùa hè">
                        <div class="product-info">
                            <h3>Giày mùa hè</h3>
                            <p>Thoáng khí và nhẹ nhàng cho mùa hè oi ả.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        function initMap() {
            const shopLocation = { lat: 10.852286407186613, lng: 106.62691448619287 }; // Thay đổi tọa độ theo địa chỉ của bạn 10.852286407186613, 106.62691448619287
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: shopLocation,
                styles: [
                    {
                        "featureType": "all",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    }
                ]
            });
            new google.maps.Marker({
                position: shopLocation,
                map: map,
            });
        }
        window.onload = initMap;
    </script>
</body>
</html>
