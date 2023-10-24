<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-primary">
    <form action="insert.php" method="POST">
    <div class="container">
        <div class="row justify-content-center bg-white m-auto mt-3 py-3 col-md-9">
            <h3 calss="text-align-center text-primary">Todo</h3>
            <div class="col-8">
                <input type="text" name="list" class="form-control">
            </div>
            <div class="col2">
                <button class="btn btn-outline-success">Add</button>
            </div>
        </div>
    </div>
    </form>

    <!-- getdata -->
    
     <?php
     include "config.php";
     $rowData = mysqli_query($conn, "SELECT `Id`, `list` FROM `tbltodo` WHERE 1");
     
     ?>

    <div class="container">
        <div class="col-9 bg-white m-auto mt-3">

    <table class="table">
        <tbody>
             <?php
             while($row = mysqli_fetch_array($rowData)){
             ?>
            <tr>
              <td> <?php echo $row["Id"] ?> </td>
              <td> <?php echo $row["list"] ?> </td>
              
              <td style="width: 10%"><a href="delete.php? ID=<?php echo $row["Id"] ?>" class="btn btn-danger">Delete</a></td>
              <td style="width: 10%"><a href="update.php? ID=<?php echo $row["Id"] ?>" class="btn btn-primary">Update</a></td>  
              
            </tr>
              <?php
              }
              ?>
        </tbody>
    </table>
    </div>
    </div>
    
</body>
</html>