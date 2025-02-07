<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - #CodepenChallenge | CSS Only Pagination</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<!-- Ideally, this is gonna be rendered by backend -->
	<!-- But still not practical, so I wouldn't recommend this -->
	<div class="backdrop">
		<div class="container">
			<h1>Vegetables</h1>
			<div class="vegetables">
				<ul class="list">
					<li>Carrot</li>
					<li>Tomato</li>
					<li>Broccoli</li>
					<li>Cucumber</li>
					<li>Spinach</li>
				</ul>
				<!-- Page 1 -->

				<ul class="list">
					<li>Potato</li>
					<li>Pepper</li>
					<li>Eggplant</li>
					<li>Lettuce</li>
					<li>Onion</li>
				</ul>
				<!-- Page 2 -->

				<ul class="list">
					<li>Zucchini</li>
					<li>Cauliflower</li>
					<li>Kale</li>
					<li>Cabbage</li>
					<li>Mushroom</li>
				</ul>
				<!-- Page 3 -->

				<ul class="list">
					<li>Asparagus</li>
					<li>Artichoke</li>
					<li>Radish</li>
					<li>Beet</li>
					<li>Okra</li>
				</ul>
				<!-- Page 4 -->

				<ul class="list">
					<li>Brussels Sprouts</li>
					<li>Green Bean</li>
					<li>Butternut Squash</li>
					<li>Turnip</li>
					<li>Chard</li>
				</ul>
				<!-- Page 5 -->
			</div>
			<div class="pagination">
				<span class="page-btn page-step" data-shown="1">&laquo;</span>
				<a href="index.php?page=1" class="page-btn page-step" data-shown="2">&laquo;</a>
				<a href="index.php?page=2" class="page-btn page-step" data-shown="3">&laquo;</a>
				<a href="index.php?page=3" class="page-btn page-step" data-shown="4">&laquo;</a>
				<a href="index.php?page=4" class="page-btn page-step" data-shown="5">&laquo;</a>
				<!-- Previous -->

				<a href="index.php?page=1" id="page-1" class="page-btn">1</a>
				<a href="index.php?page=2" id="page-2" class="page-btn">2</a>
				<a href="index.php?page=3" id="page-3" class="page-btn">3</a>
				<a href="index.php?page=4" id="page-4" class="page-btn">4</a>
				<a href="index.php?page=5" id="page-5" class="page-btn">5</a>
				<!-- Page numbers -->

				<a href="index.php?page=2" class="page-btn page-step" data-shown="1">&raquo;</a>
				<a href="index.php?page=3" class="page-btn page-step" data-shown="2">&raquo;</a>
				<a href="index.php?page=4" class="page-btn page-step" data-shown="3">&raquo;</a>
				<a href="index.php?page=5" class="page-btn page-step" data-shown="4">&raquo;</a>
				<span class="page-btn page-step" data-shown="5">&raquo;</span>
				<!-- Next -->

			</div>
			<?php $page = isset($_GET["page"]) == true ? $_GET["page"] : 0;
			echo "<br>" ?>
			<p class="result">Bạn đang ở trang thứ<?php echo $page; ?></p>
			
		</div>
		<style type="text/css">
				.content {
					text-align: center;
				}
				</style>
	</div>
	<!-- partial -->


</body>

</html>