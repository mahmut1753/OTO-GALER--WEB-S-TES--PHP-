<?php include 'header.php'; ?>


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Araç Yorum Listesi</h1> 

	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Yorum İD</th>
						<th>Araç İD</th>
						<th>Adı Soyadı</th>
						<th>E-Posta</th>
						<th>Yorum</th>
						<th>Tarih</th>
						<th>Saat</th>
						<th>Durumu</th>
						<th>Sil</th>
					</tr>
					<?php 
					if (isset($_GET["arac-yorum"])) {
						$aracid=$_GET["arac-yorum"];
						$sorgu=mysqli_query($conn,"SELECT * from yorumlar where arac_id='$aracid' ");
					}
					else
					{
						$sorgu=mysqli_query($conn,"SELECT * from yorumlar ");
					}
					

					while ($yorumcek=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $yorumcek['yorum_id']; ?></td>
							<td><?php echo $yorumcek['arac_id']; ?></td>
							<td><?php echo $yorumcek['adsoyad']; ?></td>
							<td><?php echo $yorumcek['email']; ?></td>
							<td><?php echo $yorumcek['yorum']; ?></td>
							<td><?php echo $yorumcek['tarih']; ?></td>
							<td><?php echo $yorumcek['saat']; ?></td>
							<td><label class="switch"> 
								<input  type="checkbox" id="<?php echo $yorumcek["yorum_id"]; ?>" class="aktifpasif1" <?php echo $yorumcek["durumu"] == 1 ? 'checked' : null;?>
								/>
								<span class="slider round"></span>
							</label></td>
							<td><a href="#" id="<?php echo $yorumcek["yorum_id"]; ?>" class="yorumsil"><i class="fas fa-trash-alt"></i></a></td>
							</tr>




							<?php } ?>




						</table>
					</div>
				</div>
			</div>

		</div>

		<br>


		<?php include 'footer.php'; ?>