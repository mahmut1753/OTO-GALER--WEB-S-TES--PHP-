<?php include 'header.php'; ?>

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Araç Listesi</h1> 

	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Arac İD</th>
						<th>Resmi</th>
						<th>Marka Adı</th>
						<th>Model Adı</th>
						<th>Seri</th>
						<th>Kilometre</th>
						<th>Yakıt</th>
						<th>Vites Tipi</th>
						<th>Motor Gücü</th>
						<th>Motor Hacmi</th>
						<th>Renk</th>
						<th>Fiyat</th>
						<th>Durumu</th>
						<th>Yorumlar</th>
						<th>Sil</th>
						<th>Güncelle</th>
					</tr>
					<?php 

					$sorgu=mysqli_query($conn,"SELECT arac_id,markalar.marka,model.modelad,seri.seriyıl,kilometre,yakıt.yakıttürü,vites.vitestürü,motorgücü.motorgücü,motorhacmi.hacim,renk.renk,fiyat,yorum,durumu,resim1,resim2,resim3,resim4,resim5 from araclar JOIN markalar ON araclar.marka=markalar.marka_id JOIN model ON araclar.model=model.model_id JOIN seri ON araclar.seri=seri.seri_id JOIN yakıt ON araclar.yakıt=yakıt.yakıt_id JOIN vites ON araclar.vites=vites.vites_id JOIN motorgücü ON araclar.motorgücü=motorgücü.motorgüc_id join motorhacmi ON araclar.motorhacmi=motorhacmi.hacim_id JOIN renk ON araclar.renk=renk.renk_id");

					while ($araccek=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $araccek['arac_id']; ?></td>
							<td><img src="<?php echo $araccek['resim1'] ?>" height="60px"></td>
							<td><?php echo $araccek['marka']; ?></td>
							<td><?php echo $araccek['modelad']; ?></td>
							<td><?php echo $araccek['seriyıl']; ?></td>
							<td><?php echo $araccek['kilometre']; ?></td>
							<td><?php echo $araccek['yakıttürü']; ?></td>
							<td><?php echo $araccek['vitestürü']; ?></td>
							<td><?php echo $araccek['motorgücü']; ?></td>
							<td><?php echo $araccek['hacim']; ?></td>
							<td><?php echo $araccek['renk']; ?></td>
							<td><?php echo $araccek['fiyat']; ?></td>
							<td><label class="switch"> 
								<input  type="checkbox" id="<?php echo $araccek["arac_id"];?>" class="aktifpasif" <?php echo $araccek["durumu"] == 1 ? 'checked' : null;?>
								/>
								<span class="slider round"></span>
							</label></td>
							<td><a href="yorumlar.php?arac-yorum=<?php echo $araccek['arac_id']; ?>" class="btn btn-circle btn-info"><i class="fas fa-comments"></a></td>

								<td><a href="islem.php?arac-sil=<?php echo $araccek['arac_id']; ?>" class="btn btn-circle btn-danger"><i class="fas fa-trash-alt"></i></a></td>
								<td><a href="aracduzenle.php?arac-guncelle=<?php echo $araccek['arac_id']; ?>" class="btn btn-success btn-icon-split">
									<span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Güncelle</span></a></td>
								</tr>




								<?php } ?>




							</table>
						</div>
					</div>
				</div>

			</div>



			<br>


			<?php include 'footer.php'; ?>