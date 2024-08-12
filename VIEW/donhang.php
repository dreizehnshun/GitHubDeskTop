
<style>
/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f4f8;
    margin: 0;
    padding: 0;
}

/* Form Container */
.container {
    max-width: 550px;
    margin: 40px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* Form Styles */
.viewcart {
    display: flex;
    flex-direction: column;
}

/* Header Styles */
h4 {
    margin-bottom: 20px;
    color: #333;
    font-size: 1.5rem;
    font-weight: 500;
}

/* Label Styles */
label {
    display: block;
    margin-bottom: 8px;
    font-size: 1rem;
    color: #555;
}

/* Input Styles */
input[type="text"], input[type="email"], select {
    width: 100%;
    padding: 12px;
    border: 2px solid #d1d9e6;
    border-radius: 5px;
    font-size: 1rem;
    box-sizing: border-box;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus, input[type="email"]:focus, select:focus {
    border-color: #007bff;
    outline: none;
}

/* Error Message Styles */
i {
    color: #dc3545;
    font-size: 0.875rem;
    display: none;
    margin-top: 5px;
}

/* Button Styles */
button.btn {
    width: 100%;
    padding: 12px;
    background-color: #28a745;
    border: none;
    color: #ffffff;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

button.btn:hover {
    background-color: #218838;
    transform: translateY(-2px);
}

/* Payment Method Styles */
.pttt {
    margin-top: 20px;
}

.pttt h3 {
    margin-bottom: 15px;
    font-size: 1.25rem;
    color: #333;
}

.pttt .payment-options {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.pttt .payment-option {
    display: flex;
    align-items: center;
    font-size: 1rem;
    color: #555;
}

.pttt input[type="radio"] {
    margin-right: 10px;
}

/* Responsive Design for Payment Methods */
@media (max-width: 768px) {
    .pttt .payment-options {
        flex-direction: column;
    }
}


</style>

<?php
$hasAccountChecked = '';

if (isset($_SESSION['s_user'])) {
  $userInfo = $_SESSION['s_user'];
  $username = $userInfo['username'];
  $email = $userInfo['email'];
  $diachi = $userInfo['diachi'];
  $dienthoai = $userInfo['dienthoai'];
  $hasAccountChecked = 'checked';
}
?>
<section>
  <div class="container">
    <form id="" action="index.php?pg=donhangsubmit" method="post" class="viewcart" onsubmit="return formvalidate();">
      <div id="userInfo1Container" class="form-group">
        <h4>Thông tin người đặt hàng</h4>
        <label for="name">Họ và Tên:</label>
        <input type="text" id="hoten" name="hoten">
        <br>
        <i id="name_empty">Tên không được để trống</i><br>

        <label for="tel">Số điện thoại:</label>
        <input type="text" id="dienthoai" name="dienthoai">
        <br>
        <i id="tel_empty">Số điện thoại không được để trống</i><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" >
        <br>
        <i id="email_empty">Email không được để trống</i>
        <i id="email_invalid">Email không hợp lệ</i><br>

        <label for="address">Địa chỉ:</label>
        <input type="text" id="diachi" name="diachi">
        <br>
        <i id="address_empty">Địa chỉ không được để trống</i><br>
      </div>
      <!-- Phương thức thanh toán -->
      <div class="pttt">
    <h3>Phương thức thanh toán</h3>
    <i id="pttt_empty">Vui lòng chọn phương thức thanh toán</i>
      <div class="payment-options">
            <label class="payment-option">
                <input type="radio" name="pttt" id="pttt1" value="1">
                Tiền mặt
            </label>
            <label class="payment-option">
                <input type="radio" name="pttt" id="pttt2" value="2">
                Ví điện tử
            </label>
            <label class="payment-option">
                <input type="radio" name="pttt" id="pttt3" value="3">
                Chuyển khoản
            </label>
            <label class="payment-option">
                <input type="radio" name="pttt" id="pttt4" value="4">
                Thanh toán online
            </label>
        </div>
    </div>

      <button class="btn btn-success" type="submit" name="donhang" style="cursor:pointer" onclick="formvalidate()">Đặt hàng</button>
    </form>
    <script>
      function toggleUserInfo() {
        // Lấy giá trị từ checkbox "Tôi đã có tài khoản"
        var hasAccountCheckbox = document.getElementById('hasAccountCheckbox');

        // Lấy phần tử chứa thông tin người đặt hàng 1 và người đặt hàng 2
        var userInfo1Container = document.getElementById('userInfo1Container');
        var userInfo2Container = document.getElementById('userInfo2Container');

        // Hiển thị hoặc ẩn phần thông tin người đặt hàng tùy thuộc vào giá trị của checkbox
        userInfo1Container.style.display = hasAccountCheckbox.checked ? 'none' : 'block';
        userInfo2Container.style.display = hasAccountCheckbox.checked ? 'block' : 'none';
      }

      function toggleRecipientInfo() {
        // Lấy giá trị từ checkbox "Nhận hàng tại địa chỉ khác"
        var useDifferentAddressCheckbox = document.getElementById('useDifferentAddressCheckbox');
        var useDifferentAddressText = document.getElementById('useDifferentAddressText');

        // Lấy phần tử chứa thông tin người nhận hàng
        var recipientInfoContainer = document.getElementById('recipientInfoContainer');

        // Hiển thị hoặc ẩn phần thông tin người nhận hàng tùy thuộc vào giá trị của checkbox
        recipientInfoContainer.style.display = useDifferentAddressCheckbox.checked ? 'block' : 'none';
      }

      function formvalidate() {
        // Lấy giá trị từ các trường nhập liệu
        var result = true;

        // Thông tin người đặt hàng
        var ten = document.getElementById('hoten').value;
        var email = document.getElementById('email').value;
        var diachi = document.getElementById('diachi').value;
        var tel = document.getElementById('dienthoai').value;
        var pttt1 = document.getElementById('pttt1').checked;
        var pttt2 = document.getElementById('pttt2').checked;
        var pttt3 = document.getElementById('pttt3').checked;
        var pttt4 = document.getElementById('pttt4').checked;


        // Kiểm tra nếu có trường nào không nhập hoặc nhập sai
        if (ten.length === 0) {
          document.getElementById('name_empty').style.display = "block";
          result = false;
        } else {
          document.getElementById('name_empty').style.display = "none";
        }

        if (tel.length === 0) {
          document.getElementById('tel_empty').style.display = "block";
          result = false;
        } else {
          document.getElementById('tel_empty').style.display = "none";
        }

        if (email.length === 0) {
          document.getElementById('email_empty').style.display = "block";
          document.getElementById('email_invalid').style.display = "none";
          result = false;
        } else {
          document.getElementById('email_empty').style.display = "none";
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
            document.getElementById('email_invalid').style.display = "block";
            result = false;
          } else {
            document.getElementById('email_invalid').style.display = "none";
          }
        }

        if (diachi.length === 0) {
          document.getElementById('address_empty').style.display = "block";
          result = false;
        } else {
          document.getElementById('address_empty').style.display = "none";
        }

        if (!(pttt1 || pttt2 || pttt3 || pttt4)) {
          document.getElementById('pttt_empty').style.display = "block";
          result = false;
        } else {
          document.getElementById('pttt_empty').style.display = "none";
        }

        return result;

      }
    </script>
</section>