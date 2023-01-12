<?php

// koneksi ke Database
// host , username admin, password, nama database
$conn = mysqli_connect("localhost", "root", "", "Fantastic_beast");

function query($query){
    global $conn;
    //ambil data di database
$result = mysqli_query($conn ,$query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;

}
return $rows;
}

function addData($data){
    global $conn;
    $creatures = $data ["creatures"];
    $code = $data ["code"];
    $origin = $data ["origin"];
    $picture = $data ["picture"];

    $query = "INSERT INTO Creatures(creatures, code, origin,picture)VALUES ( '$creatures','$code','$origin','$picture')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function deleteData($Id){
    global $conn;
    mysqli_query($conn,  "DELETE FROM Creatures WHERE Id= $Id");

    return mysqli_affected_rows($conn);
}


?>