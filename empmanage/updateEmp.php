<html>
	<head>
		<title>修改用户</title>
		<meta charset='utf-8'/>
	</head>
<h1>修改用户</h1>
<?php 
		require_once 'empService.class.php';
		$id=$_GET['id'];
		//创建一个service对象
		$smpService = new EmpService();
		//$arr = $smpService -> updateEmp($id);
		$emp = $smpService -> updateEmp($id);
		
?>
	<form action="empProcess.php" method="post">
		<table>
			<tr><td>id</td><td><input readonly="readonly" type="text" name="id" value="<?php echo $emp -> getId()?>"/></td></tr>
			<tr><td>名字</td><td><input type="text" name="name"  value="<?php echo $emp -> getName() ?>"/></td></tr>
			<tr><td>级别</td><td><input type="text" name="grade" value="<?php echo $emp -> getGrade() ?>"/></td></tr>
			<tr><td>电邮</td><td><input type="text" name="email" value="<?php echo $emp -> getEmail() ?>"/></td></tr>
			<tr><td><input type="hidden" name="flag" value="updateEmp"/></td></tr>
			<tr><td><input type="submit" value="确定"/></td><td><input type="reset" value="重新填写"/></td>
			</tr>
		
		</table>
	</form>
</html>
