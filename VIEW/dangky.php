<style>

.form-container {
    width: 400px;
    margin: 100px 40% 100px;
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: #f9f9f9;
}


.form-container h3 {
    font-size: 24px;
    color: #333;
}


.form-container input[type="text"],
.form-container input[type="password"],
.form-container input[type="email"],
.form-container select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.form-container input[type="submit"] {
    background: #088178;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}


.form-container p a {
    text-decoration: none;
    color: #007bff;
}

.form-container p a:hover {
    text-decoration: underline;
}

</style>


   


<div class="form-container">

   <form action="index.php?pg=adduser" method="post" onsubmit="return validateForm()">
      <h3>Đăng ký</h3>
      
      <input type="text" id="fname" name="username" placeholder="Tên Đăng Nhập" required><br>
      
      <input type="text" id="fname" name="ten" placeholder="Tên của mày" required><br>

      <input type="text" id="fname" name="dienthoai" placeholder="Số điện thoại" required><br>
      
      <input type="text" id="fname" name="diachi" placeholder="Địa chỉ" required><br>


      <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required><br>

      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Xác nhận mật khẩu" required><br>

      <input type="email" id="lname" name="email" placeholder="Nhập email của bạn" required><br>
      

      <!-- <select name="user_type" required>
         <option value="0">Người dùng</option>
         <option value="1">Quản trị viên</option>
      </select><br> -->
      <input type="submit" name="dangky" value="Đăng ký" class="form-btn">
      
      <p>Bạn đã có tài khoản?<a href="index.php?pg=dangnhap">Đăng nhập</a></p>
   </form>

   <script>
      function validateForm() {

         var password = document.getElementById('password').value;
         var confirmPassword = document.getElementById('confirmPassword').value;


         if (password !== confirmPassword) {
            alert('Mật khẩu và xác nhận mật khẩu không khớp.');
            return false; 
         }

         return true;
      }
   </script>
</div>
