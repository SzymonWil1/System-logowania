
<?php
$polaczenie = mysqli_connect("localhost", "root", "", "labolatorium");
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
    <title>Wyniki</title>
</head>
<body>
    <table>
        <tr>
            <th>Imie pacjenta</th>
            <th>Nazwisko pacjenta</th>
            <th>PESEL</th>
            <th>Data zlecenia</th>
            <th>Data wykonania</th>
            <th>Wyniki</th>
        </tr>
    <?php
    $zapytanie = "SELECT imie, nazwisko, pesel, Zlecenie.data, Wynik.data, plik FROM Pacjent JOIN Zlecenie ON Zlecenie.idPacjenta = Pacjent.id LEFT JOIN Wynik ON Zlecenie.id = Wynik.id;";
    $wynik = mysqli_query($polaczenie, $zapytanie);
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo "<tr>";
        echo "<td>";
        echo  $wiersz[0];
        echo "</td>";
        echo "<td>";
        echo  $wiersz[1];
        echo "</td>";
        echo "<td>";
        echo  $wiersz[2];
        echo "</td>";
        echo "<td>";
        echo  $wiersz[3];
        echo "</td>";
        echo "<td>";
        echo  $wiersz[4];
        echo "</td>";
        echo "<td>";
        if ($wiersz[5] != "") {
             echo "<a href='$wiersz[5]'>wyniki</a>";
        }
        echo "</td>";
        echo "</tr>";

    }
    ?>
    </table>
<a href="wyloguj.php">Wyloguj się.</a>

</body>
</html>
<?php
mysqli_close($polaczenie);


?>