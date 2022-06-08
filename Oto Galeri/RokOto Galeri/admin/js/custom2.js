  
  $(document).ready(function() {
	  
	   $(".yorumsil").click(function() {
		   
		     var id = $(this).attr("id");
			 

			 
			  
			  $.ajax({
				  
				  url: "yorumsil.php",
				  data: {id:id},
				  type: "post",
				  success: function(e) {
					  
					  swal(id == true ? 'Yorum İşlemi!' : 'Yorum İşlemi!',e,"success");
					  
				  }
				  
			  })
			 
			 
	   });
	  
  });