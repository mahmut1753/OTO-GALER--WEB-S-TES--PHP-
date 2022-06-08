<?php  include 'baglan.php'; ?>
<?php ob_start(); ?>

<?php  
if (isset($_POST["marka-ekle"])) {

	$marka = $_POST['marka-adi'];

	if (mysqli_query($conn,"INSERT INTO markalar(marka) values ('$marka')")) {
		header('Location:markaekle.php?durum=ok');
	}
	else{
		header('Location:markaekle.php?durum=no');
	}


}

if(isset($_GET["marka-sil"]))
{
	if(mysqli_query($conn,"DELETE FROM markalar where marka_id=".$_GET["marka-sil"]))
		header('Location:markalar.php?durum=ok');
	else
		header('Location:markalar.php?durum=no');

}


if (isset($_POST["marka-guncelle"])) {

	$marka = $_POST['marka-adi'];
	$id=$_POST['marka-id'];
	if (mysqli_query($conn,"UPDATE markalar set marka='$marka' where marka_id=$id")) {
		header("Location: marka-guncelle.php?durum=ok&marka-id=$id");

	}
	else
		header("Location: marka-guncelle.php?durum=no&marka-id=$id");

}



if (isset($_POST["model-ekle"])) {
	$markamodel=$_POST["model-ekleme"];
	$model=$_POST["model-adi"];
	if(mysqli_query($conn,"INSERT INTO model(modelad,marka) values('$model','$markamodel')"))
		header("Location: model-ekle.php?durum=ok");
	else
		header("Location: modelekle.php?durum=no");
}


if(isset($_GET["model-sil"])){
	if(mysqli_query($conn,"DELETE FROM model where model_id=".$_GET["model-sil"]))
		header('Location:model-listele.php?durum=ok');
	else
		header('Location:model-listele.php?durum=no');
}


if (isset($_POST["model-guncelle"])) {

	$modeladi = $_POST['model-adi'];
	$modelmarkasi=$_POST['modeller'];
	$modelid=$_POST['modeli-id'];
	if (mysqli_query($conn,"UPDATE model set modelad='$modeladi',marka='$modelmarkasi' where model_id=$modelid")) {
		header("Location: model-guncelle.php?durum=ok&modeli-id=$modelid");

	}
	else
		header("Location: model-guncelle.php?durum=no&modeli-id=$modelid");
}



if (isset($_POST["arac-ekle"])) {
	

	$marka=$_POST["marka"];
	$model=$_POST["model"];
	$seri=$_POST["seri"];
	$kilometre=$_POST["kilometre"];
	$yakit=$_POST["yakit"];
	$vites=$_POST["vites"];
	$motorgucu=$_POST["motor-gucu"];
	$motorhacmi=$_POST["motor-hacmi"];
	$renk=$_POST["renk"];
	$fiyat=$_POST["fiyat"];
	$durum=0;

	/*Resim1 */
	$yuklenecekyer="araclar";
	$suanki=$_FILES["resim2"]["tmp_name"];
	$adi=$_FILES["resim2"]["name"];
	$randomsayi=rand(2000,500000);
	$randomsayi2=rand(2000,500000);
	$benzersizad=$randomsayi.$randomsayi2;
	$resimyol=$yuklenecekyer."/".$benzersizad.$adi;
	move_uploaded_file($suanki, $resimyol);
	/*Resim1 */

	/*Resim2 */
	
	$suanki2=$_FILES["resim1"]["tmp_name"];
	$adi2=$_FILES["resim1"]["name"];
	$randomsayi3=rand(2000,500000);
	$randomsayi4=rand(2000,500000);
	$benzersizad2=$randomsayi3.$randomsayi4;
	$resimyol2=$yuklenecekyer."/".$benzersizad.$adi2;
	move_uploaded_file($suanki2, $resimyol2);
	/*Resim2 */

	/*Resim3 */
	
	$suanki3=$_FILES["resim3"]["tmp_name"];
	$adi3=$_FILES["resim3"]["name"];
	$randomsayi5=rand(2000,500000);
	$randomsayi6=rand(2000,500000);
	$benzersizad3=$randomsayi5.$randomsayi6;
	$resimyol3=$yuklenecekyer."/".$benzersizad3.$adi3;
	move_uploaded_file($suanki3, $resimyol3);
	/*Resim3 */

	/*Resim4 */
	
	$suanki4=$_FILES["resim4"]["tmp_name"];
	$adi4=$_FILES["resim4"]["name"];
	$randomsayi7=rand(2000,500000);
	$randomsayi8=rand(2000,500000);
	$benzersizad4=$randomsayi7.$randomsayi8;
	$resimyol4=$yuklenecekyer."/".$benzersizad4.$adi4;
	move_uploaded_file($suanki4, $resimyol4);
	/*Resim4 */

	/*Resim5 */
	
	$suanki5=$_FILES["resim5"]["tmp_name"];
	$adi5=$_FILES["resim5"]["name"];
	$randomsayi9=rand(2000,500000);
	$randomsayi10=rand(2000,500000);
	$benzersizad5=$randomsayi9.$randomsayi10;
	$resimyol5=$yuklenecekyer."/".$benzersizad5.$adi5;
	move_uploaded_file($suanki5, $resimyol5);
	/*Resim5 */


	if(mysqli_query($conn,"INSERT INTO araclar(marka,model,seri,kilometre,yakıt,vites,motorgücü,motorhacmi,renk,fiyat,durumu,resim1,resim2,resim3,resim4,resim5) values('$marka','$model','$seri','$kilometre','$yakit','$vites','$motorgucu','$motorhacmi','$renk','$fiyat','$durum','$resimyol2','$resimyol','$resimyol3','$resimyol4','$resimyol5')"))
		header("Location: aracekle.php?durum=ok");
	else
		header("Location: aracekle.php?durum=no");
}

if(isset($_GET["arac-sil"])){
	if(mysqli_query($conn,"DELETE FROM araclar where arac_id=".$_GET["arac-sil"]))
		if (mysqli_query($conn,"DELETE FROM yorumlar where arac_id=".$_GET["arac-sil"])) {
			header('Location:arac-listesi.php?durum=ok');
		}
		
	else
		header('Location:arac-listesi.php?durum=no');
}




if (isset($_POST["sliderekle"])) {
	
	$yuklenecekyer="../slide";
	$suanki=$_FILES["resim"]["tmp_name"];
	$adi=$_FILES["resim"]["name"];
	$slideadi=$_POST["slideradi1"];
	$randomsayi=rand(2000,500000);
	$randomsayi2=rand(2000,500000);
	$benzersizad=$randomsayi.$randomsayi2;
	$resimyol=substr($yuklenecekyer,3)."/".$benzersizad.$adi;
	move_uploaded_file($suanki, "$yuklenecekyer/$benzersizad$adi");
	

	if(mysqli_query($conn,"INSERT INTO slider(slideradi,slideryolu) VALUES('".$slideadi."','".$resimyol."')")){
		header("location:sliderekle.php");
	}
	else{
		header("location:sliderekle.php");
	}
	
}

if(isset($_GET["slider-sil"])){
	if(mysqli_query($conn,"DELETE FROM slider where slider_id=".$_GET["slider-sil"]))
		header('Location:sliderekle.php?durum=ok');
	else
		header('Location:sliderekle.php?durum=no');
}


if($_POST["giris"])
{
	/*include "baglan.php";*/
    $db = new PDO("mysql:host=localhost;dbname=otogaleri;charset=utf8","root","12345678");	
	$kadi = $_POST["kadi"];
	$sifre = $_POST["sifre"];

$sorgu = $db -> prepare("SELECT * FROM admin where adminkul=? and adminsifre=? ");
$sorgu->execute(array($kadi, $sifre));
$islem=$sorgu->fetch();
	/*$giris="SELECT * FROM admin where adminkul='$kadi' and adminsifre='$sifre'";*/
/*	$getir=$conn->query($giris);*/

	if ($islem) {
	
			session_start();

			$_SESSION["ID"]=$islem["admin_id"] ;
			$_SESSION["ADI"]=$islem["adminadi"];
			$_SESSION["RESİM"]=$islem["resim"];
			header("location: anasayfa");      
		
	}
	else
		header("location: index"); 
	echo "Kullanıcı Adı veya Şifre Yanlış...";

}

if(isset($_GET["iletisim-sil"])){
	if(mysqli_query($conn,"DELETE FROM iletisim where iletisim_id=".$_GET["iletisim-sil"]))
		header('Location:mesajlar.php?durum=ok');
	else
		header('Location:mesajlar.php?durum=no');
}


if (isset($_POST["arac-duzenle"])) {
	$id=$_GET['arac-guncelle'];
		$marka=$_POST["marka"];
		$model=$_POST["model"];
		$seri=$_POST["seri"];
		$kilometre=$_POST["kilometre"];
		$yakit=$_POST["yakit"];
		$vites=$_POST["vites"];
		$motorgucu=$_POST["motor-gucu"];
		$motorhacmi=$_POST["motor-hacmi"];
		$renk=$_POST["renk"];
		$fiyat=$_POST["fiyat"];
	
	if (is_uploaded_file($_FILES['resim1']['tmp_name'])) {
		

		/*Resim1 */
		$yuklenecekyer="araclar";
		$suanki=$_FILES["resim2"]["tmp_name"];
		$adi=$_FILES["resim2"]["name"];
		$randomsayi=rand(2000,500000);
		$randomsayi2=rand(2000,500000);
		$benzersizad=$randomsayi.$randomsayi2;
		$resimyol=$yuklenecekyer."/".$benzersizad.$adi;
		move_uploaded_file($suanki, "$yuklenecekyer/$benzersizad$adi");
		/*Resim1 */

		/*Resim2 */

		$suanki2=$_FILES["resim1"]["tmp_name"];
		$adi2=$_FILES["resim1"]["name"];
		$randomsayi3=rand(2000,500000);
		$randomsayi4=rand(2000,500000);
		$benzersizad2=$randomsayi3.$randomsayi4;
		$resimyol2=$yuklenecekyer."/".$benzersizad2.$adi2;
		move_uploaded_file($suanki2, $resimyol2);
		/*Resim2 */

		/*Resim3 */

		$suanki3=$_FILES["resim3"]["tmp_name"];
		$adi3=$_FILES["resim3"]["name"];
		$randomsayi5=rand(2000,500000);
		$randomsayi6=rand(2000,500000);
		$benzersizad3=$randomsayi5.$randomsayi6;
		$resimyol3=$yuklenecekyer."/".$benzersizad3.$adi3;
		move_uploaded_file($suanki3, "$yuklenecekyer/$benzersizad3$adi3");
		/*Resim3 */

		/*Resim4 */

		$suanki4=$_FILES["resim4"]["tmp_name"];
		$ad4=$_FILES["resim4"]["name"];
		$randomsayi7=rand(2000,500000);
		$randomsayi8=rand(2000,500000);
		$benzersizad4=$randomsayi7.$randomsayi8;
		$resimyol4=$yuklenecekyer."/".$benzersizad4.$ad4;
		move_uploaded_file($suanki4, "$yuklenecekyer/$benzersizad4$ad4");
		/*Resim4 */

		/*Resim5 */

		$suanki5=$_FILES["resim5"]["tmp_name"];
		$adi5=$_FILES["resim5"]["name"];
		$randomsayi9=rand(2000,500000);
		$randomsayi10=rand(2000,500000);
		$benzersizad5=$randomsayi9.$randomsayi10;
		$resimyol5=$yuklenecekyer."/".$benzersizad5.$adi5;
		move_uploaded_file($suanki5, "$yuklenecekyer/$benzersizad5$adi5");
		/*Resim5 */

		if (mysqli_query($conn,"UPDATE araclar set marka='$marka',model='$model',seri='$seri',kilometre='$kilometre',yakıt='$yakit
			',vites='$vites',motorgücü='$motorgucu',motorhacmi='$motorhacmi',renk='$renk',fiyat='$fiyat',resim1='$resimyol2',resim2='$resimyol',resim3='$resimyol3',resim4='$resimyol4',resim5='$resimyol5' where arac_id='$id'")) {
			header("Location: aracduzenle.php?durum=ok&arac-id=$id");

	}
	else
		header("Location: aracduzenle.php?durum=no1&arac-id=$id");
}

else{
	$idi=$_GET['arac-guncelle'];
	$marka=$_POST["marka"];
		$model=$_POST["model"];
		$seri=$_POST["seri"];
		$kilometre=$_POST["kilometre"];
		$yakit=$_POST["yakit"];
		$vites=$_POST["vites"];
		$motorgucu=$_POST["motor-gucu"];
		$motorhacmi=$_POST["motor-hacmi"];
		$renk=$_POST["renk"];
		$fiyat=$_POST["fiyat"];
	if (mysqli_query($conn,"UPDATE araclar set marka='$marka',model='$model',seri='$seri',kilometre='$kilometre',yakıt='$yakit
		',vites='$vites',motorgücü='$motorgucu',motorhacmi='$motorhacmi',renk='$renk',fiyat='$fiyat' where arac_id=$idi")) {
		header("Location: aracduzenle.php?durum=ok&arac-id=$id");

   }
   else
	header("Location:aracduzenle.php?durum=no&arac-id=$id");
    }
}





if(isset($_GET["bulten-sil"]))
{
	if(mysqli_query($conn,"DELETE FROM bultenkayit where bulten_id=".$_GET["bulten-sil"]))
		header('Location:bultenkayit.php?durum=ok');
	else
		header('Location:bultenkayit.php?durum=no');

}


?>