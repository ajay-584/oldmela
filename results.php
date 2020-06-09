 <?php include("header.php");  ?>
 
 
 
              <?php 
			     $search= trim($_GET['search']);
			   if(isset($search)){
				   
				   $user_keyword = $_GET['user_query'];
				   
	              $get_products = "select * from products where product_keywords like '%$user_keyword%'";
		  
		  
		  $run_products = mysqli_query($con, $get_products);
		  
		  while($row_products=mysqli_fetch_array($run_products))
		  {
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_cat = $row_products['cat_id'];
			$pro_brand = $row_products['brand_id'];
			$pro_desc = $row_products['product_desc'];
			$pro_price = $row_products['product_price'];
			$pro_image = $row_products['product_img1'];  
			
			echo"
			<div id='single_product'>
			<a href='details.php?pro_id=$pro_id' target='_blank'><img src='customer/images/$pro_image' width='180' height='180' /></a><br>
			<div class='single_pro_title' style='border-bottom:1px solid black;'><p>$pro_title</p></div>
			<p><b>RS:$pro_price </b></p>
			

			
			</div>
			
			";
		
			  
			  
			  }

			   }
	           ?>
  <?php include("footer.php");  ?>       