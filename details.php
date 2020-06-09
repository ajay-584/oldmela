 <?php include("header.php");  ?> 
              <?php 			  
			  if(isset($_GET['pro_id'])){				  
				  $product_id = $_GET['pro_id'];			  
	               $get_products = "select * from products where product_id='$product_id'";			  
		  $run_products = mysqli_query($db, $get_products);		  
		  while($row_products=mysqli_fetch_array($run_products))
		  {
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_cat = $row_products['cat_id'];
			$pro_brand = $row_products['brand_id'];
			$pro_desc = $row_products['product_desc'];
			$pro_price = $row_products['product_price'];
			$pro_b = $row_products['p_brand'];
			$c_no = $row_products['c_mob'];
			$c_loc = $row_products['c_add'];
			$pro_image1 = $row_products['product_img1'];
			$pro_image2 = $row_products['product_img2'];
			$pro_image3 = $row_products['product_img3'];  			
			echo"
			<div id='single_product'>
			
		   <a target='_blank' href='customer/images/$pro_image1'>	<img src='customer/images/$pro_image1' width='200' height='200' /> </a>
		   <a target='_blank' href='customer/images/$pro_image2'>	<img src='customer/images/$pro_image2' width='200' height='200' /> </a>
		   <a target='_blank' href='customer/images/$pro_image3'>	<img src='customer/images/$pro_image3' width='200' height='200' /> </a>
			<br><br><hr><h3 style='color:green;'>$pro_title</h3>
			
               <table width='100%' height='auto' align='center' class='table' style='border:1px solid black; border-radius:4px;background-color:#fff;'border='1'>
					<tr><td align='right'><p style='color:red;'>Brand</p></td><td align='left'>$pro_b</td></tr>
					 <tr><td align='right'><p style='color:red;'>Price Rs</p></td><td align='left'>$pro_price /-</td></tr>
					 <tr><td align='right'><p style='color:red;'>Description</p></td><td align='left'><p>$pro_desc</p></td></tr>
					  <tr><td align='right'><p style='color:red;'>Contact No</p></td><td align='left'><b>$c_no</b></td></tr>
					   <tr><td align='right'><p style='color:red;'>Location</p></td></td><td align='left'>$c_loc</td></td></tr>
					    
			   
			   </table><br>
		 <h3 align='right'> <a href='contact.php'>Report</a></h3>
			
			</div>
			
			";					  
		  }
			  }	   
	           ?>                    
 <?php include("footer.php");  ?>