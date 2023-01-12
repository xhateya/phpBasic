<?php

// koneksi ke Database
// host , username admin, password, nama database
$conn = mysqli_connect("localhost", "root", "", "cruddb");

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

function tambahData($data){
    global $conn;
    $nama = $data ["nama"];
    $nis = $data ["nis"];
    $email = $data ["email"];
    $jurusan = $data ["jurusan"];
    $gambar = $data ["gambar"];

    $query = "INSERT INTO siswi VALUES ('', '$nama','$nis','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapusData($id){
    global $conn;
    mysqli_query($conn,  "DELETE FROM siswi WHERE id= $id");

    return mysqli_affected_rows($conn);
}


?>