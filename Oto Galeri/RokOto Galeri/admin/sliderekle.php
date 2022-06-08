<?php include "header.php"; ?>

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Slider Ekle</h1> 

	</div>
	<hr>
	
	<div class="card">

		<div class="card-body">
			<form action="islem.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="slideradi1" class="form-control" placeholder="Slider Adını Giriniz..." required=""></div>

						<div class="col-md-6">
							<input type="file" name="resim"  class="form-control">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							
							<input type="submit" name="sliderekle" value="Ekle" class="btn form-control btn-success">
							
						</div>
					</div>
				</form>
				<hr>
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Slider İD</th>
						<th>Slider Resmi</th>
						<th>Slider Adı</th>
						<th>Slider Yolu</th>
						<th>Slider Durumu</th>
						<th>Sil</th>
						
					</tr>
					<?php 

					$sorgu=mysqli_query($conn,"select * from slider");

					while ($slidercek=mysqli_fetch_array($sorgu)) {
						?>

						<tr>
							<td><?php echo $slidercek['slider_id']; ?></td>
							<td><img src="../<?php echo $slidercek['slideryolu'] ?>" height="60px"></td>
							<td><?php echo $slidercek['slideradi']; ?></td>
							<td><?php echo $slidercek['slideryolu']; ?></td>
							<td></td>
							<td><a href="islem.php?slider-sil=<?php echo $slidercek['slider_id']; ?>" class="btn btn-circle btn-danger"><i class="fas fa-trash-alt"></i></a></td>
							
							</tr>




							<?php } ?>




						</table>
					</div>
			</div>
		</div>
		
		
	</div>





	<?php include "footer.php"; ?>