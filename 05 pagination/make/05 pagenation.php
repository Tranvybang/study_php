<html>
<head>

</head>
<body>
<div id="tnt_pagination">
<span class="disabled_tnt_pagination">Prev</span>
<a href="pagenagi.php?page=1">1</a>
<a href="pagenagi.php?page=2">2</a>
<a href="pagenagi.php?page=3">3</a>
<a href="pagenagi.php?page=4">4</a>
<a href="pagenagi.php?page=5">5</a>
<a href="#forward">Next</a>

</div>
<?php $page = isset($_GET["page"]) == true ? $_GET["page"] : 0 ?>
<p class="result"> Bạn đang ở trang thứ <?php echo $page?>


</body>
</html>