<?php
session_start();
include ('koneksi.php');
$username = $_POST ['username'];
$password = $_POST ['password'];

$sql = "SELECT * from tb_user where username='$username' and password='$password'";
$query = mysqli_query ($conn,$sql);
if(mysqli_num_rows($query)==1){
  header ('Location:../app');
  $user = mysqli_fetch_array($query);
  $_SESSION['nama'] = $user['nama'];
  $_SESSION['level'] = $user['level'];
}
else if($username == '' || $password ==''){
    header ('Location:../index.php?error=2');
}
else{
    header ('Location:../index.php?error=1');
}

?>