<?php 

	$string = 333;

	$sql = <<<sql
		 select * from ecs_users where user_id = $string
sql;
		//表示在<<<sql 界定符里 也可以解析变量  
		//注意: sql;这个结尾必须有分号，而且sql必须顶格，之前没有任何字符，包括空格。 sql可以换成其他字符
	echo $sql;   // print : select * from ecs_users where user_id = 333
 ?>