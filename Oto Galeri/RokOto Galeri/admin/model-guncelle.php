<?php include 'header.php'; ?>

<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Model Güncelle</h1> 

          </div>
          <hr>
<?php if (isset($_GET["modeli-id"])): ?>
<?php $sorgu=mysqli_fetch_array(mysqli_query($conn,"select * from model where model_id=".$_GET['modeli-id'])) ?>
 <form action="islem.php" method="post">
<div class="card">
<input type="hidden" value="<?php echo $_GET['modeli-id'] ?>" name="modeli-id">
<div class="card-body">
	<div class="row">
		<div class="col-md-6">
			<?php 
			$query="SELECT * FROM markalar";
			$ekle1=mysqli_query($conn,$query)
			 ?>
			<select class="form-control" name="modeller">
				
				<?php while ($row1=mysqli_fetch_array($ekle1)):; ?>	
				<option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>	
			<?php endwhile; ?>

				
			</select>
		</div>
		<div class="col-md-6">
			
		</div>
	</div><br>
	<div class="row">
<div class="col-md-6">
<input type="text" name="model-adi"  class="form-control" placeholder="Model Adını Giriniz..." required="" value="<?php echo $sorgu['modelad']; ?>"></div>

<div class="col-md-6">
<input type="submit" name="model-guncelle" value="Güncelle" class="btn form-control btn-success">
</div>
</div>
</div>
</div>
</form>
</div>

<?php endif ?>

<?php include 'footer.php'; ?>