<?php

$conn = mysqli_connect('localhost','root','','09-01-19.06');
$query_1 = mysqli_query($conn, 'SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia=1');

echo 
'<!DOCTYPE html> 
        <head>
            <title>Wędkujemy</title>
            <link rel="stylesheet" href="styl_1.css">
        </head>
        <body>
           <header>
                <h1>Portal dla wędkarzy</h1>
           </header>
            <div id="lewy">
                <h2>Ryby drapiezne naszych wód</h2>';

            echo '<ul>';
                while ($row = mysqli_fetch_array($query_1)){
                    echo '<li>'.$row['nazwa'].', występowanie: '.$row['wystepowanie'].'</li>';
                }
            echo '</ul>';

echo        '</div>
            <div id="prawy">
                <img src="ryba1.jpeg"/>
                <a href="kwerendy.txt" >Pobierz kwerendy</a>
            </div>
            <footer>
                <p>Stronę wykonał: xxxxx</p>
            </footer>
        </body>
</html>';

?>