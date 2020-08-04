<!DOCTYPE HTML>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
        <style>
            
            body { background-image: url("th.jpg");
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;}
            h2{
                font-size: 45px;
                font-family: 'Crete Round';
                text-align: center;
                color: rgb(206, 209, 5);
            }
            input[type=text]{
            width: 50%;
            font-family: 'Crete Round';
            font-size: medium;
            padding: 5px 5px;
            margin: 8px 0;
            box-sizing: border-box;
            background-color: rgb(162, 247, 216);
            border-radius: 10%;
            }
            input[type=password]{
            width: 50%;
            font-size: medium;
            background-color: rgb(162, 247, 216);
            font-family: 'Crete Round';
            padding: 5px 5px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 10%;
            }
            input[type=submit]{
                background-color: rgb(162, 247, 216);
                font-size: large;
                padding: 5px 5px;
                font-family: 'Crete Round';
            margin: 4% 15%;
            box-sizing: border-box;
            border-radius: 10%;
            }
            label{
                text-align: center;
                font-family: 'Crete Round';
                font-size: large;
                color: rgb(206, 209, 5);
            }
            form{
               max-width: 460px;
               margin: 70px auto;
               padding: 20px; 
            }
        </style>
    </head>
    <body>
        <h2><u>Sign up to create Identity Card</h2></u> 
        <form action="valid.php" method="POST">
            <label for="fname">Name:</label>
            <input type="text" id="fname" name="fname"><br>
            <label for="E-mail">E-mail:</label>
            <input type="text" id="E-mail" name="E-mail"><br>
            <label for="GovermentId">Govt. Id:</label>
            <input type="text" id="GovermentId" name="GovermentId"><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Sign Up">
          </form>
    
    </body>
</html>