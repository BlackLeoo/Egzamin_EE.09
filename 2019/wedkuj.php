<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css" type="text/css" />
  </head>
  <body>
    <section class="wrapper">
      <section class="banner">
        <h1>Portal dla wędkarzy</h1>
      </section>
      <section class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
<?php
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'wedkowanie';

        $conn = mysqli_connect($server, $user, $password, $db);

        if(!$conn) {
            echo 'Brak połaczenia z baza'.mysqli_error($conn) ;
        }else {
            // echo 'ok';

            $sql= "SELECT `nazwa`,`wystepowanie` FROM `ryby` WHERE `styl_zycia`=1";
            $zapytanie = mysqli_query($conn, $sql);
            // $wynik = mysqli_fetch_assoc($zapytanie);
            // print_r($wynik);
            if(mysqli_num_rows($zapytanie) > 0) {
                echo '<ul>';
                while($wynik = mysqli_fetch_assoc($zapytanie)) {
                        echo '<li>' . $wynik['nazwa'] .', występowanie: '. $wynik['wystepowanie'] . '</li>';
                }
                echo '</ul>';
            }

        }
        mysqli_close($conn);
?>      
      </section>
      <section class="prawy">
        <figure>
          <img src="ryba1.jpg" alt="Sum" />
        </figure>
        <a href="kwerendy.txt" target="_blank">Pobierz kwerendy</a>
      </section>
      <section class="stopka">
        <p>Stronę wykonał: PESEL</p>
      </section>
    </section>
  </body>
</html>