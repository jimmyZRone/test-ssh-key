<meta charset='utf-8'>
<?php

	$arr=array(1,3,4,5,6,7,8,9,12,15,16,17);
	function binarySearch($arr,$findVal,$leftIndex ,$rightIndex){
		if($rightIndex<$leftIndex){
			echo "查询不到";
			return;
		}
		$middleIndext=round(($leftIndex +$rightIndex)/2);

		if($findVal<$arr[$middleIndext]){
			//函数参数位置不能换   并且参数不能写错了
			binarySearch($arr,$findVal,$leftIndex,$middleIndext-1);

		}else if($findVal>$arr[$middleIndext]){

			binarySearch($arr,$findVal,$middleIndext+1,$rightIndex );
		}else{
			echo "已查询到了 $middleIndext";
		}
	}

	binarySearch($arr,9,0,count($arr)-1);
	?>