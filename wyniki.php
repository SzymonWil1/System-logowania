<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "Witaj! ".$_SESSION['login'];
} else {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>