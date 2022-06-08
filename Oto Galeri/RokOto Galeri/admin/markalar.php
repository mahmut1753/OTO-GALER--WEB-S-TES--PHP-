<?php include 'header.php'; ?>

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Markalar Listesi</h1> 

	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Marka İD</th>
						<th>Marka Adı</th>
						<th>Sil</th>
						<th>Güncelle</th>
					</tr>
					<?php 

					$sorgu=mysqli_query($conn,"select * from markalar");

					while ($markacek=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $markacek['marka_id']; ?></td>
							<td><?php echo $markacek['marka']; ?></td>
							<td><a href="islem.php?marka-sil=<?php echo $markacek['marka_id']; ?>" class="btn btn-circle btn-danger"><i class="fas fa-trash-alt"></i></a></td>
							<td><a href="marka-guncelle.php?marka-id=<?php echo $markacek['marka_id']; ?>" class="btn btn-success btn-icon-split">
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
