<html>
<head>
<title>修改用户</title>
<meta charset='utf-8'/>
</head>
<h1>修改用户</h1>
<form action="empProcess.php" method="post">
<table>
<tr><td>名字</td><td><input type="text" name="name"/></td></tr>
<tr><td>级别</td><td><input type="text" name="grade"/></td></tr>
<tr><td>电邮</td><td><input type="text" name="email"/></td></tr>
<tr><td><input type="hidden" name="flag" value="addEmp"/></td></tr>
<tr><td><input type="submit" value="确定"/></td><td><input type="reset" value="重新填写"/></td>
</tr>

</table>
</form>
</html>
