<?php
session_start();
$_SESSION["username"] = "Fatih";
$_SESSION["password"] = "rahasia";

echo "Berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
Cek Session</a>";
?>