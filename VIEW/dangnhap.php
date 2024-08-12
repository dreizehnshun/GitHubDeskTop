<style>
    /* Style for the form container */
    .form-container {
        width: 400px;
        margin: 100px auto;
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background: #f9f9f9;
    }

    /* Style for the form heading */
    .form-container h3 {
        font-size: 24px;
        color: #333;
    }

    /* Style for form inputs and select */
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
        box-sizing: border-box; /* Add this for consistent sizing */
    }

    /* Style for the submit button */
    .form-container input[type="submit"] {
        background: #088178;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for the "Đăng nhập" link */
    .form-container p a {
        text-decoration: none;
        color: #007bff;
    }

    /* Style for the "Đăng nhập" link on hover */
    .form-container p a:hover {
        text-decoration: underline;
    }

    /* Style for the password container */
    .password-container {
        position: relative;
        width: 100%;
    }

    /* Style for the password input */
    .password-input {
        width: calc(100% - 30px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    /* Style for the password toggle button */
    .password-toggle {
        padding: 8px;
        position: absolute;
        background-color: #ffff;
        border: 0px;
        border-radius: 10px;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>

<div class="form-container">
    <form action="index.php?pg=login" method="post">
        <h3>Đăng nhập</h3>
        <input type="text" name="username" required placeholder="Tên đăng nhập"><br>
        <div class="password-container">
            <input type="password" id="password" class="password-input" name="password" required placeholder="Nhập mật khẩu">
            <button type="button" class="password-toggle" onclick="togglePassword()">Hiện</button>
        </div>
        <p style="color:red">
            <?php
                if(isset($_SESSION['tb_dangnhap']) && $_SESSION['tb_dangnhap']!=''){
                    echo $_SESSION['tb_dangnhap'];
                    unset($_SESSION['tb_dangnhap']);
                }
            ?>
        </p>
        <input type="submit" name="dangnhap" value="Đăng Nhập" class="form-btn"><br>
        <p>Không có tài khoản? <a href="index.php?pg=dangky">Đăng ký ngay bây giờ</a></p>
    </form>
</div>

<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
    }
</script>
