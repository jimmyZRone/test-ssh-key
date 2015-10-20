<?php

	// 这是一个工具类，用来完成对数据库的各种操作
	class SqlHelper {
		private $conn;
		private $dbname = "userlogin";
		private $username = "root";
		private $password = "root";
		private $host = "127.0.0.1";
		public function __construct() {
			$this->conn = mysql_connect ( $this->host, $this->username, $this->password );
			// 判断下连接是否成功
			if (! $this->conn) {
				die ( "连接数据库失败" . mysql_error () );
			}
			mysql_select_db($this->dbname,$this->conn);
		}
		// 执行dql语句
		public function execute_dql($sql) {
			$res = mysql_query ( $sql, $this->conn ) or die ( mysql_error () );
			return $res;
		}
		//将结果集转移到一个数组里面去，我们就可以马上将这个结果集$res释放，返回去的是一个数组
		public function execute_dql2($sql) {
			$arr=array();
			$res = mysql_query ( $sql, $this->conn ) or die ( mysql_error () );
			$i=0;
			while($row=mysql_fetch_assoc($res)){
				$arr[$i++]=$row;
			}
			mysql_free_result($res);
			return $arr;
		}
		
		// 执行dml语句
		public function execute_dml($sql) {
			$b = mysql_query ( $sql, $this->conn ) or die ( mysql_error () );
			if (! $b) {
				return 0; // 失败
			}elseif (mysql_affected_rows ( $this->conn ) > 0) {
					return 1; // 成功
			}else {
				return 2; // 没有影响一行数
			}
		}
		
		public function close_connect() {
			if (! empty ( $this->conn )) {
				mysql_close ( $this->conn );
			}
		}
		
		public function excute_dql_fenye($sql1,$sql2,$fenyepage){
			$res1=mysql_query($sql1,$this->conn) or die(mysql_error());
			$arr=array();
			while($row=mysql_fetch_assoc($res1)){
				$arr[]=$row;
			}
			
			
			//释放资源
			mysql_free_result($res1);
			$res2=mysql_query($sql2,$this->conn) or die(mysql_error());
			//拿到$rowcount
			if($row=mysql_fetch_row($res2)){
				//算出$pagecount
				$fenyepage->pagecount=ceil($row[0]/$fenyepage->pagesize);
				$fenyepage->rowcount=$row[0];
			}
			
			//释放资源
			mysql_free_result($res2);
			//这里是我们封装的导航条
			$navigate="";
			if($fenyepage->pageNow>1){
			
				$perpage=$fenyepage->pageNow-1;
				$navigate="<a href='{$fenyepage -> goToUrl}?pageNow=$perpage'>上一页</a>&nbsp;";
			
			}
			
			if($fenyepage->pageNow<$fenyepage->pagecount){
			
				$nextpage=$fenyepage->pageNow+1;
				$navigate.="<a href='{$fenyepage -> goToUrl}?pageNow=$nextpage'>下一页</a>&nbsp;";
			}
			
			//整体翻十页
			//$pageNow=1;
			$page_whole=10;
			$start=floor(($fenyepage->pageNow-1)/$page_whole)*$page_whole+1;
			$index=$start;
			
			if($fenyepage->pageNow>$page_whole){
				$navigate.= "<a href='{$fenyepage -> goToUrl}?pageNow=".($start-1)."'><<&nbsp;</a>";
			}
			for(;$start<$index+$page_whole;$start++){
			
				$navigate.= "<a href='{$fenyepage -> goToUrl}?pageNow=$start'>[$start]</a>&nbsp;";
			}
			
			$navigate.= "<a href='{$fenyepage -> goToUrl}?pageNow=$start'>&nbsp;>></a>";
			
			
			
			$navigate.= "当前{$fenyepage->pageNow}页/共{$fenyepage->pagecount}页";
			$navigate.= "<br/><br/>";
			//把$arr赋给$Fenyepage这个实例对象
			$fenyepage->res_array=$arr;
			$fenyepage->navigate=$navigate;
		}
	}
	
?>