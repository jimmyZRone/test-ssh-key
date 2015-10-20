<?php
	class mysqlTool{
		private $conn;
		private $host="127.0.0.1";
		private $user="root";
		private $password="root";
		private $db="php";

		//´´½¨Ò»¸ö¹¹Ôìº¯Êý
		function mysqlTool(){
			$this->conn=mysql_connect($this->host,$this->user,$this->password);
			//ÅÐ¶ÏÒ»ÏÂÁ¬½ÓÊý¾Ý¿âÊÇ·ñ³É¹¦
			if(!$this->conn){
				die("Á¬½ÓÊý¾Ý¿âÊ§°Ü".mysql_error());
			}
			mysql_select_db($this->db,$this->conn);
			mysql_query("set names gbk");
		}

		function execute_dql($sql){
			$res=mysql_query($sql,$this->conn);
		 	while($row=mysql_fecth_row($res)){
				foreach($row as $key=>$val){
					echo"$val";
				}
			}
			echo "<br/>";
		}

		function mysql_dml($sql){
			
			$b = mysql_query($sql,$this->conn);
			
			if(!$b){
				return 0;
			}else{
				if(mysql_affected_rows($this->conn)>0){
					return 1;
				
			}else{
				return 2;
			}
		}
	}
}
?>