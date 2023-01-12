<?php
require 'function.php';

if(isset($_POST["submit"])){
    if(addData($_POST)> 0){
        // echo "Data berhasil ditambahkan";
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='creatures.php';
            </script>";
        
    }else{
        // echo "Data gagal ditambahkan";
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href='funtastic.php';
        
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addDataC.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Add New Creature</h2>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                <input type="text" name="creatures" required>
                    <span class="text">Creatures Name</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="col">
                <div class="inputBox">
                <input type="text" name="code" required>
                    <span class="text">Code</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                <input type="text" name="origin" required>
                    <span class="text">Origin</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="col">
                <div class="inputBox">
                <input type="text" name="picture" required>
                    <span class="text">Picture</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <input type="submit"  name="submit" value="Send">
            <!-- <button  type="submit" name="submit">Add Data</button> -->
            </div>
        </div>
        </form>



    </div>

    
</body>
</html>