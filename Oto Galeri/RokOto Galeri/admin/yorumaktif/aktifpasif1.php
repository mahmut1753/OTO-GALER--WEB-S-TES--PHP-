<?php  

  require("../ayar.php");

  if($_POST){
   $id    =  (int) $_POST["id"];
   $durum =  (int) $_POST["durum"];
  
     
	   $query = $db->prepare("UPDATE yorumlar set durumu = ? where yorum_id = ?");
	   $query->execute([$durum,$id]);
     
	   if($durum){
		   
		   echo $id." Nolu Kayıt Aktif Edildi..";
		   
	   }else {
		   
		   echo $id." Nolu Kayıt Pasif Edildi..";
	   }
  
  }

?>