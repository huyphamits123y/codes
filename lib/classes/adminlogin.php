<?php
include '../lib/session.php';
Session::checkLogin();
include '../lib/database.php';
include '../helpers/format.php';

?>

<?php
class adminlogin 
{
    private $db;
    private $fm;

    public function __construct()
    {
        
        $this->db = new Database(); // gọi class database bằng biến db
        $this->fm = new Format();
    }
    public function login_admin($adminUser, $adminPass)
    {
        $adminUser = $this->fm->validation($adminUser); // kiểm tra user có hợp lệ hay không
        $adminPass = $this->fm->validation($adminPass);

        $adminUser = mysqli_real_escape_string($this->db->link,  $adminUser); // ket nối csdl
        $adminPass = mysqli_real_escape_string($this->db->link,  $adminPass);

        if (empty($adminUser) || empty($adminPass)) //kiẻm tra xem adminuser hoặc adminpass có trống hay không
        {
            $alert = "User and Pass must be not empty";
            return $alert;
        }
        else
        { 
            $query = "SELECT * FROM tbl_admin WHERE adminUser= '$adminUser' AND adminPass='$adminPass'  LIMIT 1";
            $result = $this->db->select($query); //chọn dữ liệu
            if ($result == true) // result đúng nghĩa là adminuser và adminpass nhập vào đúng
            {
                $value = $result->fetch_assoc(); // lấy dữ liệu
                Session::set("adminlogin", true);   // đã tồn tại admin này
                Session::set("adminId", $value['adminId']);
                Session::set("adminUser", $value['adminUser']);
                Session::set("adminName", $value['adminName']);
                header('Location:index.php');
            }

            else
            {
                $alert = "User and Pass not match"; // hiển thị thông báo ko trùng khớp
                return $alert;
            }
        }
           


    }
 
}


