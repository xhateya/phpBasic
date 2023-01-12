<?php
require 'function.php';

if(isset($_POST["submit"])){
    if(addData($_POST)> 0){
        // echo "Data berhasil ditambahkan";
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='funtastic.php';
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
    <link rel = "stylesheet" type = "text/css" href="addData.css">
    <title>Creatures</title>
</head>
<body>
    <h1>Add Creature</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">

    Creature: <input type="text" name="creatures" required>
    <br><br>
    Code: <input type="text" name="code" required>
    <br><br>
    Origin: <input type="text" name="origin" required>
    <br><br>
    Picture: <input type="text" name="picture" required>
    <br><br>
    <button type="submit" name="submit">Add Data</button>

    </form>

    <div id="added">
          <section class="main-containerr">
            <h2>Add some Creature! </h2>
              <p>and feel the <font color="#F46F29">
                Magic. <b></font></b>
              </p>
              <form id="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
                  <div class="input-set">
                      <input type="text" id="creatures" placeholder="Creature Name" class="input-form" name="creatures" required
                          maxlength="150"
                          pattern="^[a-zA-Z0-9_ ]*$"/>
                  </div>
                  <div class="input-set">
                      <input type="text" id="title" placeholder="Creature Name" class="input-form" name="creatures" required
                          maxlength="150"
                          pattern="^[a-zA-Z0-9_ ]*$"/>
                  </div>
                  <div class="input-set">
                      <input type="text" id="writer" placeholder="Book Writer" class="input-form"
                          maxlength="65" 
                          pattern="^[a-zA-Z0-9_ ]*$"  />
                  </div>
                  <div class="input-set">
                      <input type="date" id="copyright" 
                          class="input-form"
                          min="1500"
                          max="2000" />
                  </div>
                  <div class="button-set">
                      <button type="reset" class="Exit" id="exit">Exit</button>
                      <button type="submit" id="save">Save</button>
                  </div>
              </form>
          </section>
      </div>



    
</body>
</html>