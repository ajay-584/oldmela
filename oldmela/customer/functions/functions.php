<?php
//establish the connnection
$db = mysqli_connect("localhost","oldmela","Vt-jE.i9&z9O","slietstore");



//function getting the ip address
function getIp(){

        $ip = $_SERVER['REMOTE_ADDR'];     
        if($ip){
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            return $ip;
        }
        // There might not be any data
        return false;
    }
//Getting the defaults for customer

function getdefault(){
	
	global $db;
	
	$c = $_SESSION['customer_email'];
	
	$get_c = "select * from customers where customer_email='$c'";
	
	$run_c = mysqli_query($db, $get_c);
	
	$row_c=mysqli_fetch_array($run_c);
		
		$customer_id = $row_c['customer_id'];
		$customer_name = $row_c['customer_name'];
		
		if(!isset($_GET['my_orders'])){
		 if(!isset($_GET['edit_account'])){
		  if(!isset($_GET['change_pass'])){
		    if(!isset($_GET['delete_account'])){
				
				
						
						echo "
				<div style='padding:40px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
					<h2 style='color:red;padding:4px;'>Important!</h2>
					<p style='padding:5px 0px;'>Dear $customer_name <spam style='color:blue;'>oldmela.com </spam> is only for <b>Slietians.</b></p>
					 <p><spam align='center' style='color:green;'>Maximum image size should be 2MB.</spam></p>
					 
					</div>
				
					";
						}		
		}
}
}
	}	
	

//Getting the products to display
function getPro(){
	
	  global $db;
	  
	     if(!isset($_GET['cat'])){
			 
			 if(!isset($_GET['brand'])){
			 
		  $get_products = "select * from products order by rand() LIMIT 0,6";
		  
		  
		  $run_products = mysqli_query($db, $get_products);
		  
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
			
			<h3>$pro_title</h3>
			
			<img src='admin_area/product_images/$pro_image' width='180' height='180' /><br>
			
			
			<p><b>RS:$pro_price </b></p>
			
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			<a href='index.php?add_cart=$pro_id'><button style=float:right;'>Add to cart</button></a>
		
			
			</div>
			
			";
		
			  
			  
			  }

		 }
	  }
	}
//Getting the categories products to display	
function getCatPro(){
	
	  global $db;
	  
	     if(isset($_GET['cat'])){
			 
			 $cat_id=$_GET['cat'];
			 
		  $get_cat_pro = "select * from products where cat_id='$cat_id'";
		  
		  
		  $run_cat_pro = mysqli_query($db, $get_cat_pro);
		  
		  $count = mysqli_num_rows($run_cat_pro);
		  if($count==0){
			  echo"<h2>Sorry No Product found in this categories";
		  }
		  
		  while($row_cat_pro=mysqli_fetch_array($run_cat_pro))
		  {
			$pro_id = $row_cat_pro['product_id'];
			$pro_title = $row_cat_pro['product_title'];
			$pro_cat = $row_cat_pro['cat_id'];
			$pro_brand = $row_cat_pro['brand_id'];
			$pro_desc = $row_cat_pro['product_desc'];
			$pro_price = $row_cat_pro['product_price'];
			$pro_image = $row_cat_pro['product_img1'];  
			
			echo"
			<div id='single_product'>
			
			<h3>$pro_title</h3>
			
			<img src='admin_area/product_images/$pro_image' width='180' height='180' /><br>
			
			
			<p><b>RS:$pro_price </b></p>
			
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			<a href='index.php?add_cart=$pro_id'><button style=float:right;'>Add to cart</button></a>
		
			
			</div>
			
			";
		
			  
			  
			  }

		 }
	  
	}	
//Getting the brands products to the display	
function getbrandPro(){
	
	  global $db;
	  
	     if(isset($_GET['brand'])){
			 
			 $brand_id=$_GET['brand'];
			 
		  $get_brand_pro = "select * from products where brand_id='$brand_id'";
		  
		  
		  $run_brand_pro = mysqli_query($db, $get_brand_pro);
		  
		  $count = mysqli_num_rows($run_brand_pro);
		  if($count==0){
			  echo"<h2>Sorry No Product found in this brands";
		  }
		  
		  while($row_brand_pro=mysqli_fetch_array($run_brand_pro))
		  {
			$pro_id = $row_brand_pro['product_id'];
			$pro_title = $row_brand_pro['product_title'];
			$pro_cat = $row_brand_pro['cat_id'];
			$pro_brand = $row_brand_pro['brand_id'];
			$pro_desc = $row_brand_pro['product_desc'];
			$pro_price = $row_brand_pro['product_price'];
			$pro_image = $row_brand_pro['product_img1'];  
			
			echo"
			<div id='single_product'>
			
			<h3>$pro_title</h3>
			
			<img src='admin_area/product_images/$pro_image' width='180' height='180' /><br>
			
			
			<p><b>RS:$pro_price </b></p>
			
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			<a href='index.php?add_cart=$pro_id'><button style=float:right;'>Add to cart</button></a>
		
			
			</div>
			
			";
		
			  
			  
			  }

		 }
	  
	}	
	
//Geting the brands to display	
function getBrands(){
	global $db;
	
	$get_brands = "select * from brands";
			 
			 
			 $run_brands = mysqli_query($db, $get_brands);
			 
			 while ($row_brands=mysqli_fetch_array($run_brands)){
				 
				 $brand_id=$row_brands['brand_id'];
				 $brand_title=$row_brands['brand_title'];
				 
                 
              echo"<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
			    
			 }

	}


//Geting the categories to display
function getCats(){
   
   global $db;
  
             $get_cats="select * from categories";
			 
			 
			 $run_cats=mysqli_query($db, $get_cats);
			 
			 while ($row_cats=mysqli_fetch_array($run_cats)){
				 
				 $cat_id=$row_cats['cat_id'];
				 $cat_title=$row_cats['cat_title'];
				 
                 
              echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
			  
			  
             
               
			 }
              

}


?>