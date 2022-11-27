<?php 
    $BASED="wedkowanie"
    $USER="root"
    $HOST="localhost"
    $PASSWORD=""

    function Skrypt1(){
        $conn=mysqli_connect($HOST,$USER,$PASSWORD,$BASED)
        $question="SELECT r.nazwa, akwen, wojewodstwo FROM Lowisko l Inner JOIN Ryby r On r.id=L.Ryby.id";
        $result=$conn->query($question)
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "nazwa: " . $row[" r.nazwa"]. " plywa w rzece " . $row["akwen"]. " " . $row["wojewodstwo"]
        $conn->close();}
    }}
    function Skrypt1(){
        $conn = new mysqli($HOST, $USER, $PASSWORD, $BASED);
        $sql = "SELECT * FROM Lowisko";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "" . $row["id"]. "". $row["Ryby_id"]. "" .$row["akwen"].""$row["akwen"]."".$row["wojewodstwo"]."".$row["rodzaj"]
            }
        $conn->close();
    }}


?>