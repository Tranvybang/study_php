
<html lang="vn"> 
 <head> 
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="./style.css"> 
 </head>
 <body>
<?php
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $result = ($username == "admin" && $password == "123") ?  "Đăng nhập thành công" : "Đăng nhập thất bại";
    ?>
 
 <div class="content">
    <?php
    echo "<h2>$result</h2>";
    echo "<br>";
    echo "<h2>$username</h2>";
    echo "<br>";
    echo "<h2>$password</h2>";
   ?>
   </div>
 </body>
   </html>