<?php $conn= mysqli_connect("localhost","isro","14159265358979","moon soon"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
  font-size: 25px;
  font-family: 'Crete Round';
  text-align: center;
  color: rgb(206, 209, 5);
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

<body>
<?php
$c=1;
if(empty($_POST["fname"])){
  echo "<h3>A name is required</h3><emsp>";
}
else{
  $fname=$_POST['fname'];
  if(!preg_match('/^[a-zA-Z\s]+$/',$fname)){  #validation of name
    echo '<h3>Name should be conventional</h3>';
    $c=0;
  }
}
if(empty($_POST["E-mail"])){
  echo "<h3>E-mail is required</h3><emsp>";
}
else{
  $email=$_POST['E-mail'];
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ #basic validation of email
    echo '<h3>Email is not valid</h3>';
    $c=0;
  }
}
if(empty($_POST["GovermentId"])){
  echo "<h3>Goverment Id is required</h3><emsp>";
}
if(empty($_POST["password"])){
  echo "<h3>Password is required</h3>";
}
if($c==1 && !empty($_POST["fname"]) && !empty($_POST["E-mail"]) && !empty($_POST["GovermentId"]) && !empty($_POST["password"])){
  echo '<h2>Form submitted successfully</h2><br>
  <h3>To process on the data and validate it, we may take upto 3 days So please bare with us. We will let you know about the future steps through e-mails.
    We appreciate your curiosity and wish you best of luck for ahead.</h3><br>
    <a href="index.php">
  <input type="submit" value="Main Page">
  </a>';

  $email= mysqli_real_escape_string($conn,$_POST['E-mail']);
  $fname= mysqli_real_escape_string($conn,$_POST['fname']);
  $GovermentId= mysqli_real_escape_string($conn,$_POST['GovermentId']);
  $password= mysqli_real_escape_string($conn,$_POST['password']);

  $sql= "INSERT INTO curious(names, govtid, email, pasword) VALUES('$fname','$GovermentId','$email','$password')";

  //saving to database and checking
  if(mysqli_query($conn,$sql)){

  }
  else{
    echo '<h1>ERROR</h1>';
  }
}
else{
  echo '<a href="signup.php">
<input type="submit" value="Fill now">
</a>';
}



?>
</body>
</html>