<meta charset='utf-8'/>
<?php
	$arr=array(1,3,5,6,7,8,9,12,15,16);
	function binarySearch($arr,$findVal,$leftIndext,$rightIndext){
		if($rightIndext<$leftIndext){
			echo "查询不到";
			return;
		}
		$middleIndext=round(($leftIndext+$rightIndext)/2);

		if($findVal<$arr[$middleIndext]){

			binarySearch($arr,$findVal,$leftIndext,$middleIndext-1);

		}else if($findVal>$arr[$middleIndext]){

			binarySearch($arr,$findVal,$middleIndext+1,$rightIndext);
		}else{
			echo "已查询到了 $middleIndext";
		}
	}

	binarySearch($arr,16,0,count($arr)-1);
	?>