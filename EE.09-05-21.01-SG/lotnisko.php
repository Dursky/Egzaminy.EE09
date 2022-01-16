<?php
echo "
<!DOCTYPE html>
    <head>
        <meta charset='UTF-8' />
        <title>Port Lotniczy</title>
        <link rel='stylesheet' href='styl5.css' />
    </head>
    <body>
        <div id='baner'>
            <div id='baner-pierwszy'>
                <img src='zad5.png' alt='logo lotnisko'/>
            </div>
            <div id='baner-drugi'>
                <h1>Przyloty</h1>
            </div>
            <div id='baner-trzeci'>
                <h3>przydatne linkki</h3>
                <a href='kwerendy.txt'>Pobierz...</a>
            </div>
        </div>
        <div id='blok-glowny'>
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>";
            $laczenie = mysqli_connect('localhost','root','','EE.09-05-21.01-SG');
            $zapytanie = mysqli_query($laczenie, 'SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas DESC');
            while ($rekord = mysqli_fetch_array($zapytanie)) {
                echo "<tr>
                    <td>".$rekord[0]."</td>
                    <td>".$rekord[1]."</td>
                    <td>".$rekord[2]."</td>
                    <td>".$rekord[3]."</td>
                </tr>";
            }
            mysqli_close($laczenie);
            echo "</table>
        </div>
        <footer>
            <div id='stopka-pierwszy'>
            ";
            if($_COOKIE['wejscie']) { 
                echo "<p>Witaj ponownie na stronie lotniska</p>";
            } else {
              setcookie('wejscie','true', time() + 7200 );
              echo "<p>Dzień dobry! Strona lotniska uzywa ciasteczek</p>";
            }
            echo "
            </div>
            <div id='stopka-drugi'>
                <a>Autor: xxxxxxxx</a>
            </div>
        </footer>
    </body>
</html>
"

?>