<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css" type="text/css" />
  </head>
  <body>
    <section class="wrapper">
      <section class="banner">
        <h2>Wędkuj z nami!</h2>
      </section>
      <section class="lewy">
        <figure>
          <img src="ryba2.jpg" alt="Szczupak" />
        </figure>
      </section>
      <section class="prawy">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <?php

            $sever = 'localhost';
            $user = 'root';
            $passw = '';
            $db = 'wedkowanie';
            
            $conn = mysqli_connect($sever, $user, $passw, $db);

            if(!$conn) {
                echo 'Brak połaczenia z baza:' . mysqli_error($conn);
            } else {
                echo '<br>';
                
                $sql = 'SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia`=2;';
                $zapytanie = mysqli_query($conn, $sql);
                // print_r($zapytanie);

                if(mysqli_num_rows($zapytanie) > 0 ) {

                    while($wpisy = mysqli_fetch_row($zapytanie)) {
                        echo $wpisy[0].'. '. $wpisy[1].', występuje w: '. $wpisy[2] . '<br>';
                    }
                   echo '<br>'; 
                }
            }
            mysqli_close($conn);
        ?>
        <ol>
          <li>
            <a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a>
          </li>
          <li>
            <a href="https://www.pzw.org.pl/" target="_blank"
              >Polski Związek Wędkarski</a
            >
          </li>
        </ol>
      </section>
      <section class="stopka">
        <p>Stronę wykonał: PESEL</p>
      </section>
    </section>
  </body>
</html>
