<?php include "header.php"; ?>







<!--Araç Bul-->

<section class="b-search">

	<div class="container">

		<h1 class="wow zoomInUp" data-wow-delay="0.3s">ARADIĞINIZ ARACI BULMAYA HAZIRMISINIZ?</h1>

		<form action="araclistesi.php" method="POST" class="b-search__main-form">

			

			<div class="b-search__main wow zoomInUp" data-wow-delay="0.3s">



				<div class="row">

					<div class="col-xs-12 col-md-8">

						<div class="m-firstSelects">

							<div class="col-xs-4">

								<select name="marka">
									<?php
									$sql=$conn->query("SELECT * FROM markalar ");
									while($row=mysqli_fetch_array($sql)){
										?> 
										<option value="<?=$row['marka_id']?>"><?=$row['marka']?></option>
										<?php
									}
									?>

								</select>

								<span class="fa fa-caret-down"></span>

								<p>MARKA SEÇİNİZ?</p>

							</div>

							<div class="col-xs-4">

								<select name="model">
									<?php
									$sql=$conn->query("SELECT * FROM model ");
									while($row=mysqli_fetch_array($sql)){
										?> 
										<option value="<?=$row['model_id']?>"><?=$row['modelad']?></option>
										<?php
									}
									?>

								</select>

								<span class="fa fa-caret-down"></span>

								<p>MODEL SEÇİNİZ?</p>

							</div>
							<div class="col-xs-4">

								<select name="renk">
									<?php
									$sql=$conn->query("SELECT * FROM renk ");
									while($row=mysqli_fetch_array($sql)){
										?> 
										<option value="<?=$row['renk_id']?>"><?=$row['renk']?></option>
										<?php
									}
									?>
								</select>

								<span class="fa fa-caret-down"></span>

								<p>RENK SEÇİNİZ</p>

							</div>

						</div>

						<div class="m-secondSelects">

							<div class="col-xs-4">

								<input type="text" name="minmodel" value="" placeholder="2000"  />

								<p>MİN-MODEL</p>

							</div>

							<div class="col-xs-4">

								<input type="text" name="maxmodel" value="" placeholder="2019" />

								<p>MAX-MODEL</p>

							</div>

						</div>

					</div>

					<div class="col-md-4 col-xs-12 text-left s-noPadding">

						<div class="b-search__main-form-range">

							<div class="col-xs-6">

								<input type="text" name="minfiyat" value=""  placeholder="1000" />

								<p>MİN-FİYAT</p>

							</div>

							<div class="col-xs-6">

								<input type="text" name="maxfiyat" value=""  placeholder="1000000" />

								<p>MAX-FİYAT</p>

							</div>

						</div>

						<div class="b-search__main-form-submit pull-right">

							<button type="submit" name="aracbul" class="btn m-btn">ARADIĞIM ARACI BUL<span class="fa fa-angle-right"></span></button>

						</div>

					</div>

				</div>

			</div>

		</form>

	</div>	

</section>
<!--Araç Bul Son-->

<section class="b-auto">

	<div class="container">

		<h5 class="s-titleBg wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">YENİLENEN ARAÇ FİLOMUZ</h5><br />

		<h2 class="s-title wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">YENİ EKLENEN ARAÇLAR</h2>

		<div class="row">



			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="b-auto__main">



					<div class="clearfix"></div>

					<div class="row m-margin" id="first">

						<?php 

						$sorgu=mysqli_query($conn,"SELECT arac_id,markalar.marka,model.modelad,seri.seriyıl,kilometre,yakıt.yakıttürü,vites.vitestürü,motorgücü.motorgücü,motorhacmi.hacim,renk.renk,fiyat,yorum,durumu,resim1,resim2,resim3,resim4,resim5 from araclar JOIN markalar ON araclar.marka=markalar.marka_id JOIN model ON araclar.model=model.model_id JOIN seri ON araclar.seri=seri.seri_id JOIN yakıt ON araclar.yakıt=yakıt.yakıt_id JOIN vites ON araclar.vites=vites.vites_id JOIN motorgücü ON araclar.motorgücü=motorgücü.motorgüc_id join motorhacmi ON araclar.motorhacmi=motorhacmi.hacim_id JOIN renk ON araclar.renk=renk.renk_id where durumu='1' ORDER BY arac_id DESC LIMIT 8 ");

						while ($araccek=mysqli_fetch_array($sorgu)) {
							?>
							<div class="col-md-3 col-sm-6 col-xs-12">

								<div class="b-auto__main-item wow slideInUp" data-wow-delay="0.3s" data-wow-offset="100">

									<a href="aracdetayi.php?arac-idi=<?php echo $araccek["arac_id"]; ?>"><img class="img-responsive"  src="admin/<?php echo $araccek['resim1'] ?>" height="185" style="max-width:290px; max-height:185px"  /></a>

									<div class="b-world__item-val">

										<span class="b-world__item-val-title">MODEL <span><?php echo $araccek['seriyıl']; ?></span></span>

									</div>

									<h2><a href="#"><?php echo $araccek['marka']; ?> <?php echo $araccek['modelad']; ?></a></h2>

									<div class="b-auto__main-item-info">

										<span class="m-price"><?php echo $araccek['fiyat']; ?><i class="fa fa-try" aria-hidden="true"></i>

										</span>

										<span class="m-number">

											<span class="fa fa-tachometer"></span><?php echo $araccek['kilometre']; ?> KM

										</span>

									</div>

									<div class="b-featured__item-links m-auto">

										<a href="#"><?php echo $araccek['renk']; ?></a>

										<a href="#"><?php echo $araccek['vitestürü']; ?></a>

										<a href="#"><?php echo $araccek['yakıttürü']; ?></a>

									</div>

								</div>

							</div>
							<?php } ?>



						</div>

						<div class="b-search__main-form-submit">

							<a href="araclistesi.php"><button type="submit" class="btn m-btn">TÜM ARAÇLARI LİSTELE<span class="fa fa-angle-right"></span></button> </a>



						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!--Son Eklenen Araçlar-->






	<!--Son Eklenen Araçlar Son-->

	<section class="b-count">

		<div class="container">

			<div class="row">

				<div class="col-md-11 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">

					<div class="row">

						<div class="col-sm-3 col-xs-6">

							<div class="b-count__item">

								<div class="b-count__item-circle">

									<span class="fa fa-building-o"></span>

								</div>

								<div class="chart" data-percent="21">

									<h2  class="percent">20</h2>

								</div>

								<h5>Yıllık Tecrübe</h5>

							</div>

						</div>

						<div class="col-sm-3 col-xs-6">

							<div class="b-count__item">

								<div class="b-count__item-circle">

									<span class="fa fa-users"></span>

								</div>

								<div class="chart" data-percent="99">

									<h2  class="percent">1250</h2>

								</div>

								<h5>Mutlu Müşteri</h5>

							</div>

						</div>

						<div class="col-sm-3 col-xs-6">

							<div class="b-count__item">

								<div class="b-count__item-circle">

									<span class="fa fa-suitcase"></span>



								</div>

								<div class="chart" data-percent="99">

									<h2  class="percent">23</h2>

								</div>

								<h5>Hizmet Ödülü</h5>

							</div>

						</div>



						<div class="col-sm-3 col-xs-6">

							<div class="b-count__item j-last">

								<div class="b-count__item-circle">

									<span class="fa fa-car"></span>

								</div>

								<div class="chart" data-percent="99">

									<h2  class="percent">570</h2>

								</div>

								<h5>Araç Sayısı</h5>

							</div>

						</div>





					</div>

				</div>

			</div>

		</div>

	</section>
	<!--Bülten Kayıt-->
	<section class="b-contact">

		<div class="container">

			<div class="row wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">

				<div class="col-xs-4">

					<div class="b-contact-title">

						<h5>SON HABERLER &amp; FIRSATLAR</h5><br />

						<h2>BÜLTENE ÜYE OL</h2>

					</div>

				</div>

				<div class="col-xs-8">

					<div class="b-contact__form">

						<p>KAMPANYALARIMIZDAN HABERDAR OLMAK İSTİYORSANIZ E-BÜLTEN LİSTEMİZE KAYIT OLABİLİRSİNİZ.!</p>

						<form action="" method="post" >

							<div><span class="fa fa-user"></span><input type="text" name="isim" value="" placeholder="Adınız Soyadınız" required="" /></div>

							<div><span class="fa fa-envelope"></span><input type="text" name="eposta" value="" placeholder="Email Adresiniz" required="" /></div>



							<button type="submit" name="bultenkayit"><span class="fa fa-angle-right"></span></button>

						</form>
						<?php
						if (isset($_POST["bultenkayit"])) {
							$isim=$_POST["isim"];
							$email=$_POST["eposta"];
							if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
								if (mysqli_query($conn,"INSERT INTO bultenkayit (isim,email) values('$isim','$email')")) {
									echo "<script type='text/javascript'>swal('Bülten Kayıt!', 'Bültene Başarıyla Kayıt Olundu!', 'success');</script>";
								}
								else
									header("Location:index.php?durum=no");
							} else {
								echo "<script type='text/javascript'>swal('Bülten Kayıt!', 'Hatalı Email Girişi!', 'error');</script>";
							}
						}
						?>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!--Bülten Kayıt Son-->
	<?php include "footer.php"; ?>