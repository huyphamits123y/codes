<?php
echo $adminUser = $_POST['adminUser'];
echo $adminPass = $_POST['adminPass'];
$conn = new mysqli('localhost:3307', 'root', '', 'test');
$sql = "SELECT * FROM tbl_admin where adminUser='$adminUser'";
$result = $conn->query($sql)->fetch_assoc();

if ($result['userPass'] == $userPass){
    echo 'dang nhap thanh cong';
}
else
{
    echo 'dang nhap sai thong tin';
}

$conn->close();

?>
