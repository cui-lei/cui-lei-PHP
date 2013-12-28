<?php
$original = "aabcccccaaa";
$strarr = str_split($original);
for ($i=0;$i<strlen($original);$i++){
	if ($i==0){
		$result[0]["letter"]=$strarr[0];
		$result[0]["count"] = 1;
	}else{
		$resarrcount = count($result);  
		if ($strarr[$i]!=$strarr[$i-1]){
			$result[$resarrcount]["letter"]=$strarr[$i];
			$result[$resarrcount]["count"] = 1;
		}else{
			$result[$resarrcount-1]["count"] = $result[$resarrcount-1]["count"] + 1;	
		}
	}
	
}


$res = "";
foreach ($result as $r){
	$res =  $res.$r["letter"].$r["count"];
}

if (strlen($res)>strlen($original)){
	echo $original;
}else{
	echo $res;
}
?>
