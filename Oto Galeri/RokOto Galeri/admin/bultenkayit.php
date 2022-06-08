<?php include 'header.php'; ?>


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Bülten Listesi</h1> 

	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Bulten İD</th>
						<th>Ad Soyad</th>
						<th>E-Posta</th>
						<th>İletişime Geç</th>
						<th>Sil</th>
					</tr>
					<?php 

					$sorgu=mysqli_query($conn,"SELECT bulten_id,isim,email from bultenkayit  ");

					while ($modelcek=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $modelcek['bulten_id']; ?></td>
							<td><?php echo $modelcek['isim']; ?></td>
							<td><?php echo $modelcek['email']; ?></td>
							<td><a href="#" class="btn btn-circle btn-success"><i class="fas fa-envelope"></i></a></td>
							<td><a href="islem.php?bulten-sil=<?php echo $modelcek['bulten_id']; ?>" class="btn btn-circle btn-danger"><i class="fas fa-trash-alt"></i></a></td>
							</tr>




							<?php } ?>




						</table>
					</div>
				</div>
			</div>

		</div>

		<br>


		<?php include 'footer.php'; ?>