<html>
	<head>
	<meta charset='utf-8'/>
	</head>
	<body>
	<h1>学生成绩单</h1>
<?php
	error_reporting(E_ALL^E_NOTICE);

	$grades1=$_REQUEST['grade'];

	//echo 'grade='.$grades;
	$grades=explode(" ",$grades1);
	$allg=0;
	foreach($grades as $k=>$v){
		$allg+=$v;
	}
?>	
	<form action='array.php' method='post'>
	<input type='text' name='grade' value="<?php echo $grades1; ?>"/>
	<input type='submit' value='开始计算'/>
	</form>
	</body>
<?php
	echo "平均成绩=".$allg/count($grades);
?>
</html>