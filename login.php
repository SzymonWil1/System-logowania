
<?php
session_start();
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    if ($login == 'admin' && $haslo == 'TajneHaslo123') {
        $_SESSION['login'] = $login;
        header("location: wyniki.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projekt</title>
</head>
<body>
    <form method="post">
        <h2>Zaloguj sie do systemu</h2><br>
        <label for="login">Login: </label>
        <input type="text" name="login" id="login"><br>
        <label for="haslo">Hało: </label>
        <input type="password" name="haslo" id="haslo"><br>
        <input type="submit" value="Zaloguj">
    </form>
</body>

</html>