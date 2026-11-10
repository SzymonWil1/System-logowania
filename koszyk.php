<?php
session_start();
if (isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = "";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koszyk</title>
</head>
<body>
    <a href="koszyk.php?id=chleb">Chleb</a><br>
    <a href="koszyk.php?id=maslo">Masło</a><br>
    <a href="koszyk.php?id=smietana">Śmietana</a><br>
<hr>
    <?php
    if (isset($_GET['id'])) {
        $produkt = $_GET['id'];
        $_SESSION['koszyk'] .= $produkt." ";
        echo $_SESSION['koszyk'];
    }
    ?>
</body>
</html>