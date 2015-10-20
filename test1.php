<meta charset='utf-8'/>
<?php
			//没有防止现在防止
			//先获取REFERER


			if(isset($_SERVRE['HTTP_REFERER'])){
			//取出来判断$_SERVRE['HTTP_REFERER']
			//是不是以http://test.com开始
				if(strpos($_SERVER['HTTP_REFERER'],"http://test.com")==0){

					echo "账号信息....";
				}else{
					//跳转到警告页面
					header("Location:err.php");
				}
			}else {
				//跳转到警告页面
				header("Location:err.php");
			}
?>