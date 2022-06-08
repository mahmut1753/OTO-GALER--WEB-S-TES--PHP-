<?php  

  require("ayar.php");

  if($_POST){
   $id    =  (int) $_POST["id"];

  
     
	   $query = $db->prepare("DELETE from yorumlar where yorum_id = ?");

     
	   if( $query->execute([$id])){
		   
		   echo $id."Nolu Kayıt Silindi";
		   
	   }else {
		   
		   echo $id." Nolu Kayıt Silinemedi.";
	   }
  
  }

?>