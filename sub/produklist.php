<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">
	<title>Daftar Produk dibeli</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/media-queries.css">  
    <link rel="stylesheet" href="../css/tabcontent.css">  
    <link rel="stylesheet" href="../css/modal.css">  
    <link rel="stylesheet" href="../css/pagination.css">  

   <!-- Script
   =================================================== -->
	<script src="./js/modernizr.js"></script>
	


   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="../favicon.png" >

</head>

<body>

	<div id="top"></div>
   <div id="preloader"> 
	   <div id="status">
         <img src="./images/loader.gif" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">

	      <div class="logo">
	         <a href="./index.php">Produk barang</a>
	      </div>

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class='menu-text'>Show Menu</span>
	         	<span class="menu-icon"></span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class='menu-text'>Hide Menu</span>
         		<span class="menu-icon"></span>
         	</a>         

	         <ul id="nav" class="nav">
	            <li><a href="../indexuser.php#hero">Home.</a></li>
	            <li class="current"><a href="../indexuser.php#about">Produk.</a></li>
	            <li><a href="../indexuser.php#journal">Transaksi.  </a></li>	
                 <li><a href="./keranjang.php">Keranjang Belanja.  </a></li>	
	            <li><a  href="../index.php">Logout.</a></li>
	         </ul> 

	      </nav> <!-- /nav-wrap -->	      

	   </div> <!-- /header-inner -->

   </header>


   <!-- Page Title
   ================================================== -->
   <section id="page-title">	
   	  
		<div class="row">

			<div class="twelve columns">

				<h1>Daftar Produk dibeli<span>.</span></h1>
				<p>Aenean condimentum lacus sit amet luctus lobortis.</p>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->


   <!-- Content
   ================================================== -->
   <section id="content">
        <div class="row">
            
                  <table style="width:100%">
                          <caption>No Invoice : <?php echo $_GET['invoice_no']?></caption>
                          <tr>
                              <th>Nama Produk</th>
                              <th>Berat</th>
                              <th>Kuantitas</th>
                              <th>Harga</th>
                              <th>Sub total</th>
                              <th>Ulasan</th>
                          </tr>
                      
                        <?php
                            include '../php/rincian_transaksi.php';
                      ?>

                    </table>
                <div class="center">
                    <div class="pagination">
                      <a href="#">&laquo;</a>
                      <a href="#" class="active">1</a>
                      <a href="#">&raquo;</a>
                    </div>
                </div>
                
                <p><br></p>


        </div>
   </section> <!-- /content -->  


 <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About TokoKeren</h3>
               
            <p>TokoKeren adalah suatu penghubung masyarakat dengan produk yang ingin dibeli dengan cara yang sangat mudah. 
            </p>

            <p>Akan selalu menampilkan yang terbaik untuk seluruhnya.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">About Us</h3>
                  <p>
                  Gedung Fasilkom<br>
                  Universitas Indonesia<br>
                  Depok, Jawa Barat 15242
                  </p>

                  <ul>
                    <li><a href="tel:6473438234">647.343.8234</a></li>
                    <li><a href="tel:1234567890">123.456.7890</a></li>
                    <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>
   

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="../js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>   
   <script src="../js/jquery.flexslider.js"></script>
   <script src="../js/jquery.fittext.js"></script>
   <script src="../js/backstretch.js"></script> 
   <script src="../js/waypoints.js"></script>  
   <script src="../js/main.js"></script>
   <script src="../js/multitab.js"></script>
    <script src="../js/modal.js"></script>

</body>

</html>