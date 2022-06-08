<?php 

  
  try {
	  
	
    $db = new PDO("mysql:host=localhost;dbname=otogaleri;charset=utf8","root","12345678");	
	  
	  
  }catch(PDOException $mesaj){
	  
	  $mesaj->getmessage();
	  
  }


?>