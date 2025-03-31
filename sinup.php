<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            display: flex;
            margin: 0;
            padding: 0;
    background-image: url("https://getwallpapers.com/wallpaper/full/8/7/9/1207432-desktop-wallpapers-hd-1920x1200-1920x1200-1080p.jpg");
    background-size: cover;
        }

        .fir{
            position: relative;
            align-items: center;
            top: 7em;
            left: 30em;
            font-size: 1.2em;
            font-weight: 700;
            color: rgb(6, 255, 10)
          
        }
        .i{
            border: none;
            border-bottom: 1px solid #d77cf6;
            background: transparent;
            font-size: 20px;
            color: #d2dcd0;
            outline: none;
        
        }
        .y{
            background-color: #927c99;
            padding: 15px 30px;
            border-radius: 30px;
            outline: none;
            cursor: pointer;
            background: transparent;
            border: 3px solid rgba(35, 223, 217, 0.87);
            color: rgb(99, 208, 197);
            font-weight: 900;

        }
        .A{
            color: rgb(225, 250, 0);
        }


    </style>














</head>
<body>

<div class="fir">
        
        <h1 class="A">   SIGNUP </h1>
            <form action="http://localhost/mypro/test8.php" method="post">
                <label for="Name" class="a" >NAME</label>
                <br>
                <input type="text" class="i" name="name" required="fill your name">
                <br>
                <label for="mobile" class="a">Mobile Number</label>
                <br>
                <input type="text" class="i" name="phone" required="fill your mobile number">
                <br>
                <label for="email" class="a">Email</label>
                <br>
               <input type="email" class="i" name="email" required="email address">
               <br>
               <label for="user"> Username</label>
               <br>
               <input type="text" class="i" name="user" required="Enter your Username">
               <br>
               <label for="pass" class="">Password</label>
               <br>
               <input type="text" class="i" name="pass" required="Enter your password" id="pass">
               <br>
               <pre></pre>
               <input type="reset" value="Reset" class="y">
              
               <input type="submit" value="SAVE" class="y" id="su" >
    
    
    
    
    
    
            </form>
    
    
    
    
        </div>
        
        
    </body>
    </html>