<html>
<head>
        <meta content="text/html" charset="utf-8" http-equiv="Content-Type">
        <meta name="robots" content="index,unfollow">
        <meta name="description" content="Chào mừng đến trang web này">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
<div id="pagination">
<span class="the_pagination">Previous</span>
<a href="main.php?page=1">1</a>
<a href="main.php?page=2">2</a>
<a href="main.php?page=3">3</a>
<a href="main.php?page=4">4</a>
<a href="main.php?page=5">5</a>
<?php 
$page = isset($_GET["page"]) == true ? $_GET["page"] : 0 ;
$pageg = $page++;
?>
<a href="main.php?"<?php echo $pageg?>>forward</a>
</body>
</html>