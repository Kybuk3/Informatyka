<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname="baza"

    function select(){
        $conn=new mysqli($servername, $username, $password, $dbname);
        $script="select * from rezerwacje"
        $result = $conn->query($script);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "1 " . $row["Id"]. " 2 " . $row["typ"]. "3 " . $row["nazwa"]."4".$row["cena"]
            }}
        $conn->close();
        }
    function add($a,$b,$c,$d){
        $conn=new mysqli($servername, $username, $password, $dbname);
        $script="insert into rezerwacje values( ".$a.",".$b.",".$c.",",$d .")"
        $result = $conn->query($script);

    }


?>