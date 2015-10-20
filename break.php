<?php
/*for($i=1;$i<13;$i++){
	echo '$i='.$i.'<br/>';
	if($i==10){
		break;
	}

}
echo 'hello';*/
$i=0;
while(++$i){
	switch($i){
		case 5:
		echo 'at 5<br/>';
		break;
		case 10:
		echo 'at 10<br/>';
		break 2;
		default:
		break;
	}
}
echo '$i='.$i;
?>