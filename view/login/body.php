<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 28/01/2019
 * Time: 09:10
 */
?>

<div class="login-frame">
    <div class="content">
        <form class="login-form" action="http://localhost/project2/controller/login/login.php" autocomplete="off">
            <div class="title">Đăng nhập</div>
            <input class="username" name="login_username" type="text" placeholder="Tên đăng nhập" required>
            <input class="password" name="login_password" type="password" placeholder="Password" required>
            <button class="btnlogin" type="submit">Đăng nhập <i class="fas fa-sign-in-alt"></i></button>
            <div class="text-createAcc" id="text-createAcc"><i>Tạo tài khoản</i></div>
        </form>
    </div>

    <div class="createAccFrame">
        <form class="createForm" action="http://localhost/project2/controller/login/login.php" autocomplete="off">
            <div class="title">Đăng ký</div>
            <div class="createRow">
                <div class="title-cre">Họ và tên</div>
                <input class="input-content input-content-name" name="signup-name" type="text" placeholder="Họ và tên" required>
            </div>
            <div class="createRow">
                <div class="title-cre">Ngày sinh</div>
                <input class="input-content input-content-birth" name="signup-birth" type="date" placeholder="Tháng/Ngày/Năm" required>
            </div>
            <div class="createRow">
                <div class="title-cre">Số điện thoại</div>
                <input class="input-content input-content-phone" name="signup-phone" type="number" placeholder="034xxxxxxx" required>
            </div>
            <div class="createRow">
                <div class="title-cre">Chức vụ</div>
                <input class="input-content input-content-position" name="signup-position" type="text" placeholder="User" required>
            </div>
            <div class="createRow">
                <div class="title-cre">Mail</div>
                <input class="input-content input-content-username" name="signup-mail" type="email" placeholder="nguyenvana@gmail.com" required>
            </div>
            <div class="createRow">
                <div class="title-cre">Tên đăng nhập</div>
                <input class="input-content input-content-username" name="signup-username" type="text" placeholder="nguyenvana" required>
            </div>
            <div class="createRow">
                <div class="title-cre">Mật khẩu</div>
                <input class="input-content input-content-pass" name="signup-pass" type="password" placeholder="password" required>
            </div>
            <div class="createRow">
                <button class="btnsignup" type="submit">Đăng kí <i class="fas fa-sign-in-alt"></i></button>
            </div>
            <div class="createRow">
                <div class="text-createAcc" id="text-login"><i>Đã có tài khoản ? Đăng nhập</i></div>
            </div>
        </form>
    </div>
</div>
