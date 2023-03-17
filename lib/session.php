<?php

class Session{ 
    public static function init(){ //tạo các sesion ban đầu  khi ta thực hiện đăng nhập thanh toán thêm vào giỏ hàng sẽ lưu các phiên giao dịch khi chung ta refresh trang thì vẫn còn lưu không làm mới trang
        if (version_compare(phpversion(), '5.4.0', '<')){
            if (session_id() == '')
            {
                session_start();
            }
        }else {
            if (session_status() == PHP_SESSION_NONE)
            {
                session_start();
            }
        }
    }
    public static function set($key, $val) // thay đổi $key = $val ví dụ khi ta đăng nhập username = admin thì xuất ra giá trị admin
    {
        $_SESSION[$key] = $val;
    }
    public static function get($key)  // trả về các giá trị
    {
        if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        else{
            return false;
        }
    }
    public static function checkSession(){ // kiểm tra phiên làm việc có tồn tại hay không if == false thì quay trở lại về trang login.php
        self::init();
        if (self::get("adminlogin") == false)
        {
            self::destroy();
            header("Location:login.php");
        }
    }
    public static function checkLogin(){
        self::init();
        if (self::get("adminlogin") == true)
        {
            header("Location:index.php");
        }
    }
    public static function destroy() // xóa hoặc hủy phiên làm việc
    {
        session_destroy();
        header("Location:login.php");
    }
   
           
    
}
?>