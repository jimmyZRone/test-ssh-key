<html>
	<head>
	<meta charset='utf-8'/>
	</head>
	<h1>登陆页面</h1>
	<body>
		<form action="loginProcess.php" method="post">
			<table>
				<tr>
					<td>用户id</td><td><input type="text" name="id"/></td>
				</tr>
				<tr>
					<td>密 &nbsp;码</td><td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td><input type="submit" value="用户登陆"/></td>
					<td><input type="reset" value="重新登陆"/></td>
				</tr>
			</table>
		</form>
		<?php
			//要接收error信息
			if(!empty($_GET['error'])){

				//如果不为空就接收错误编码

				$error=$_GET['error'];
				if($error==1){

					echo "<font color='red' size='3'>用户名或密码错误</font>";
				}


			}

				
		?>
	</body>

</html>