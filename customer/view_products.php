<?php include("c_header.php"); ?>
<?php
   if(!isset($_SESSION['customer_email'])){
	
	echo "<script>window.open('../checkout.php','_self')</script>";
	
	}
	
	else {
?>
             
              
  <div class="font" style='padding:10px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'> 
<table align="center" width="100%" border="1" class="table" >

   <tr align="center">
      <td colspan="8"><h2>View Products</h2></td>
   </tr>
   
   <tr bgcolor="#FFFFCC" class="viewsize">
   
       <th>S.N</th>
       <th>Image</th>
       <th>Product info<th>
       <!-- <th>Delete</th> -->    
   </tr>
   <?php
    $c = $_SESSION['customer_email'];
	
	$i =0;
	
	$get_pro = "select * from products where c_id='$c'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$p_id = $row_pro['product_id'];
		$p_title = $row_pro['product_title'];
		$p_des = $row_pro['product_desc'];
		$p_keywords = $row_pro['product_keywords'];
		$p_img = $row_pro['product_img1'];
		$p_price = $row_pro['product_price'];
		$mobile = $row_pro['c_mob'];
		$add = $row_pro['c_add'];
		
		
		$i++;
		
   
   ?>
   <tr class="viewsize" align="center">
   
     <td><?php echo $i; ?></td>
       <td><img src="images/<?php echo $p_img; ?>" width="70" height="80" alt="Maximum file size 2M"></td>
     <td align="left">Name:<?php  echo $p_title; ?><br>
         Price: <?php echo $p_price; ?><br>
         Locatin:<?php echo $add; ?> <br>
         Mobile no:<?php echo $mobile; ?><br>
         Description:<?php echo $p_des; ?></td>
     
    <td><a href="delete_pro.php?delete_pro=<?php echo $p_id ?>">Delete</a></td>
   </tr>
   
   <?php } ?>
   
   </table>
   
   </div>            
           
             <?php
			 
			 
			  
				  
				   if(isset($_GET['edit_account'])){
				  
				  include("edit_account.php");
				  
				  }
				  
				    if(isset($_GET['change_pass'])){
				  
				  include("change_pass.php");
				  
				  }
				  
				   
			 
			 ?>
<?php include("c_footer.php"); ?>
<?Php } ?>