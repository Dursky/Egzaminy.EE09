<?php 
echo "<!DOCTYPE html>
<head>
    <meta charset='UFT-8'/>
    <title>piłka nozna</title>
    <link rel='stylesheet' href='styl2.css'/>
</head>
<body>
    <div id='baner'>
        <h3>Reprezentacja polski w piłce noznej</h3>
        <img src='obraz1.jpeg' alt='reprezentacja'>
    </div>
    <div id='blok-lewy'>
        <form  method='POST'>
            <select name='wybrane'>
                <option value='1'>Bramkarze</option>
                <option value='2'>Obroncy</option>
                <option value='3'>Pomocnicy</option>
                <option value='4'>Napastnicy</option>
            </select>
            <button type='submit'>Zobacz</button>
        </form>
        <img src='zad2.png' alt='piłka'>
        <p>Autor: 0000000000</p>
    </div>
    <div id='blok-prawy'>
        <ol>";
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $laczenie = mysqli_connect('localhost', 'root', '', 'egzamin');
                $zapytanie = mysqli_query($laczenie, 'SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = '.$_POST['wybrane']);
                while ($rekord = mysqli_fetch_array($zapytanie)) {
                    echo "<li>".$rekord[0]." ".$rekord[1]."</li>";
                }
                // mysqli_close($zapytanie);
          }
        echo "</ol>
    </div>
    <div id='blok-glowny'>
        <h3>Liga mistrzów</h3>
    </div>
    <div id='liga'>";
          $laczenie = mysqli_connect('localhost', 'root', '', 'egzamin');
          $zapytanie = mysqli_query($laczenie, 'SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC');
          
          while ($rekord = mysqli_fetch_array($zapytanie)) {
              echo "<div class='blok-druzyna'>
                <h2>".$rekord[0]."</h2>
                <h1>".$rekord[1]."</h1>
                <p>Grupa:".$rekord[2]."</p>
              </div>";
          }
          
          // mysqli_close($zapytanie);
      echo "
    </div>
</body>
</html>
";
?>