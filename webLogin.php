<?php
require "webConn.php";
$user_name = $_POST["stu_name"];
$user_pass = $_POST["stu_pword"];

$mysql_qry = "select * from connectnus_userdata where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "login success";
}
else {
echo "login fail";
}
?>