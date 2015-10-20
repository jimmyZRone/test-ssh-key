<?php
	require_once 'sqlHelper.class.php';
	require_once 'emp.class.php';
	class EmpService{
		
		public function getPagecount ($pagesize){
			$sql="select count(id) from emp";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql($sql);

			if($row=mysql_fetch_row($res)){
				$pagecount=ceil($row[0]/$pagesize);
			}
			//关闭资源
			mysql_free_result($res);
			//关闭连接
			$sqlHelper->close_connect();
			return $pagecount;
		}
		
		public function getlistByPage($pageNow,$pagesize){
			$sql="select * from emp limit ".($pageNow-1)*$pagesize.",$pagesize";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql2($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		public function getFenyepage($fenyepage){
			//创建一个 sqlHelper对象 
			$sqlHelper=new SqlHelper();
			$sql1="select * from emp limit ".($fenyepage->pageNow-1)*$fenyepage->pagesize.",".$fenyepage->pagesize;
			$sql2="select count(id) from emp";
			$sqlHelper->excute_dql_fenye($sql1, $sql2, $fenyepage);
			$sqlHelper->close_connect();
		}
		
		public function delEmpById($id){
			$sql = "delete from emp where id=$id";
			$sqlHelper = new SqlHelper();
			return $sqlHelper -> execute_dml($sql);
		}
		
		public function addEmp($name,$grade,$email){
			$sql = "insert into emp (name,grade,email) values('$name',$grade,'$email')";
			$sqlHelper = new SqlHelper();
			$res=$sqlHelper ->execute_dml($sql);
			$sqlHelper -> close_connect();
			return $res;
			
		}
		
		public function updateEmp($id){
			
			$sql="select * from emp where id=$id";
			$sqlHelper = new SqlHelper();
			$arr=$sqlHelper -> execute_dql2($sql);
			$sqlHelper->close_connect();
			$emp = new Emp();
			$emp ->setId($arr['0']['id']);
			$emp ->setName($arr['0']['name']);
			$emp ->setGrade($arr['0']['grade']);
			$emp ->setEmail($arr['0']['email']);
			//return $arr;
			return $emp;
		}
		
		public function updateEmpUI($id,$name,$grade,$email){
			
			$sql="update emp set name='$name',grade=$grade,email='$email' where id=$id";
			$sqlHelper = new SqlHelper();
			$res=$sqlHelper -> execute_dml($sql);
			$sqlHelper -> close_connect();
			return $res;
		}
			
	}
	
	

?>