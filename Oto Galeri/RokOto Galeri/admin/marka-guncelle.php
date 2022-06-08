<?php include 'header.php'; ?>

<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Marka Güncelle</h1> 

          </div>
          <hr>
<?php if (isset($_GET["marka-id"])): ?>
<?php $sorgu=mysqli_fetch_array(mysqli_query($conn,"select * from markalar where marka_id=".$_GET['marka-id'])) ?>
 <form action="islem.php" method="post">
<div class="card">
<input type="hidden" value="<?php echo $_GET['marka-id'] ?>" name="marka-id">
<div class="card-body">
	<div class="row">
<div class="col-md-6">
<input type="text" name="marka-adi"  class="form-control" placeholder="Marka Adını Giriniz..." required="" value="<?php echo $sorgu['marka']; ?>"></div>

<div class="col-md-6">
<input type="submit" name="marka-guncelle" value="Güncelle" class="btn form-control btn-success">
</div>
</div>
</div>
</div>
</form>
	
<?php endif ?>

</div>

<?php include 'footer.php'; ?>
