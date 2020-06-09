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
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126692364-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126692364-1');
</script>

	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="styles/nstyle.css" media="all" />
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
         <li><a href="index.php">Home</a></li>
         <li><a href="customer/my_orders.php">Upload Product</a></li>

           <?php
           if(isset($_SESSION['customer_email'])){

        echo"<li><a href='customer/my_account.php'>My Account</a></li>";
		   }
		   else {

			  echo "<li><a href='checkout.php' style='color:#white;'>Sign In</a></li>";
			   }
     
           if(isset($_SESSION['customer_email'])){

        echo"<li><a href='logout.php'>Logout</a></li>";
		   }
		   else {

          echo " <li><a href='customer_register.php'>Sign Up</a></li>";
           }
           
			   ?>
         
         <!--  <li><a href="about.php">About Us</a></li> -->
       </ul>
         
    </div>  <!-- header ends-->
          
  </header>  <!--navagation bar ends-->

    <div class="sbox">
        <div class="subox"> 
       <form method="get" action="results.php" enctype="multipart/form-data">
       <input type="text" name="user_query" placeholder="search here..." size="140"/>
       <input type="submit" name="search" value="search"/>
       </form>
        </div>
     </div><!-- ends sbox -->
        <div id="right_content">

              
                <div id="headline_content">
               
                   <?php
                 if(!isset($_SESSION['customer_email'])){

					 echo "<h4>Welcome Guest!</h4>";
					 }
					 else{
						 echo "<h4><span style='color:red;float:left;'>Welcome:</span><span style='float:left;'>".$_SESSION['customer_email']."</span></h4>";
						 }
                     ?>
               
            </div>
            </div>
    
   		  




<div style=" width:100%; margin:auto;" >

<p style="width: 80%;
	margin: auto;
	padding: 40px 30px 10px 40px;
	background-color: rgba(0,0,0,0.05);
	font-size: 1.1em;
     text-align:left; ">
    <strong>Problem Statement:-</strong><br><br>
    Since we have a lot of things which are useless to us and we don’t require them anymore, but are more important to other person such as books, cycles, etc…<br><br>
    As like in collages when students get passed from their respective programs they have a lot of things which are of no need to them, but have a lot importance to those who are from other places like Bihar, Rajasthan, Delhi, etc.. And have no mean to purchase those things.<br><br>
    In our college (SLIET) most of the students belongs to middle or low family who can’t afford that expensive engineering books, cycles, etc… which results him/her to travel to other big cities like Delhi old market, Ludhiana and lot more places. <br><br>
    After purchasing goods they come to know that the things they purchased are already available to the seniors which are no need to them anymore. <br><br>
    Since the things with us gets unserviceable after some time, which leads to no profit to us.<br><br>
    
    <strong>Workarea:-</strong><br><br>
    We have developed a platform (oldmela.com).<br><br>
    The oldmela.com is an e-commerce website or     online marketing place which is based on c to c (consumer to consumer) model.<br><br>
    The consumer can sell goods and services to another consumer.
    Two implementation of oldmela.com are auctions and classified advertisement.<br><br>
    The oldmela.com represents a market environment where one can purchase goods and services from another consumer using this platform.<br><br>
    The oldmela.com connect buyer and seller directly.<br><br>


</p>
</div>



    <!--footer starts-->
    <footer class="footer">
    
        <div class="footer1">
            <div class="footer1list">
                
        <ul class="footerlist">  
           <li><a href="index.php">Home</a></li><hr>
           <li><a href="customer/my_orders.php">Upload Product</a></li><hr>
           <li><a href='customer/my_account.php'>My Account</a></li><hr>
           <li><a href="contact.php">Contact Us</a></li><hr>
           <li><a href="about.php">About Us</a></li><hr>  
         </ul>
                </div>
        </div>
        <div class="footer1">
             <div class="follow">
               <b><h3>Follow Us</h3></b><br><br>
               <span class="social-icons fb">
               <i class="fab fa-facebook-square"></i>
               </span>&nbsp;
               <span class="social-icons tw">
               <i class="fab fa-twitter-square"></i>
               </span>&nbsp;
               <span class="social-icons yt">
              <a href="https://www.youtube.com/channel/UCHYOl_ua4dOErU0VYdkksDQ" target="_blank" > <i class="fab fa-youtube-square"></i></a>
               </span>&nbsp;
               <span class="social-icons ins">
               <i class="fab fa-instagram"></i>
               </span>&nbsp;
               <span class="social-icons lnk">
            <a href="https://www.linkedin.com/company/oldmela/" target="_blank" style='text-decoration: none;'> <i class="fab fa-linkedin"></i></a>
               </span>&nbsp; 
           </div> 
        </div>
     <div class="footer2">
       <h3>&copy;2018-2019&nbsp; By&nbsp; www.oldmela.com</h3>
     </div>
    
    
   
    </footer>
    <!--footer ends-->
</div>
<!--main container end-->


</body>
</html>
