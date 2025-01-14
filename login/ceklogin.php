<?php
session_start();
$SESSION['username'] = $_POST['username'];
$SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];


if($user == "admin" and $pass == "admin"){
echo "Anda berhasil login";
echo "<br>";
echo "Username : ". $user;
echo "<br>";
echo "Password : ". $pass;
echo "<br>";

echo "<a href='logout.php'>Logout</a>";

}else{
    echo "Maaf, username dan kata sandi anda tidak cocok";
    // echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}
?>