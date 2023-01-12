<?php

require 'function.php';
//variabel untuk menampung id yang diambil dari database
$Id= $_GET["Id"];

if(deleteData($Id)>0){
      // echo "Data berhasil ditambahkan";
      echo "<script>
      alert('data berhasil dihapus');
      document.location.href='creatures.php';
          </script>";
      
  }else{
      // echo "Data gagal ditambahkan";
      echo "<script>
      alert('data gagal dihapus');
      document.location.href='creatures.php';
      
      </script>";
  }


?>