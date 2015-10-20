<html>
	<head>
	<meta charset='utf-8'/>
	</head>
<?php
	error_reporting(E_ALL^E_NOTICE);
	/*function bubbleSort(&$myarr){
		$temp=0;
	for($i=0;$i<count($myarr)-1;$i++){
	for($j=0;$j<count($myarr)-1-$i;$j++){
		if($myarr[$j]>$myarr[$j+1]){
			$temp=$myarr[$j];
			$myarr[$j]=$myarr[$j+1];
			$myarr[$j+1]=$temp;
		}
		}

	}
	echo "<br/>函数中的排序";
	print_r($myarr);
}



	$myarr=array(0,5,-1);
	bubbleSort($myarr);
	print_r($myarr);*/

	$myarr=array(10,12,43,56,43,65,56,67,71,21,-4,-3);

	function search(&$myarr,$findVal){

		$flag=false;
		
		for($i=0;$i<count($myarr);$i++){

			if($findVal==$myarr[$i]){

				echo "查到了,下标为=$i";
				$flag=ture;
				//break;
			}
		}
		if(!$flag){
			echo "查不到";
		}
	}
	search($myarr,56);


?>
</html>