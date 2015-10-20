<html>
<head>
	<meta charset='utf-8'/>
</head>
<?php

	$grades=$_REQUEST['grade'];

	//echo 'grade='.$grades;
	$grades=explode(" ",$grades);
	$allg=0;
	foreach($grades as $k=>$v){
		$allg+=$v;
	}
	echo "平均成绩=".$allg/count($grades);


?>
</html>
