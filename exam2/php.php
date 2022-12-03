<?php 
    $based="wedkowanie"
    $user="root"
    $host="localhost"
    $password=""

    function Skrypt1(){
        $conn=mysqli_connect($host,$user,$password,$based)
        $question="SELECT r.nazwa, akwen, wojewodstwo FROM Lowisko l Inner JOIN Ryby r On r.id=L.Ryby_id";
        $result=$conn->query($question)
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "nazwa: " . $row[" r.nazwa"]. " plywa w rzece " . $row["akwen"]. " " . $row["wojewodstwo"]
        $conn->close();}
    }}
    function Skrypt1(){
        $conn = new mysqli($host, $user, $password, $based);
        $sql = "SELECT * FROM Lowisko";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "" . $row["id"]. "". $row["Ryby_id"]. "" .$row["akwen"].""$row["akwen"]."".$row["wojewodstwo"]."".$row["rodzaj"]
            }
        $conn->close();
    }}


?>