<?php

require 'function.php';
//variabel untuk menampung id yang diambil dari database
$id= $_GET["id"];

if(hapusData($id)>0){
      // echo "Data berhasil ditambahkan";
      echo "<script>
      alert('data berhasil dihapus');
      document.location.href='index.php';
          </script>";
      
  }else{
      // echo "Data gagal ditambahkan";
      echo "<script>
      alert('data gagal dihapus');
      document.location.href='index.php';
      
      </script>";
  }


?>