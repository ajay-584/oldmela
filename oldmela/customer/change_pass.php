<?php @session_start(); ?>
<div style='padding:10px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
<form action="" method="post">
   
   <table width="100%" height="240" align="center" class="table">
   
      <tr align="center">
          
          <td colspan="4"><h2>Change Your Password</h2></td>
         
      </tr>
      
      <tr>
         <td colspan="2" align="center"><input class="name" type="password" name="old_pass" placeholder="Enter current password..." required/></td> 
      </tr> 
      
       <tr>
         <td colspan="2" align="center"><input class="name" type="password" name="new_pass" placeholder="Enter new password..." required/></td> 
      </tr> 
      
       <tr>
         <td colspan="2" align="center"><input class="name" type="password" name="new_pass_again" placeholder="Enter New Password Again..." required/></td> 
      </tr>
      
      <tr align="center">
          
          <td colspan="4"><input class="submitb" type="submit" name="change_pass" value="Change Password" /></td></td>
         
      </tr>  
   
   </table>



</form>
</div>
<?php
include("includes/db.php");

  $c = $_SESSION['customer_email'];
  
  if(isset($_POST['change_pass'])){
	  
	  $old_pass = $_POST['old_pass'];
	  $new_pass = $_POST['new_pass'];
	  $new_pass_again = $_POST['new_pass_again'];
	  
	  $get_real_pass = "select * from customers where customer_pass='$old_pass'";
	  
	  $run_real_pass = mysqli_query($con, $get_real_pass);
	  
	  $check_pass = mysqli_num_rows($run_real_pass);
	  
	  if($check_pass==0){
		  
		  echo "<script>alert('Your current password is not valid, try again')</script>";
		  exit();
		  
		   }
		  
		  
		  if($new_pass!=$new_pass_again){
			  
			   echo "<script>alert('Your password does not matched, try again')</script>";
		  exit();
			  			 
		  }
		  else {
			  
			  $update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c'";
			  
			  $run_pass = mysqli_query($con,$update_pass);
			  
			   echo "<script>alert('Your password has been seccesfully changed')</script>";
			    echo "<script>window.open('my_account.php','_self')</script>";
			  
			  
			  }
	  }



?>