<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep papierniczy</title>
</head>
<body>

    <div class = "Baner">

        <h3>W naszym sklepie internetowym kupisz najtaniej</h3>

    </div> 
    <div class = "Container">

        <div class = "Lewy">

            <h2>Promocja 15% obejmuje artykuły:</h2>

            <ul class="Lista">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sklep";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $sql ="SELECT t.Nazwa  FROM `towary` t JOIN `dostawcy` d ON t.id=d.IdDostawcy Where d.promocja is NOT NULL";
                    $result = $conn->query($sql);
                    foreach($result as $row) {
                        echo '<li>'.$row["Nazwa"].'</li>';
                    };

                    $conn->close();
                ?>
            </ul>

        </div>

        <div class = "Srodkowy">

            <h2>Cena wybranego artykułu w promocji</h2>
            <form action='index.php' method='Post' class='Form'>

            <select typqe='select' name='towar' > 
                <option value='Gumka do mazania'>Gumka do mazania</option>
                <option value='Cienkopis'>Cienkopis</option>
                <option value='Pisaki 60 szt.'>Pisaki 60 szt.</option>
                <option value='Markery 4 szt.'>Markery 4 szt.</option>
            </select>

            <input type='submit' name='submit'  value='Wybierz'> 
            
            </form>
            <?php
            error_reporting(E_ALL ^ E_WARNING); 
            
            if($_POST['submit'] == "Wybierz"){
                $val=$_POST['towar'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sklep";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql ="SELECT d.cena  FROM `towary` t JOIN `dostawcy` d ON t.id=d.IdDostawcy Where t.Nazwa='$val'";
                $result = $conn->query($sql);
                foreach($result as $row) {
                    echo round($row["cena"]*0.85, 2) ;
                };
                $conn->close();
            }
            ?>
        </div>

        <div class = "Prawy">

            <h2>Kontakt</h2>
            <p>telefon: 123123123</p>
            <p>e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="./promocja2.png" alt = "promocja" class="Obraz">

        </div>

    </div>

    <div class = "Stopka">

        <p>Autor strony:</p>

    </div>

    
    
</body>
</html>

