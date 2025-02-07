<?php
$username = $_POST["username"];
    $password = $_POST["password"];

    $result = ($username == "admin" && $password == "123") ?  "Đăng nhập thành công" : "Đăng nhập thất bại";
  ?>
    <div class="content">
    <?php
    echo $result;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $password
    ?>
        </div>
    <style type="text/css">
    *{margin: 60px auto;
        padding: 0px ;
    }
    .content{
    background: pink;
    line-height: 300px;
    text-align: center;
    margin: 10px auto;
    color: red;
    }
    </style>
    