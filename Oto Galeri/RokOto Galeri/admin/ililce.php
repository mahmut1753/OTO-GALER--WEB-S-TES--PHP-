<?php
include("baglan.php");
if(isset($_GET['il'])){
	
	$il=(int)$_GET['il'];
	
	if($il>0){
		$dk=$conn->query("SELECT * FROM model WHERE marka='".$il."' ");
		$list='{"0":"Model Seçiniz",';
		while($ilr=mysqli_fetch_array($dk)){
			$list.='"'.$ilr['model_id'].'":"'.$ilr['modelad'].'",';
		}
		$list=substr($list,0,-1);
		$list.="}";
		
		echo $list;
	}
}

?>