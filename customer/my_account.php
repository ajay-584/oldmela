
<?php include("c_header.php"); ?>
    <?php
   if(!isset($_SESSION['customer_email'])){
	
	echo "<script>window.open('../checkout.php','_self')</script>";
	
	}
	
	else {
?>        
             
             <?php getdefault(); ?>
             <?php
			  
				  
				   if(isset($_GET['edit_account'])){
				  
				  include("edit_account.php");
				  
				  }
				  
				    if(isset($_GET['change_pass'])){
				  
				  include("change_pass.php");
				  
				  }
				  
				   
			 
			 ?>
 <?php include("c_footer.php"); ?> 
 <?php } ?>