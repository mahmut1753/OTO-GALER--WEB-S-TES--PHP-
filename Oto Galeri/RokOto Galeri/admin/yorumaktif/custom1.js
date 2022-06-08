  
  $(document).ready(function() {
	  
	   $(".aktifpasif1").click(function() {
		   
		     var id = $(this).attr("id");
			 
			 var durum = $(this).is(":checked") ? '1' : '0';  
			 
			  
			  $.ajax({
				  
				  url: "aktifpasif1.php",
				  data: {id:id,durum:durum},
				  type: "post",
				  success: function(e) {
					  
					  swal(durum == 1 ? 'Aktif' : 'Pasif',e,"success");
					  
				  }
				  
			  })
			 
			 
	   });
	  
  });