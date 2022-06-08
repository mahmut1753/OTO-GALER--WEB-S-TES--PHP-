<?php include 'header.php'; ?>


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Model Listesi</h1> 

	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Model İD</th>
						<th>Model Adı</th>
						<th>Marka Adı</th>
						<th>Sil</th>
						<th>Güncelle</th>
					</tr>
					<?php 

					$sorgu=mysqli_query($conn,"SELECT model_id,modelad,markalar.marka from model join markalar on model.marka=markalar.marka_id  ");

					while ($modelcek=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $modelcek['model_id']; ?></td>
							<td><?php echo $modelcek['modelad']; ?></td>
							<td><?php echo $modelcek['marka']; ?></td>
							<td><a href="islem.php?model-sil=<?php echo $modelcek['model_id']; ?>" class="btn btn-circle btn-danger"><i class="fas fa-trash-alt"></i></a></td>
							<td><a href="model-guncelle.php?modeli-id=<?php echo $modelcek['model_id']; ?>" class="btn btn-success btn-icon-split">
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