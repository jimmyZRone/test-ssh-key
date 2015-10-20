<meta charset="gbk">
<?php 

	$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x','y','z'));
	echo "<pre>";
	print_r($a);
	echo "<br><br>";
	var_dump($a);

	$var = file_get_contents("http://list.jd.com/670-677-680-0-0-0-0-0-0-0-1-1-1-1-1-72-4137-0.html");
	var_dump($var);

 ?>