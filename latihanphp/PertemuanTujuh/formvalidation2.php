<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $name_pesan = $email_pesan ="";
    $name = $email ="";

    // Cek apakah ada kirimnan form dari method post
    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        // Cek apakah field name kosong ?
        if(empty($_POST["name"])){
            $name_pesan = "Nama harus diisi";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $email_pesan = "Email harus diisi";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }
    }
    ?>
    <h2>Contoh Form Validation dengan PHP </h2>
 
    <form method ="post" action ="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
    Nama:<input type="text" name="name">
    <span class="error">* <?php echo $name_pesan;?></span>
    <br><br>
    Email: <input type ="text" name ="email">
    <span class ="error">* <?php echo $email_pesan ;?></span>
    <br><br>
    <input type ="submit" name="submit" value ="submit">
    </form>

    <?php
    echo "<h2>Yang kamu inputkan:</h2>";
    echo "Nama :".$name;
    echo "<br>";
    echo "E-mail:".$email;
    ?>
    
</body>
</html>