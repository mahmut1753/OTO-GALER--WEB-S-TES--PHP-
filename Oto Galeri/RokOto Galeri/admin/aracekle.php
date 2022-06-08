<?php include 'header.php'; ?>
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Araç Ekle</h1>           
  </div>
  <hr>
  <form action="islem.php" method="post" enctype="multipart/form-data">
    <div class="card">

      <div class="card-body">
        <div class="row">
         <div class="col-md-6">
          <h5>Marka</h5>
         <select class="form-control" name="marka">

          <?php 
          $query="SELECT * FROM markalar ORDER BY marka ASC";
          $ekle1=mysqli_query($conn,$query)
          ?>
          

            <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
              <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
            <?php endwhile; ?>


          </select>
        </div>
        <div class="col-md-6">
          <h5>Model</h5>
          <select class="form-control" name="model">

          <?php 
          $query="SELECT * FROM model ORDER BY modelad ASC";
          $ekle1=mysqli_query($conn,$query)
          ?>
          

            <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
              <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
            <?php endwhile; ?>


          </select>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <h5>Seri</h5>
          <?php 
          $query="SELECT * FROM seri ORDER BY seriyıl ASC";
          $ekle1=mysqli_query($conn,$query)
          ?>
          <select class="form-control" name="seri">

            <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
              <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
            <?php endwhile; ?>


          </select>
        </div>
        <div class="col-md-6">
          <h5>Kilometre</h5>
          <input type="number" name="kilometre" class="form-control" required="">
        </div>

      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <h5>Yakıt</h5>
          <?php 
          $query="SELECT * FROM yakıt ORDER BY yakıttürü ASC";
          $ekle1=mysqli_query($conn,$query)
          ?>
          <select class="form-control" name="yakit">

            <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
              <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
            <?php endwhile; ?>


          </select>
        </div>
        <div class="col-md-6">
         <h5>Vites</h5>
         <?php 
         $query="SELECT * FROM vites ORDER BY vitestürü ASC";
         $ekle1=mysqli_query($conn,$query)
         ?>
         <select class="form-control" name="vites">

          <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
          <?php endwhile; ?>


        </select>
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <h5>Motor Gücü</h5>
        <?php 
        $query="SELECT * FROM motorgücü ORDER BY motorgücü ASC";
        $ekle1=mysqli_query($conn,$query)
        ?>
        <select class="form-control" name="motor-gucu">

          <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
          <?php endwhile; ?>


        </select>
      </div>
      <div class="col-md-6">
        <h5>Motor Hacmi</h5>
        <?php 
        $query="SELECT * FROM motorhacmi ORDER BY hacim ASC";
        $ekle1=mysqli_query($conn,$query)
        ?>
        <select class="form-control" name="motor-hacmi">

          <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
          <?php endwhile; ?>


        </select>
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <h5>Renk</h5>
        <?php 
        $query="SELECT * FROM renk ORDER BY renk ASC";
        $ekle1=mysqli_query($conn,$query)
        ?>
        <select class="form-control" name="renk">

          <?php while ($row1=mysqli_fetch_array($ekle1)):; ?> 
            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>  
          <?php endwhile; ?>


        </select>
      </div>
      <div class="col-md-6">
        <h5>Fiyat</h5>
        <input type="number" name="fiyat" class="form-control" required="">
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-md-2">Araçın Ön Yüzü:<hr><input type="file" name="resim1" required=""><hr></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-md-2">Araçın Arka Yüzü:<hr><input type="file" name="resim2" required=""><hr></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-md-2">Araçın Sol Yüzü:<hr><input type="file" name="resim3" required=""><hr></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-md-2">Araçın Sağ Yüzü:<hr><input type="file" name="resim4" required=""><hr></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-md-2">Araçın İçi:<hr><input type="file" name="resim5" required=""><hr></div>
      <div class="col-md-2"></div>
    </div>
   
    
    <div class="row">
      <div class="col-md-12">
        <input type="submit" name="arac-ekle" class="btn form-control btn-success" value="Araç Ekle">
      </div>
    </div>

  </div>
</div>
</form>
</div>



<br><br>
<!-- Footer -->
<?php include 'footer.php'; ?>
