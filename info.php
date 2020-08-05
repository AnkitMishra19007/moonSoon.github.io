<?php
//check connection
$conn= mysqli_connect("localhost","isro","14159265358979","moon soon");
//writing query
$sql= 'SELECT id, names, govtid, email FROM curious ORDER BY id';

//making query
$result= mysqli_query($conn, $sql);

//fetch resulting rows as an associative array
$curious=mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);
mysqli_close($conn);

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
    font-size: 45px;
    font-family: 'Crete Round';
    text-align: center;
    color: rgb(206, 209, 5);
    }
    h3{
    font-size: 30px;
    font-family: 'Crete Round';
    text-align: center;
    color: rgb(206, 209, 5);
    }
</style>
</head>
<body>
<h2>Curious Peoples</h2>

<?php foreach ($curious as $key){   //just like python..
echo '<h3>';
echo htmlspecialchars($key['id']);
echo '<br>';
echo htmlspecialchars($key['names']);
echo '<br>';
echo htmlspecialchars($key['email']);
echo '<br>';
}
 ?>
</body>
</html>
