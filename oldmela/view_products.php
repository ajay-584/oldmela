<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
 @session_start();
 if(isset($_GET['view_products'])){

?>

<table align="center" width="795" bgcolor="#FFFFFF">

   <tr align="center">
      <td colspan="8"><h2>View All Products</h2></td>
   </tr>
   
   <tr>
   
       <th>Product No</th>
       <th>Email</th>
       <th>Title</th>
       <th>Image</th>
       <th>Price</th>

       <th>Status</th>
       <th>Edit</th>
       <th>Delete</th>     
   </tr>
   <?php
   
    include("includes/db.php");
	
	
	
	$i =0;
	
	$get_pro = "select * from products order by product_id desc ";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$p_id = $row_pro['product_id'];
		$p_email = $row_pro['c_id'];
		$p_title = $row_pro['product_title'];
		$p_img = $row_pro['product_img1'];
		$p_price = $row_pro['product_price'];
		$status = $row_pro['product_status'];
		
		
		$i++;
		
   
   ?>
   <tr align="center">
   
     <td><?php echo $i; ?></td>
     <td> <?php echo $p_email; ?></td>
     <td><?php echo $p_title; ?></td>
     <td><img src="../customer/images/<?php echo $p_img; ?>" width="80" height="80"></td>
     <td><?php echo $p_price; ?></td>
     
    
     <td>
        <?php echo $status; ?>
     </td>
     <td><a href="index.php?edit_pro=<?php echo $p_id ?>">Edit</a></td>
     <td><a href="delete_pro.php?delete_pro=<?php echo $p_id ?>">Delete</a></td>
   
   </tr>
   
   <?php } ?>
   
   </table>
   
    <?php }
    
	 ?>

</body>
</html>