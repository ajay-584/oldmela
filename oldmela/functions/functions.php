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


//Getting the products to display
function getPro(){
	
	  global $db;
	  
	     if(!isset($_GET['cat'])){
			 
			 if(!isset($_GET['brand'])){
			 
		  $get_products = "select * from products order by rand() LIMIT 0,30";
		  
		  
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
			<a href='details.php?pro_id=$pro_id' target='_blank'><img src='customer/images/$pro_image' width='180' height='180' /></a><br>
			<div class='single_pro_title'style='border-bottom:1px solid black;' ><p>$pro_title</p></div>
		    <p><b>RS:$pro_price </b></p>

		
			
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
			  echo"<div style='padding:40px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'><h4>Sorry No Product found in this categories<h4></div>";
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
			<a href='details.php?pro_id=$pro_id' target='_blank'><img src='customer/images/$pro_image' width='180' height='180' /></a><br>
			<div class='single_pro_title' style='border-bottom:1px solid black;'><p>$pro_title</p></div>
			<p><b>RS:$pro_price </b></p>
			
			
		
			
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
			<div class='single_pro_title' ><h4>$pro_title</h4></div>
			<a href='details.php?pro_id=$pro_id' target='_blank'><img src='customer/images/$pro_image' width='180' height='180' /></a><br>
			
			
			<p><b>RS:$pro_price </b></p>
			
			
			
		
			
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
				 
                 
              echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li><hr>";
			  
             
               
			 }
              

}


?>