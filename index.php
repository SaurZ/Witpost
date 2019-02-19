<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "";
   }
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>witPost | Welcome</title>
    <meta charset = utf-8>
    <meta name="viewport" content="width=device-width">
    <meta name="author:Sourabh Sharma" content="witPost, &copy; 2019">
</head>
    
<body style="width:100%; background:url(images/body_background.jpg) no-repeat; background-size:100%;">    
    
    
    <center>
        <div class="bg">
            <div id="l">
                <img src="images/logo.png" width="400px" height="auto">
            </div>
            <div class="m-si-i">
                <form method="post" action="login_user.php">
                    <div id="m-si-i-1">
                        <input spellcheck="false" type="text" placeholder="Username" name="username">
                    </div>
                    <div id="m-si-i-2"> 
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div id="m-si-uc">
                        <div class="m-si-uc-dd">
                            <button class="m-si-uc-db">Sign In</button>
                        </div>
                    </div>    
                </form>
            </div>
            <div class="m-su-r-bg">
                <div id="m-su-r">
                    <p>New to witPost?</p><p><a href="signup.php">Get Started</a></p>
                </div>
                <div id="footer-init" style="font-size:20px; color:#ffffff;">
                    <p>witPost &copy; 2019</p>
                </div>
            </div>
        </div>    
    </center>    
</body>
    
</html>