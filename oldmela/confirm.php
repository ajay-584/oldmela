
    <?php include('header.php') 
    ?>
<div style='padding:20px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
         <div class="table">
         <h3>Please confirm your email</h3><br>
         <p style="color:red;">Please check your email and may you have to check spam folder.</p>
           <form action="" method="POST">
             <div class="" style="text-align:center; padding:5px;">
                <input class="name" type="text" name="confirm_code" class="form-control" placeholder="Enter the code " required />
                 <div class="input-group-btn" style="padding:10px;  text-align:center; ">
                <input class="submitb" type="submit" value="confirm" name="confirm" class="btn btn-success" />
                
                </div><!--end input group btn-->
             </div><!--end input group-->
           </form><!--end form-->
         <?php  //  confirm_emai(); ?>
         </div><!--end com-->
    </div><!-- end container-->
    <?php 
     function confirm_emai(){
	  GLOBAL $db;
	  if(isset($_POST['confirm'])){
		  $code = trim($_POST['confirm_code']);
		  // $user_email = $_SESSION['customer_email'];
        //    customer_email = '$user_email' &&
			  $update = "select code from customers where  code = '$code'";
			   $run =  mysqli_query($db,$update);
			   if( mysqli_num_rows($run)==1){
				   $update_code = 1;
				  $update = "update customers set status = '$update_code' where  code = '$code'";
				  $run_up = mysqli_query($db, $update);
				  if($run_up){
					  echo "<script>alert('Your email has been confirmed Please login')</script>";
		              echo   "<script>window.open('checkout.php','_self')</script>";
				  }else{
					 echo "there is some problem";  
				  }
			   }else 
			   {
				 echo "<script>alert('Invalid code...')</script>";
			   }		   
	  }
  }
    confirm_emai();
    ?>
     <?php include('footer.php') ?>
</body>
</html>
