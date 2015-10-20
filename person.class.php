<meta charset='utf-8'/>
<?php
	class person{
		public $name;
		public $age;
		public function speak(){
			echo"我是一个好人!";
		}
		public function count1(){
			$res=0;
			for($i=1;$i<=100;$i++){
				$res+=$i;
			}
			return $res;
		}
		public function count2($n){
			$res=0;
			for($i=0;$i<=$n;$i++){
				$res+=$i;
			}
			return $res;
		}
		public function add($num1,$num2){
				return $num1+$num2;
		}
		public function findMax($arr){
			//先假设数组中的第一个数，是最大的数。
			$maxVal=$arr[0];
			//这是最大数的下标值。
			$maxIdex=0;
			for($i=1;$i<count($arr);$i++) {
			//如果认为的第一个最大的数小于了$i，则证明第一个数， 不是最大的数。
				if($maxVal<$arr[$i]) {
					$maxVal=$arr[$i];
					$maxIdex=$i;
				}

			}
			return $maxVal;
		}
	}
	$p1 = new person();
	$p1->speak();

	$res=$p1->count1();
	echo "计算结果是=".$res;
	$res=$p1->count2(5);
	echo "<br/>计算结果是=".$res;
	echo "<br/>21+12=".$p1->add(21,12);
	$myarr=array(21,34,45,65,-2,-9);
	echo "<br/>最大的下标值是".$p1->findMax($myarr);



?>
