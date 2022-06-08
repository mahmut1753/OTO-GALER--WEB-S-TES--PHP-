<?php include 'header.php'; ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Marka Ekle</h1> 

	</div>
	<hr>
	<form action="islem.php" method="post">
		<div class="card">

			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="marka-adi"  class="form-control" placeholder="Marka Adını Giriniz..." required=""></div>

						<div class="col-md-6">
							<input type="submit" name="marka-ekle" value="Ekle" class="btn form-control btn-success">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div style="height: 500px"></div>
	<?php include 'footer.php'; ?>