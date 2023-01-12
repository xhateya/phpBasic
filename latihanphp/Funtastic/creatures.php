<?php
require 'function.php';
$creatures=query("SELECT * FROM Creatures");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatures</title>
    <link rel="stylesheet" type="text/css" href="creatures.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    

    <div class="table">
        <div class="table_header">
            <h1>Your Creatures</h1>
            <div>
                <input placeholder="Search"/>
                <a href="addDataC.php" class="add_new">+ Add New</a>
              
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Creatures</th>
                        <th>Code</th>
                        <th>Origin</th>
                        <th>Picture</th>
                        <th>Action</th>
                       
                    </tr>
                    <?php $i=1 ?>
                    <?php foreach($creatures as $row):?>
                    
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["Creatures"] ?></td>
                    <td><?php echo $row["Code"] ?></td>
                    <td><?= $row["Origin"] ?></td>
                    <td><img src="img/<?=$row["Picture"] ?>" alt="" width="100"></td>
                       <td>
                       <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="deleteData.php?Id=<?= $row["Id"];?>" onclick="return confirm('Kamu Yakin?')";><i class="fa-regular fa-eraser"></i></a>
                    </td>
                    </tr>
        <?php $i++ ?>
        <?php endforeach ?>
                </tbody>
            </table>
        </div>
       
    </div>
    
</body>
</html>