<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkowanie</title>
</head>
<body>

    <div class='header'>

        <p>Portal dla wędkarzy</p>

    </div>

    <div class="center">

        <div class="center_left">

            <div class="left1">

                <h3>Ryby zamieszkujące rzeki</h3>
                <?php
                require_once  'php.php';
                Skrypt1();
                ?>
            </div>


            <div class="left2">

                <h3>Ryby drapieżne naszych wód</h3>

                <table>
                    <tr>
                        <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                </table>
                <?php
                require_once  'php.php';
                Skrypt2();
                ?>
            </div>
        </div>

        <div class="BRUH">

        <img src="ryba1.jpg" alt="Sum">

        <a href="/kwerendy.txt">Pobierz kwerendy</a>
        </div>

    </div>

    <div class="footer">

        <p>Stronę wykonał: 00000000000</p>

    </div>
    
</body>
</html>