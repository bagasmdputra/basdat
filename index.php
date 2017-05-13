
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
  <meta charset="utf-8">
	<title>TokoKeren</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   =================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body class="homepage">
  <div id="preloader">
    <div id="status">
      <img src="images/loader.gif" height="60" width="60" alt="">
      <div class="loader">Loading...</div>
    </div>
  </div>


   <!-- Header
   =================================================== -->
  <header id="main-header">
   	<div class="row header-inner">
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
	        <li class="current"><a class="smoothscroll" href="#hero">Home</a></li>
	        <li><a class="smoothscroll" href="#login">Login</a></li>
          <li><a class="smoothscroll" href="#register">Register</a></li>
	        </ul>

	    </nav> <!-- /nav-wrap -->

	  </div> <!-- /header-inner -->

  </header>


   <!-- Hero
   =================================================== -->
  <section id="hero">

		<div class="row hero-content">

			<div class="twelve columns flex-container">

			  <div id="hero-slider" class="flexslider">

				  <ul class="slides">

					   <!-- Slide -->
					  <li>
						  <div class="flex-caption">
                <h1 ><img src="images/logo.png" alt="" width="220px"></h1>
								<h1>Selamat datang di TokoKeren!</h1>
							 </div>
					  </li>

					   <!-- Slide -->
					  <li>
							<div class="flex-caption">
                <h1 ><img src="images/logo.png" alt="" width="220px"></h1>
								<h1 >Toko Online terkeren di Fasilkom!</h1>
							</div>
					  </li>

					   <!-- Slide -->
					  <li>
						  <div class="flex-caption">
							  <h1 ><img src="images/logo.png" alt="" width="384px"></h1>
								<p><a class="button stroke smoothscroll" href="#login">Click here to login</a></p>
							</div>
					  </li>

				  </ul>

			  </div> <!-- .flexslider -->

	    </div> <!-- .flex-container -->

		</div> <!-- .hero-content -->

  </section> <!-- #hero -->


   <!-- Login Section
   ================================================== -->
  <section id="login">

   	<div class="row section-head">

   		<div class="twelve columns">

	      <h1>Login to know more about us!<span>.</span></h1>

	      <hr />

	    </div>

    </div>

    <div class="row form-section">

      <div id="contact-form" class="twelve columns">

        <form method="post" action="sub/login.php">

      		<fieldset>

            <div class="row">

	            <div class="twelve columns mob-whole">
	              <label for="email">Email <span class="required">*</span></label>
	      			  <input name="email" type="text" id="email" placeholder="Email" value="" />
	            </div>

            </div>

            <div class="row">

	            <div class="twelve columns mob-whole">
	              <label for="password">Password <span class="required">*</span></label>
	      				<input name="password" type="password" id="password" placeholder="Password" value=""/>
	            </div>

            </div>

            <div>
              <button class="submit full-width">Login</button>
              <div id="image-loader">
                 <img src="images/loader.gif" alt="" />
              </div>
            </div>
            <div>
              <p>Didn't have an account? Register <a class="smoothscroll" href="#register">here</a></p>
            </div>

      		</fieldset>

      	</form> <!-- /contactForm -->

      </div> <!-- /contact-form -->

    </div> <!-- /form-section -->

  </section>  <!-- /contact-->

   <!-- Register Section
   ================================================== -->
   <section id="register">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>Register to be the part of us!<span>.</span></h1>

	         <hr />

	      </div>

      </div>

      <div class="row form-section">

      	<div id="contact-form" class="twelve columns">

            <form name="contactForm" id="contactForm" method="post" action="">

      			<fieldset>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactEmail">Email <span class="required">*</span></label>
	      					<input name="contactEmail" type="text" id="contactEmail" placeholder="Email" value="" />
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactPassword">Password <span class="required">*</span></label>
	      					<input name="contactPassword" type="password" id="contactPassword" placeholder="Password" value=""/>
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactRetype">Re-type the Password <span class="required">*</span></label>
	      					<input name="contactRetype" type="password" id="contactRetype" placeholder="Re-type the Password" value=""/>
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactFName">Full Name <span class="required">*</span></label>
	      					<input name="contactFName" type="text" id="contactFName" placeholder="Full Name" value=""/>
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactSex">Sex <span class="required">*</span></label>
	      					    <select class="" name="sex">
                        <option value="Jenis kelamin">Jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
	      					    </select>
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactPNumber">Phone number <span class="required">*</span></label>
	      					<input name="contactPNumber" type="text" id="contactPNumber" placeholder="Phone number" value=""/>
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactAddress">Address<span class="required">*</span></label>
	      					<input name="contactAddress" type="text" id="contactAddress" placeholder="Address" value=""/>
	                  </div>

                  </div>

                  <div>
                     <button class="submit full-width">Register</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

      			</fieldset>

      		</form> <!-- /contactForm -->

         </div> <!-- /contact-form -->

      </div> <!-- /form-section -->

   </section>  <!-- /contact-->


   <!-- Footer
   ================================================== -->
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
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/backstretch.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
