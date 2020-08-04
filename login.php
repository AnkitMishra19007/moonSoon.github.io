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
        <h2><u>Log In to access your Identity Card</h2></u> 
        <form action="#" method="POST">
            <label for="fname">SIMC ID:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="SIMC Number">SIMC Number:</label><br>
            <input type="password" id="SIMC Number" name="SIMC Number"><br><br> <!--Special Identity for moon citizenship-->
            <input type="submit" value="Log In">
          </form>
    </body>
</html>