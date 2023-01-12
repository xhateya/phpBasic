<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "";
    if ($_SERVER[ "REQUEST_METHOD" ] == "POST")
{
    $name = htmlspecialchars($_POST["name"]);
    
}
?>
<h2>Contoh Form Validation dengan PHP</h2>
<form method = "post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Nama: <input type="text" name="name">
<br><br>
<input type = "submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Yang kamu inputkan: </h2>";
echo $name;
echo "<br>";
?>

</body>
</html>