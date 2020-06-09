<?php include("c_header.php"); ?>
<?php
   if(!isset($_SESSION['customer_email'])){
	
	echo "<script>window.open('../checkout.php','_self')</script>";
	
	}
	
	else {
?>           
           
   <div style='padding:10px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>       
 <form method="post" action="my_orders.php" enctype="multipart/form-data">
  
   <table width="100%" height="750" align="center" class="table" >
   
    <tr>
     <td colspan="2" align="center"><h2>Upload Product</h2></td>
   </tr>
   <tr>
   <td colspan="2" align="center"><input class="name" type="text" name="product_title" maxlength="50" placeholder="Product title..." /></td>
   </tr>
   <tr>
   <td colspan="2">
   <select name="product_cat" class="sendb" >
     <option>Slect a categories</option>
     
      <?php
             $get_cats="select * from categories";
		 
	        $run_cats=mysqli_query($con, $get_cats);
			 
			 while ($row_cats=mysqli_fetch_array($run_cats)){
				 
				 $cat_id=$row_cats['cat_id'];
				 $cat_title=$row_cats['cat_title'];
				 
                  echo"<option value='$cat_id'>$cat_title</option>";
			  
	
			 }
 ?> 

     </select>
   
   
   </td>
   
   </tr>
     <tr>
   <td colspan="2" align="center"><input class="name" type="text" name="product_keywords"/ placeholder=" Write product categories..."></td>
   
   </tr>
   
   <tr>
    <td colspan="2" align="center" style="color:red;">Maximum image size should be 2MB.</td>
    </tr>
    <tr>
   <td colspan="2" align="center">Product image1<input class="sendb" type="file" name="product_img1" placeholder="Product image1..." /></td>
   
   </tr>
   
   <tr>
   <td colspan="2" align="center">Product Image2<input class="sendb" type="file" name="product_img2"/></td>
   
   </tr>
   
   <tr>
   <td colspan="2" align="center">Product Image3<input class="sendb" type="file" name="product_img3"/></td>
   
   </tr>
   
   <tr>
   <td colspan="2" align="center"><input class="name" type="text" name="product_price" placeholder="Product price..." /></td>
   
   </tr>
   
   <tr>
   <td colspan="2" align="center"><input class="name" type="text" name="product_b" placeholder="Product brand..." required /></td>
   
   </tr>
   
   <tr>
   <td colspan="2" align="center"><textarea class="desc" name="product_desc" placeholder="Product description..." cols="50" rows="5"></textarea></td>
   
   </tr>
    <tr>
   <td colspan="2" align="center">
     <select  class="sendb" name="product_brand" >
     <option>select city </option>
   
    <?php
             $get_brands = "select * from brands";
			 
			 
			 $run_brands = mysqli_query($con, $get_brands);
			 
			 while ($row_brands=mysqli_fetch_array($run_brands)){
				 
				 $brand_id=$row_brands['brand_id'];
				 $brand_title=$row_brands['brand_title'];
				 
                 
              echo"<option value='$brand_id'>$brand_title</option>";
			  
			  		 }
              ?> 
             
      </select>
      
   </td>
   
   </tr>
   
    <tr>
   <td colspan="2" align="center"><input class="name" type="text" name="p_add"  size="50" placeholder="Location" /></td>
   
   </tr>
   
    <tr>
   <td colspan="2" align="center"><input class="name" type="text" name="p_no" placeholder="Mobile no" /></td>
   
   </tr>

   
   <tr>
   
   <td colspan="2" align="center"><input class="submitb" type="submit" name="insert_product" value="Upload"/></td>
   
   </tr>
  </table>
  </form>
</div>

 <?php
    
	//Getting the customer id

	$c = $_SESSION['customer_email'];
	$get_c = "select * from customers where customer_email='$c'";
	
	$run_c = mysqli_query($con, $get_c);
	
	$row_c = mysqli_fetch_assoc($run_c);
		
	$customer_id = $row_c['customer_id'];	
   
	if(isset($_POST['insert_product']))
	{
	//text data variables
		
	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_brand = $_POST['product_brand'];
	$c_address = $_POST['p_add'];
	$c_number = $_POST['p_no'];
	$product_price = $_POST['product_price'];
	$product_b = $_POST['product_b'];
	$product_desc = $_POST['product_desc'];
	$product_status = 'on';
	$product_keywords = $_POST['product_keywords'];
		
		
    //image nmae
   $product_img1 = $_FILES['product_img1']['name'];
   $product_img2 = $_FILES['product_img2']['name'];
   $product_img3 = $_FILES['product_img3']['name'];
   
   //Image temp name
   $temp_name1 = $_FILES['product_img1']['tmp_name'];
   $temp_name2 = $_FILES['product_img2']['tmp_name'];
   $temp_name3 = $_FILES['product_img3']['tmp_name']; 
   
   if($product_title=='' OR $product_cat=='' OR $product_brand=='' OR $c_address=='' OR $c_number=='' OR $product_price=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1=='')
    {
   
    echo "<script>alert('please fill all the fields!')</script>";
    exit();
   
	}
		else {
		
		
		//uploading images its folder
		move_uploaded_file($temp_name1,"images/$product_img1");
		move_uploaded_file($temp_name2,"images/$product_img2");
		move_uploaded_file($temp_name3,"images/$product_img3");
		
		
     $insert_product = "INSERT INTO `products`(`c_id`, `cat_id`, `brand_id`, `c_add`, `c_mob`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `p_brand`, `product_desc`, `product_keywords`, `product_status`) VALUES ('$c','$product_cat','$product_brand','$c_address','$c_number',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_b','$product_desc','$product_title,$c_address,$product_b,$product_keywords','$product_status')";
      
   
   $run_product = mysqli_query($con, $insert_product);
   
   
      if($run_product)
	  {
		  echo "<script>alert('product inserted successfully')</script>";
		   echo "<script>window.open('view_products.php','_self')</script>";
   
	  }

   
	 }
   }
   
?>
           
             
             
             <?php
			  
				  
				   if(isset($_GET['edit_account'])){
				  
				  include("edit_account.php");
				  
				  }
				  
				    if(isset($_GET['change_pass'])){
				  
				  include("change_pass.php");
				  
				  }
				  
				   
			 
			 ?>
         
         
<?php  include("c_footer.php"); ?> 
<?php } ?>        
