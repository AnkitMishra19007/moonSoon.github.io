<?php
//check connection

//writing query
//$sql= 'SELECT id, names, govtid, email FROM curious ORDER BY id';

//making query
//$result= mysqli_query($conn, $sql);

//fetch resulting rows as an associative array
//$curious=mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
//mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
    <style>
body {
  background-image: url("th.jpg");
  background-repeat: no-repeat; 
  background-size: cover;
}
h2{
    font-size: 40px;
    font-family: 'Crete Round';
    text-align: center;
    color: rgb(206, 209, 5);
    }
    h3{
    font-size: 30px;
    font-family: 'Crete Round';
    text-align: center;
    color: rgb(10, 250, 100);
    }
    input[type=submit]{
  background-color: rgb(162, 247, 216);
  font-size: large;
  padding: 5px 5px;
  font-family: 'Crete Round';
  margin: 4% 15%;
  box-sizing: border-box;
   border-radius: 10%;
   max-width: 460px;
      margin: 70px 45%;
  }
</style>
</head>
<body>

<?php
$see=$_POST['E-mail'];
$dee=$_POST['password'];
$conn= mysqli_connect("localhost","isro","14159265358979","moon soon");
$sql= 'SELECT id, names, govtid, email FROM curious ORDER BY id';
$result= mysqli_query($conn, $sql);
$sql1 = "SELECT email FROM curious WHERE email='$see'";
$sql2 = "SELECT pasword FROM curious WHERE pasword='$dee'";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$curious=mysqli_fetch_all($result, MYSQLI_ASSOC);
$curious1=mysqli_fetch_all($result1, MYSQLI_ASSOC);
$curious2=mysqli_fetch_all($result2, MYSQLI_ASSOC);

if(!empty($curious1) && !empty($curious2)){
echo '<h2><u>Curious Peoples</h2></u>';
foreach ($curious as $key){  //just like python..
echo '<h3>';
  echo $key['names'].'----'.$key['email'];
}}
else{
  echo '<h2> Incorrect Email or Password.<br> Please Log-in properly</h2>';
}
 ?>
    <a href="login.html">
        <input type="submit" value="Back">
        </a>
</body>
</html>
