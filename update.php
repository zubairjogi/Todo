
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<?php
$id = $_GET["ID"];
include "config.php";
$Rdata = mysqli_query($conn, "SELECT * FROM tbltodo WHERE Id = $id");
$data = mysqli_fetch_array($Rdata);
?> 
<body>
    <form action="update1.php" method="POST"></form>
<div class="container">
        <div class="row justify-content-center bg-white m-auto mt-3 py-3 col-md-9">
            <h3 calss="text-align-center text-primary">Update</h3>
            <div class="col-8">
                <input type="text" value="<?php echo $data["list"]?>" name="list" class="form-control">
            </div>
            <div class="col2">
                <button class="btn btn-success">Update</button>
                <input type="hidden" name="id" value="<?php echo $data["Id"] ?>">
            </div>
        </div>
    </div>
    </form>
    
</body>
</html>