<?php include 'header.php'; ?>

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Mesaj Listesi</h1> 

	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>İletişim İD</th>
						<th>Konu</th>
						<th>Ad Soyad</th>
						<th>E-Posta</th>
						<th>Telefon</th>
						<th>Mesaj</th>
						<th>Tarih</th>
						<th>Saat</th>
						<th>Sil</th>
						<th>Mesaj At</th>
						
					</tr>
					<?php 

					$sorgu=mysqli_query($conn,"SELECT * from iletisim");

					while ($iletisim=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $iletisim['iletisim_id']; ?></td>
							<td><?php echo $iletisim['konu']; ?></td>
							<td><?php echo $iletisim['adsoyad']; ?></td>
							<td><?php echo $iletisim['email']; ?></td>
							<td><?php echo $iletisim['telefon']; ?></td>
							<td><?php echo $iletisim['mesaj']; ?></td>
							<td><?php echo $iletisim['tarih']; ?></td>
							<td><?php echo $iletisim['saat']; ?></td>
							<td><a href="islem.php?iletisim-sil=<?php echo $iletisim['iletisim_id']; ?>" class="btn btn-circle btn-danger"><i class="fas fa-trash-alt"></i></a></td>
							<td><a href="#" class="btn btn-success btn-icon-split">
								<span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Mesaj At</span></a></td>
							</tr>




							<?php } ?>




						</table>
					</div>	
				</div>
			</div>
		</div>

		<br>
		<?php include 'footer.php'; ?>
