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
        }
        .back{
            position: relative;
            width: 100%;
            height: 50em;
           
            background-size: cover;
            background-position: center ;
            background-image: linear-gradient(rgba(14, 26, 28, 0.815),rgba(8, 19, 20, 0.618)),url("https://www.pixelstalk.net/wp-content/uploads/2016/06/Beautiful-night-Images-hd.jpg");

           
           




        }






         .click{
        display: flex;
        position: absolute;
        align-self: center;
        background: rgb(217, 168, 168);
        
       }
       .z{
        position: relative;
        width: 200px;
        color: black;
        background-color: antiquewhite;
        margin: 40px 10px;
        padding: 15px 0;
        font-size: 25px;
        border: 2px solid rgb(126, 12, 240);
        border-radius: 100px;
        box-shadow: 1px 1px 3px 3px rgb(71, 234, 223);
        font-weight: bolder;
        cursor: pointer;
       }
.i{
    border: none;
    border-bottom: 1px solid #3beebe;
    background: transparent;
    font-size: 20px;
    color: #dd1f1f;
    outline: none;

}
.ik{
   font-weight: bolder;
   font-size: 20px;
   color: #08eaae;
}
span{
    position: absolute;
    top: 1.6em;
    left: 15em;
    font-size: 3em;
    font-weight: 900;
    cursor:grab;
    
    color:blue;
}
.n{
    position: absolute;
    top: 10em;
    left: 29em;
  
   
    
}









    </style>
</head>
<body>


    <div class="back">
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         
            <div class="n"> 
               <form action="http://localhost/mypro/pass.php" method="post">
                  <label for="username" class="ik">Username</label>
                  <br>
                  <input type="text" class="i" placeholder="Enter your Username" name="uname">
                  <br><br>
                  <label for="password" class="ik">Password</label>
                  <br>
                  <input type="text" class="i" placeholder="Password" name="pa" id="pass">
                  <br><br>
                  <input type="checkbox" value="Remember Me" class="ik">
                  <label for="rem" class="ik">Remember Me</label>
                  <br>
                  <input type="submit" class="z" value="Login" id="su" onclick="myFunction()">
                
                  
              </form>
              
              </div>
          </div>
          </div>
      
    
    
</body>
</html>