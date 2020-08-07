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
    <title>User Account</title>
    <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    color:rgb(155,230,50);
    }
    h3{
    font-size: 30px;
    font-family: 'Crete Round';
    text-align: center;
    color: rgb(250, 190, 20);
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
  table {
  border-collapse: collapse;
  width: 50%;
}
td, th {
  font-size: 30px;
    font-family: 'Crete Round';
    text-align: center;
    color:  rgb(250, 110, 100);
  border: 1px solid #FFFF00;
  text-align: left;
  padding: 8px;
}
.center {
  display: flex;
  justify-content: center;
  align-items: left;
  height: 210px;
  padding: 8px;
  border: 3px solid yellow;
  margin-left:450px;
  margin-right:450px;
}

</style>
</head>
<body>

<?php
$see=$_POST['E-mail'];
$dee=$_POST['password'];

$conn= mysqli_connect("localhost","isro","14159265358979","moon soon");
$sql= 'SELECT id, names, govtid, email FROM curious ORDER BY id';
$sql1 = "SELECT email FROM curious WHERE email='$see'";
$sql2 = "SELECT pasword FROM curious WHERE pasword='$dee'";
$sql3= "SELECT names FROM curious WHERE email='$see'";
$sql4= "SELECT govtid FROM curious WHERE email='$see'";
$sql5= "SELECT created_at FROM curious WHERE email='$see'";
$sql6= "SELECT id FROM curious WHERE email='$see'";
$result= mysqli_query($conn, $sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);
$result6=mysqli_query($conn,$sql6);
$curious=mysqli_fetch_all($result, MYSQLI_ASSOC);
$curious1=mysqli_fetch_all($result1, MYSQLI_ASSOC);
$curious2=mysqli_fetch_all($result2, MYSQLI_ASSOC);
$curious3=mysqli_fetch_all($result3, MYSQLI_ASSOC);
$curious4=mysqli_fetch_all($result4, MYSQLI_ASSOC);
$curious5=mysqli_fetch_all($result5, MYSQLI_ASSOC);
$curious6=mysqli_fetch_all($result6, MYSQLI_ASSOC);

if(!empty($curious1) && !empty($curious2)){ ?>

<h2><u>Your Identity Card</u></h2>
<br>
<h3><div class="center">
ID:<?php echo ($curious6[0]['id']*100111+111);?><br>
Name:<?php echo $curious3[0]['names'];?><br>
Email:<?php echo $see?><br>
Government Id:<?php echo $curious4[0]['govtid'];?><br>
Joined at:<?php echo $curious5[0]['created_at'];?><br>
</div>
<?php 
/*echo '<h2><u>Curious Peoples</u></h2>'; ?>
<table>
  <tr><h3>
    <th>Name</th>
    <th>E-mail</th>
  </tr>
  <?php foreach ($curious as $key){ ?>
  <tr>
    <td><?php echo $key['names']?></td>
  <td><?php echo $key['email']?></td> <?php }


//foreach ($curious as $key){  //just like python..
//echo '<h3>';
  //echo $key['names'].'----'.$key['email'];
}*/
echo '<a href="index.html">
<input type="submit" value="Log Out">
</a>';
}
else{
  echo '<h2> Incorrect Email or Password.<br> Please Log-in properly</h2>';
  echo '<a href="login.html">
  <input type="submit" value="Back">
  </a>';
}
 ?>
 </table>

</body>
</html>
