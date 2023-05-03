<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"dbcrud");

if(isset($_POST["submit"]))
{
 $name=$_POST["name"];
 $address=$_POST["address"];
 $phone=$_POST["phone"];

 $sql="insert into student(name,address,phone) values('$name','$address','$phone')";
if(mysqli_query($connection,$sql))
{
    echo '<script>
        location.replace("index.php")
    </script>';
}
else{
echo "something error" . $connection->error;
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" style="width:30rem">
                <div class="card-header">
                   <h1> student curd app</h1>
                </div>
                <div class="card-body">
                <form action="add.php" method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" name="name" placeholder="enter the name">
            </div>
           
            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control" name="address" placeholder="enter the address">
            </div>
           
            <div class="form-group">
                <label >Mobile</label>
                <input type="number" class="form-control" name="phone" placeholder="enter the mobile number">
            </div>
           
            <input type="submit" class="btn btn-primary" name="submit" value="Register">
            </form>
                 </div>
            </div>
            </div>
        </div>
    </div>
</body> 
</html>