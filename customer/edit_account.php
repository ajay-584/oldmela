<?php
@session_start();
 include("includes/db.php");
 
 
 if(isset($_GET['edit_account'])){
	 
	 $customer_email = $_SESSION['customer_email'];
	
	$get_customer = "select * from customers where customer_email='$customer_email'";
	
	$run_customer = mysqli_query($con, $get_customer);
	
	$row=mysqli_fetch_array($run_customer);
	
	$id = $row['customer_id'];
	$name = $row['customer_name'];
	$email = $row['customer_email'];
	$pass = $row['customer_pass'];
	$country = $row['customer_country'];
	$city = $row['customer_gender'];
	$contact = $row['customer_contact'];
	$address = $row['customer_add'];
	$pin = $row['customer_pin'];
	
	 }

?>

 <div style='padding:10px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
 <form action="" method="post">
             
             <table width="100%" align="center" height="50%" class="table" >
             
               
               <tr align="center">
                  <td colspan="2"><h2>Update Account<h2></td>
               </tr>
               
               <tr>
                  <td align="right">Nmae:</td>
                  <td><input class="name" type="text" name="c_name" value="<?php echo $name; ?>"></td>
               </tr>
               
             <!--   <tr>
                  <td align="right"><b>Email:</b></td>
                  <td><input type="text" name="c_email"  value="<?php echo $email; ?>"></td>
               </tr>
               -->
                <tr>
                  <td align="right">Password:</td>
                  <td><input class="name" type="password" name="c_pass"  value="<?php echo $pass; ?>"></td>
               </tr>
               
                <tr>
                  <td align="right">Country:</td>
                  <td>
                    <select class="sendb" name="c_country" disabled>
                     <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                      <option>Select Country</option>
                      <option>India</option>
                      <option>China</option>
                      <option>Pakistan</option>
                      <option>Bangla desh</option>
                      <option>Iran</option>
                      <option>Afganistan</option>
                      <option>S.U</option>
                      <option>U.K</option>
                      <option>Japan</option>
                      
                       
                       
                    </select>
                  
                  
                  </td>
               </tr>
             <!--  
                <tr>
                  <td align="right"><b>City:</b></td>
                  <td><input type="text" name="c_city"  value="<?php echo $city; ?>"></td>
               </tr>
               -->
                <tr>
                  <td align="right">Mobile no:</td>
                  <td><input class="name" type="text" name="c_contact"  value="<?php echo $contact; ?>"></td>
               </tr>
               
                <tr>
                  <td align="right">City:</td>
                  <td><input class="name" type="text" name="c_address"  value="<?php echo $address; ?>"></td>
               </tr>
               
                <tr>
                  <td align="right">Pin code</td>
                  <td><input class="name" type="text" name="c_pin"  value="<?php echo $pin; ?>"></td>
               </tr>
                              
               <tr align="center">
                  <td colspan="2"><input class="submitb" type="submit" name="update_account" value="Update Now" /></td>
               </tr>
               
          
             </table>
                          
             </form>
     </div>
<?php
  
    if(isset($_POST['update_account'])){
		
		  $update_id = $id;
		  
	   $c_name = $_POST['c_name'];
	 //  $c_email = $_POST['c_email'];
	  // $c_pass = $_POST['c_pass'];
	  // $c_city = $_POST['c_city'];
	   $c_contact = $_POST['c_contact'];
	   $c_address = $_POST['c_address'];
	   $c_pin = $_POST['c_pin'];
	   
	   $update_c = "UPDATE `customers` SET `customer_name`='$c_name',`customer_country`='$country',`customer_contact`='$c_contact',`customer_add`='$c_address',`customer_pin`='$c_pin' WHERE `customer_id`='$update_id'";
	   
	   $run_c = mysqli_query($con,$update_c);
	   
	   if($run_c){
		   
		   echo "<script>alert('Your account has been updated!')</script>";
		   echo "<script>window.open('my_account.php','_self')</script>";
		   
		   }
	   else{
	       
	       echo "Sorry under updating"; 
	   }
		
		}



?>             
             
