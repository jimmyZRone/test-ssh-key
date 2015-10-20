<html>
<head>
	<meta charset='utf-8'/>
		<title>雇员列表</title>
<script type="text/javascript">
<!--
	function confirmDele(Val){
		return window.confirmDele("是否要删除id="+Val+"的用户");
	}
//-->
</script>
</head>

<?php
	require_once 'empService.class.php';
	require_once 'FenyePage.class.php';
	
	$empService = new EmpService;
	//看看用户是要分页还是要删除用户
	/*if (!empty($_GET['flag'])) {
		//如果不为空我们知道用户要删除,$id就=通过GET方式提交后，通过GET方式获取到的ID
		$id=$_GET['id'];
		$empService -> delEmpById($id);
	}*/
	//显示所有雇员信息
	//创建一个$fenyepage对象实例
	$fenyepage = new FenyePage();
	$fenyepage -> pageNow = 1;
	$fenyepage -> pagesize = 6;
	$fenyepage -> goToUrl = "emplist.php";

	//我们需要用户点击来修改$pageNow的值
	//但是我还需要判断下到底有没有这个pageNow指令发送过来，有的话我们就使用
	//如果没有，就默认显示第一页
	if(!empty($_GET['pageNow'])){
		//我们只需要处理不为空的，为空就默认为第一页，不为空我们就修改这个值
		$fenyepage->pageNow=$_GET['pageNow'];
	
	}
	
	
	$pagecount=$empService->getFenyepage($fenyepage);

	//循环取出
	echo "<table border='1' bordercolor='blue' cellspacing='0px' width='700px'>";
	echo "<tr><th>id</th><th>name</th><th>grade</th><th>email</th><th><a href='#'>删除用户</a></th><th><a href='#'>修改用户</a></th></tr>";
	$count = count($fenyepage->res_array);
	for($i = 0;$i < $count;$i++){
		$row=$fenyepage->res_array[$i];
		echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['grade']}</td><td>{$row['email']}</td>"."
		<td><a onclick='return confirmDele({$row['id']})'href='empProcess.php?flag=del&id={$row['id']}'>删除用户</a></td><td><a href='updateEmp.php?id={$row['id']}'>修改用户</a></td></tr>";
	}
	echo "<h1>雇员信息</h1>";
	echo "</table>";

	echo $fenyepage->navigate;
	
	/*$pageNow=1;
	$page_whole=10;
	$start=floor(($pageNow-1)/$page_whole)*$page_whole+1;
	$index=$start;
	if($pageNow>$page_whole){
		echo "<a href='emplist.php?pageNow=".($start-1)."'><<&nbsp;</a>";
	}
	for(;$start<$index+$page_whole;$start++){
		
		echo "<a href='emplist.php?pageNow=$start'>[$start]</a>&nbsp;";
	}
	
	echo "<a href='emplist.php?pageNow=$start'>&nbsp;>></a>";
	
	

	echo "当前{$fenyepage->pageNow}页/共{$fenyepage->pagecount}页";
	echo "<br/><br/>";*/
?>
	<form action="emplist.php">
		 跳转到：<input type="text" name="pageNow"/>
		 <input type="submit" value="GO">
	</form>
</html>