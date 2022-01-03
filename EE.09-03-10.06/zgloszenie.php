<?php
$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];

$laczenie = mysqli_connect('localhost','root','','EE.09-03-19.06');
$tekst = 'INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (0, '.$lowisko.', "'.$data.'", "'.$sedzia.'")';
$zapytanie = mysqli_query($laczenie, $tekst);

if ($zapytanie == true) {
    echo 'Zapytanie poprawne';
} else {
    echo 'Zapytanie nie poprawne'.$zapytanie;
}

mysqli_close($laczenie);
?>