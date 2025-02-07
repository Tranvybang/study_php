<?php
$number = "15";
define("PI",3.14);
$new = PI + $number;

echo $new;

<form name="main-form" method="post" action="proccess.php">
<input type="text" name="email"/>
<input type="password" name="password"/>
<input type="submit" value="Submit Form"/>
</form>