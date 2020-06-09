<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>oldmela.com</title>
<meta name="description" content="oldmela.com is online classified website or plateform.The oldmela.com provides free ads posting  facilities where any one can post own ads.">
<meta name="keywords" content="oldmela.com,oldmela,mela,sliet,slietlongowal,secondhanditems,Buy,
Home,personal,electronics,Homes,Sale,classified,books,olditems">
<meta name="google-site-verification" content="rehUa18nV4G3pBBxHKmChpZYi6H2GEXfJsmM6UTG2GM" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="styles/nstyle.css" media="all" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126692364-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126692364-1');
</script>

</head>
<body>      
  <!--main container starts  -->
<div class="container">


      <!--header starts here-->
      <header class="header">
          <div class="header1">
            <h1>oldmela.com</h1>
          </div>
    <!--  <a href="index.php"> <img src="image/oldmela.jpg" style="float:left;" height="100" width="1000"></a> -->

      
      <!--navagation bar start-->
     <div class="header2">

     <ul >
         <li><a href="../index.php">Home</a></li>
         <li><a href="my_orders.php">Upload Product</a></li>

           <?php
           if(isset($_SESSION['customer_email'])){

        echo"<li><a href='my_account.php'>My Account</a></li>";
		   }
		   else {

			  echo "<li><a href='../checkout.php' style='color:#white;'>Sign In</a></li>";
			   }
     
           if(isset($_SESSION['customer_email'])){

        echo"<li><a href='../logout.php'>Logout</a></li>";
		   }
		   else {

          echo " <li><a href='../customer_register.php'>Sign Up</a></li>";
           }
           
			   ?>
         
         <!--  <li><a href="about.php">About Us</a></li> -->
       </ul>
         
    </div>  <!-- header ends-->
          
  </header>  <!--navagation bar ends-->

    <div class="sbox">
        <div class="subox"> 
       <form method="get" action="../results.php" enctype="multipart/form-data">
       <input type="text" name="user_query" placeholder="search here..." size="140"/>
       <input type="submit" name="search" value="search"/>
       </form>
        </div>
     </div><!-- ends sbox -->
  <section class="content_wrapper">

         <!-- leftside_war start-->
         <div id="left_sidebar">  
           
              <div id="sidebar_title" align="center">Manage Account</div>
         
               <ul id="cats">
                 
				   
				   <img src="customer_photos/pro.png" width="120" height="150" /><hr>
				  
				  
				  
                  <li><a href="my_orders.php">Upload Product</a></li><hr>
                  <li><a href="view_products.php">View Products</a></li><hr>
                  <li><a href="my_account.php?edit_account">Edit Account</a></li><hr>
                  <li><a href="my_account.php?change_pass">Change Password</a></li><hr>
                  <li><a href="logout.php">Logout</a></li>
               </ul>
         </div>
         <!--left_sidebae ends-->
         <!--right content start-->
        <div id="right_content">

              
                <div id="headline_content">
               
                   <?php
                 if(!isset($_SESSION['customer_email'])){

					 echo "<h4>Welcome Guest!</h4>";
					 }
					 else{
						 echo "<h4><span style='color:red;'><b>Welcome:</span>".$_SESSION['customer_email']."</b></h4>";
						 }
                     ?>
               
            </div>
    
			 <div id="product_box">