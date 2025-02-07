<html lang="vn"> 
 <head> 
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="./style.css"> 
 </head>
 <body>
<?php 
$username = $_POST["username"];
$password = $_POST["password"];

$result = ($username == "admin" && $password == "123") ? "Đăng nhập thành công" : "Bạn nhập sai thông tin";
?>

<div class="result">
<?php
echo "$result";
echo "<br>";
echo "Tên đăng nhập của bạn";
echo "<br>";
echo "$username";
echo "<br>";
echo "Mật khẩu của bạn";
echo "<br>";
echo "$password";
?>
</div>
<div id="pagination">
<span class="the_pagination">Previous</span>
<a href="main.php?page=1">1</a>
<a href="main.php?page=2">2</a>
<a href="main.php?page=3">3</a>
<a href="main.php?page=4">4</a>
<a href="main.php?page=5">5</a>
<?php 
$page = isset($_GET["page"]) == true ? $_GET["page"] : 1 ;
$pageg = $page + 1;
?>
<a href="main.php?page=<?php echo $pageg?>">forward</a>



</div>
 </body>