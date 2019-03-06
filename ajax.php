<script type="text/javascript">

    $(document).ready(function() {

                $(document).delegate(".addItem","click",function() {

                            var id = $(this).attr("value");

                            $.ajax({

                                    url: "cart_work.php?add=" + id,

                                    type: "POST"

                                }).done(function(response) {

                                        $('#cartItems').html(response);

                                     $.toast({

                                            heading: 'Success',

                                            text: 'Model added successfully<br>Please refresh the page to see changes inside the cart',

                                            showHideTransition: 'fade',

                                            icon: 'success',

                                            position: 'top-right'

                                        }); 

 	}).fail(function(response){  		

if(response.status==404){  		 

$.toast({               

 heading: 'Error',             

   text: 'Maximum 6 models can be added to the cart',               

 showHideTransition: 'fade',               

 icon: 'error',               

 position: 'top-right'  		        

});      }else{ 			

$.toast({        

heading: 'Error',                

text: 'Model has already been added to the cart',                

showHideTransition: 'fade',                

icon: 'error',               

 position: 'top-right'  		       

 });      }  	})  });

$(".deleteItem").click(function(){  	

var id=$(this).attr("value");  	  	

$.ajax({  		

url : "cart_work.php?delete="+id,  		

type: "POST"  	

}).done(function(response){     

$('#cartItems').html(response);   

$.toast({              

heading: 'Success',                

text: 'Model deleted successfully<br>Please refresh the page to see changes inside the cart',               

 showHideTransition: 'fade',               

 icon: 'success',               

 position: 'top-right',                                                

hideAfter: 8000        

});  	

}); 

 });

});

</script>