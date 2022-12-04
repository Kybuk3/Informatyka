<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wedkowanie";
    $conn = new mysqli($servername, $username, $password, $dbname);
    function Skrypt1(){
        global $servername, $username, $password, $dbname,$conn;
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT nazwa, akwen, wojewodztwo FROM Lowisko l Inner JOIN Ryby r On r.id=l.Ryby_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nazwa"]. " plywa w rzece " . $row["akwen"]. " , " . $row["wojewodztwo"]."</li>"  ;
        }
        }}
    function Skrypt2(){
        global $servername, $username, $password, $dbname,$conn;
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id,nazwa,wystepowanie
        from Ryby
        Where styl_zycia = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
               
        }}}
    function Closed(){
        global $conn;
        $conn->close();

    }
?>