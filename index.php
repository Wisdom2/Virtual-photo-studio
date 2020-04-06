
<?php
	require_once "header.php";
	require "./backoffice/config.php";
	require "./backoffice/Model/customer.php";
	require "./backoffice/controllers/customer/customers.php";

	if(isset($_GET['q']) && !empty($_GET['q'])) {
		echo "<script>alert('Erron: Invalid credentials...Please login/signUp')</script>";
        $_GET['q'] = '';
	}


	if(isset($_POST['btn_delete_review'])){
		$customer->deleteCustomerReview(trim($_POST['delete_review']));
	}
 ?>

	 <style type="text/css">
	 	a {
	 		color:white;
	 	}
	 	a:hover{
			 	color:gray;
			 	}
	   #accordion a {
	   	color:green;
	   }

	   .gallery {
	   	 cursor: pointer;
	   	 max-height: 250px;
	   	 max-width: 250px;

	   }

     </style>
		<nav class="navbar navbar-expand-sm" style="background-color:#0043ca;">
		  <!-- Brand/logo -->
		  <a class="navbar-brand" href="#">
		    <img src="./images/logo.jpg" alt="logo" style="width:40px;">
		  </a>
		  
			  		<!-- Links -->
			  <ul class="navbar-nav ml-auto">
			    <li class="nav-item">
			      <a class="nav-link" href="index.php">Home</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#packges">Packages</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#gallery">Our works</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#faq">FAQ</a>
			    </li>
			    <li class="nav-item">
			      <?php 
			      	
		      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
						echo '<a class="nav-link" href="./backoffice/controllers/customer/logout.php?q=logout&req=../../../index.php">Logout</a>';
						
					}else {
						echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>';
					}

			      ?>
			      
			    </li>
			  </ul>
			
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					
					<img src="images/fairmontbridesmaids.jpg" style="width:100%; height:50%;" class="slide_image">
					
					<h2 style="margin-top: -150px; margin-left: 35%;" class="text-primary">We offer the best photography</h2>

					 <p style="text-align: center;">
					 	<?php 
			      	
				      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
								echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
								
							}else {
								echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
							}

					      ?>

					 </p>
			      
				</div>
			</div>
		</div>
		<div class="container">
						
			<div class="row">
			 
				<div  data-aos="fade-up"  data-aos-duration="2000">
				     <strong>dbp Photography</strong> is an award-winning wedding photography company based in Accra City, with more than 11 years of experience crafting beautiful, thoughtful, and unique wedding storie.
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<hr>
					<h2 class="text-muted text-lead text-center" id="packges">Packages</h2>
					<hr>
				</div>
			</div>
			<div class="row" style="margin-top: 30px;">

				<div class="col" >
					<div class="card" data-aos="fade-right">
					  
					  <div class="card-body">
					  	<h5 class="text-muted">Engagement Photograpgy  GH 1,700 </h5>
					  	5 Hours Coverage<br/>Brides Dress-up <br/>
					  	30 Pages Leather Album <br/>
					  	200 Digital  retouched photos on CD<br/>
					  	2(12x16in) Canvas Print <br/>
					  	<?php 
			      	
				      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
								echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
								
							}else {
								echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
							}

					      ?>

					  </div> 
					  
					</div>
				</div>

				<div class="col" >
					<div class="card" data-aos="fade-left">
					  
					  <div class="card-body">
					  	<h5 class="text-muted">Engagement Videography GH 1,500</h5>
					  	5 Hours Coverage<br/>
					  	Brides Dress-up <br/>
					  	Brides Dress-up
					  	Groom Dress-up<br/>
					  	Montage<br/>
					  	<?php 
			      	
				      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
								echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
								
							}else {
								echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
							}

					      ?>

					  </div> 
					  
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col">
					<div class="card" data-aos="fade-up" data-aos-duration="3000">
					  
					  <div class="card-body">
					  	<h5 class="text-muted">Weddings Photography GH 1,700</h5>
					  	7 Hours Coverage<br/>
					  	Brides Dress-up <br/>
					  	Groom Dress-up
					  	Post Wedding Photo Session on Location<br/>
					  	30 Pages Leather Album<br/>
					  	400 Digital retouch phots on USB <br/>
					  	2(12in x 16in), 1(24in x 20in) Canvas Print <br/>
					  	<?php 
			      	
				      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
								echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
								
							}else {
								echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
							}

					      ?>

					  </div> 
					  
					</div>
				</div>
				<div class="col">
					<div class="card" data-aos="fade-up" data-aos-duration="3500">
					  
					  <div class="card-body">
					  	<h5 class="text-muted">Weddings Videography GH 2,000</h5>
					  	7 Hours Coverage<br/>
					  	Brides Dress-up <br/>
					  	Groom Dress-up <br/>
					  	Montage <br/>
					  	Main Video <br/>
					  	
					  	<?php 
			      	
				      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
								echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
								
							}else {
								echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
							}

					      ?>

					  </div> 
					  
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col">
					 <div class="card" data-aos="zoom-out-right">
					 	<div class="card-body">
						  	<h5 class="text-muted">Premium - GH 2,500</h5>
						  	Pre Wedding Phot Session
						  	7 Hours Coverage<br/>
						  	Brides Dress-up <br/>
						  	Groom Dress-up <br/>
						  	Post Wedding Photo Session on Location<br/>
						  	50 Pages Leather Album <br/>
						  	500 Digital retouched photo on USB <br/>
						  	3(24in x 20in) Canvas Print <br>
						  	
						  	<?php 
			      	
					      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
									echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
									
								}else {
									echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
								}

						      ?>

						  </div> 
					 </div>
				</div>

				<div class="col">
					 <div class="card" data-aos="zoom-out-down" data-aos-duration="3000" >
					 	<div class="card-body">
						  	<h5 class="text-muted">Wedding & Engagement - GH 2,500 (1 day)</h5>
						  	
						  	7 Hours Coverage<br/>
						  	Brides Dress-up <br/>
						  	Groom Dress-up <br/>
						  	Montage <br/>
						  	Main Video <br>
						  	
						  	<?php 
			      	
					      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
									echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
									
								}else {
									echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
								}

						      ?>

					  </div> 
					 </div>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col">
					<div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="card-body">
							<h5 class="text-muted">Deluxe - GH 4,000</h5>
							Pre Wedding Photo Session <br/>
							Full Day Coverage <br/>
							Brides Dress-up <br/>
						    Grooms Dress-up  <br/> 
						    Autograph Point <br/>
						    Post Wedding Photo Session on Location <br/> Standard Photo Book <br/>
						    600 Digital retouched photo on USB <br/>
						    4(24in x 20in) Canvas Print <br>
						    <?php 
			      	
					      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
									echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
									
								}else {
									echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
								}

						      ?>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="card-body">
							<h5 class="text-muted">Wedding & Engagement(Videography)  - GH 3,500 (2 days)</h5> <br/>
							7 Hours Coverage <br/>
							Brides Dress-up <br/>
						    Grooms Dress-up  <br/> 
						    Montage <br/>
						    Main Video <br/>
						    <?php 
			      	
					      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
									echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
									
								}else {
									echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
								}

						      ?>
						</div>
					</div>
				</div>

			</div>
			<div class="row" style="margin-top: 30px;">
			<div class="col" >
					<div class="card" data-aos="fade-left" style="width: 500px;">
					  
					  <div class="card-body">
					  	<h5 class="text-muted">Corporate Shoot GH 3000</h5>
					  	4 Hours Coverage<br/>
					  	Products <br/>
					  	Workers <br>
					  	Accessories<br/>
					  	
					  	<?php 
			      	
				      		if(isset($_SESSION["customer_email"]) && !empty($_SESSION["customer_email"])) {
								echo '<a class="btn btn-primary btn-lg" href="./core_module_customers/dashboard.php">Go To Dashboard</a>';
								
							}else {
								echo '<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#loginModal">Book Your Session</a>';
							}

					      ?>

					  </div> 
					  
					</div>
				</div>
			</div>

			<!-- Testimonies -->
	      <div>
  	    	<hr>
      	    <h3 class="text-muted text-center">
      	    	This is what people say about our services
      	    </h3>
      	    <hr> 
  	    </div>
	      <div class="row" style="padding-top: 50px;">
	      	    
	      	    
		      	<?php foreach ($customer->getCustomerReviews() as $review): ?>
		      		
		      		<div class="col">
			    	<div class="card">
			    		<div class="card-head">
			    			<?php 
				      			if(isset($_SESSION["customer_id"])){
				      				if($_SESSION["customer_id"] == $review["customers_id"]) {
				      				echo "<form method='post' action='index.php'>
				      						<input type='hidden' name='delete_review' value=". $review['id'] .">
				      						<button type='submit' name='btn_delete_review' class='btn btn-sm btn-danger'>delete</button>
				      				     </form>";
				      			   }
				      			}
				      		?>
			    		</div>
				      <div class="card-body">
				      	<p><?php echo $review["review_body"];?></p>
				      	<strong><?php echo $review["firstname"] . ' ' . $review["lastname"];?></strong> - <?php echo $review["created_at"];?>
				      </div> 
			        </div>
			    </div>
			    <?php endforeach ?>
	      	
	      </div>
		    

			   	 <!-- The Modal -->
		  <div class="modal fade" id="loginModal">
		    <div class="modal-dialog modal-dialog-centered">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Photo Studio Login</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		              <form action="./core_module_customers/dashboard.php" method="POST">
					    <div class="form-group">
					      <label for="usr">Emails:</label>
					      <input type="email" class="form-control" id="email" name="email" required="required" maxlength="98">
					    </div>
					    <div class="form-group">
					      <label for="pwd">Password:</label>
					      <input type="password" class="form-control" id="pwd" name="password" required="required" maxlength="58">
					    </div>
					    <button type="submit" name="login" id="login" class="btn btn-info">Login</button>
					    
					  </form>
					  <a href="#" data-toggle="modal" data-target="#signupModal" style="color:blue;">signup</a>
		        </div>
		        
		      </div>
		    </div>
		  </div><!-- ./modal end-->


			   	 <!-- The SIGNUP Modal -->
		  <div class="modal fade" id="signupModal">
		    <div class="modal-dialog modal-dialog-centered">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Photo Studio - Signup</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
								<form action="./core_module_customers/dashboard.php" method="POST">
											<div class="form-group">
									<label for="sfname">First name:</label>
									<input type="text" class="form-control" id="sfname" name="sfname" required="required" maxlength="49">
								</div>
								<div class="form-group">
									<label for="slname">Surname:</label>
									<input type="text" class="form-control" id="slname" name="slname" required="required" maxlength="49">
								</div>
								<div class="form-group">
									<label for="sdob">Date-of-Birth:</label>
									<input type="text" class="form-control" id="sdob" name="sdob" required="required">
								</div>
								<div class="form-group">
									<label for="gender">Gender:</label>
									<select class="form-control" name="sgender" id="sgender">
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								</div>
								<div class="form-group">
									<label for="sphonenumber">Contact Number:</label>
									<input type="tel" class="form-control" id="sphonenumber" name="sphonenumber" required="required" maxlength="20">
									<!-- <span id="contact-exist" style="color:red">contact exist</span> -->
								</div>
								<div class="form-group">
									<label for="semail">Email:</label>
									<input type="email" class="form-control" id="semail" name="semail" required="required" maxlength="98">
									<!-- <span id="email-exist" style="color:red">email exist</span> -->
								</div>
								<div class="form-group">
									<label for="spassword">Password:</label>
									<input type="password" class="form-control" id="spassword" name="spassword" required="required" maxlength="58">
								</div>
								<button type="submit" name="signup_submit" id="signup" class="btn btn-info">Send</button>
								
							</form>
		        </div>
		        
		      </div>
		    </div>
		  </div><!-- ./modal end-->



		  <div class="row" style="margin-top: 50px;">
		  	<div class="col" data-aos="fade-down-right" data-aos-duration="1000">
		  		<img src="images/HDR-TEAM.jpg" style="max-height: 400px; max-width: 500px;">
		  	</div>

		  	<div class="col" data-aos="fade-down-left" data-aos-duration="1500">
		  		 <h3 class="text-muted">WE BELIEVE</h3>
		  		WE BELIEVE YOUR PHOTOGRAPHER SHOULD BE AN EXTENSION OF YOUR TEAM... WHOSE PURPOSE IS TO HELP YOU HOST THE BEST  EVENT EVER!
		  	</div>
		  </div>

		  <div class="row">
				<div class="col">
					<hr>
					<h2 class="text-muted text-lead text-center">Glympse and Glamours </h2>
					<hr>
				</div>
			</div>
		        <!--TODO: gallery pic only  -->
		  <div id="gallery" class="row" style="margin-top: 50px;">

		  	<div class="col" data-aos="zoom-in" data-aos-duration="3000">
		  		<img src="images/2016Expo1-3.png" class="gallery">
		  	</div>
		  	<div class="col" data-aos="zoom-in-up" data-aos-duration="3000">
		  		<img src="images/event.jpg" class="gallery">
		  	</div>
		  	<div class="col" data-aos="zoom-out-up" data-aos-duration="3000">
		  		<img src="images/Dumelo.jpg" class="gallery">
		  	</div>
		  	<div class="col" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
		  		<img src="images/model_lady.jpg" class="gallery">
		  	</div>
			<div class="col" data-aos="fade-right" data-aos-duration="3000">
		  		<img src="images/540_jungle_queen_dinner_and_show_server_and_people.jpg" class="gallery">
		  	</div>

		  	<div class="col" data-aos="fade-up-right" data-aos-duration="3000">
		  		<img src="images/tops.jpg" class="gallery"  >
		  	</div>
		  	<div class="col" data-aos="fade-up-left" data-aos-duration="3000">
		  		<img src="images/image.jpg" class="gallery">
		  	</div>
		  	<div class="col" data-aos="fade-up-left" data-aos-duration="3000">
		  		<img src="images/madjid.jpg" class="gallery">
		  	</div>
		  	<div class="col" data-aos="flip-left" data-aos-duration="3000">
		  		<img src="images/San-Diego-Orange-County-Irvine-Headshot-Actor-Model-Photography-34.jpg" class="gallery">
		  	</div>
			<div class="col" data-aos="flip-right" data-aos-duration="3000">
		  		<img src="images/Milo Ventimiglia-0717-GQ-FAMV08-01-alt.jpg" class="gallery">
		  	</div>
			<div class="col" data-aos="flip-up" data-aos-duration="3000">
		  		<img src="images/dumelo_nice.jpg" class="gallery">
		  	</div>

			<div class="col" data-aos="flip-down" data-aos-duration="3000" >
		  		<img src="images/real-life-diet-Conrad-Bromfield-2.jpg" class="gallery">
		  	</div>
		  	<div class="col" data-aos="zoom-in-down" data-aos-duration="3000">
		  		<img src="images/frugalweddings_hdv_0.jpg" class="gallery">
		  	</div>
		  	<div class="col" data-aos="zoom-in-left" data-aos-duration="3000">
		  		<img src="images/employees-at-coprorate-event.jpg" class="gallery">
		  	</div>
		  </div>
		  
		  	<h2 class="text-muted" id="faq">
		  		Frequently Ask Question
		  	</h2>
		    <div id="accordion"><!-- start accordion -->

		    <div class="card">
		      <div class="card-header">
		        <a class="card-link" data-toggle="collapse" href="#shooting_procedure">
		          Can we meet before we shoot?
		        </a>
		      </div>
		      <div id="shooting_procedure" class="collapse show" data-parent="#accordion">
		        <div class="card-body">
		          While the majority of our bookings are completed online and via email, we can definitely schedule an in-person consultation when requested at our studio in Accra! We'll sit back and chat about things like photo style/theme, date and time, wardrobe options, and any other questions or concerns you may have after seeing our pre-shoot prep materials.
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#own_studio">
		        Do you have a studio?
		      </a>
		      </div>
		      <div id="own_studio" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          Our home studio is located in Accra! We also have access to third-party studio space or other private venues as needed. We even have portable equipment for indoor spaces where natural light may not be abundant.
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#second_shooter">
		          Do you have a second shooter?
		        </a>
		      </div>
		      <div id="second_shooter" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          YES! Prince Apagya is our primary photographer and He does everything else from second shooting and assisting to photo editing and wardrobe styling.
		        </div>
		      </div>
		    </div>
		      <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#assistant_photographer">
		          Do you always have an assistant?
		        </a>
		      </div>
		      <div id="assistant_photographer" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          dbp Photography work best as a team, and are both photographers (rather than 1 photographer + 1 assistant)- therefore you always get two photographers for the price of one when booking with Lux!
		        </div>
		      </div>
		    </div>
		     <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#video_service">
		          Do you provide video film services?
		        </a>
		      </div>
		      <div id="video_service" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          YES! We both shoot video. We have a variety of options for recording video- an iPhoneX using ProMovie, a GoPro Hero 6 and a Sony A6500! We then edit and splice your video using Adobe After Effects and Premiere.
		        </div>
		      </div>
		    </div>
		      
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#hand_edit">
		          Do you hand-edit my photos?
		        </a>
		      </div>
		      <div id="hand_edit" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          YES! We hand-edit every image. This is an easy way to avoid over-edited images- and we don't batch-process! With over 16 years of experience using the Adobe Creative Suite, we've developed a workflow using primarily Photoshop for our editing needs.
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#print_release">
		          Do you provide a print release?
		        </a>
		      </div>
		      <div id="print_release" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          If you’d like to handle all printing and shipping, we do offer print release for an extra fee! Otherwise, we have an amazing print vendor and you may order prints through us and get it shipped right to your door- no hassle! Your printed images will be watermark-free.
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#lose_photo">
		         What if I lose my photos?
		        </a>
		      </div>
		      <div id="lose_photo" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          Digital copies can be retrieved from us at no charge (although we don’t keep files backed up for longer than six months post-session. Files are large and require careful and costly backup and protection). If you require prints or other á La Carte items, we must charge you the current cost of the print and shipping. No hidden fees or handling charges.
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#cancellation_policy">
		         What is your cancellation policy?
		        </a>
		      </div>
		      <div id="cancellation_policy" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          The Client will be required to complete a Booking Form. On receipt of the booking form, dbp Photography will contact you as confirmation. The booking will then be considered Confirmed. 
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#booking_merit">
		         What merits do I get after booking?
		        </a>
		      </div>
		      <div id="booking_merit" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          Once the Client has made a booking for a specific time and date and this date/time has been Confirmed, dbp Photography will not accept any other work from a other clients for those times and dates;
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#destination">
		         Do you photograph destination weddings?
		        </a>
		      </div>
		      <div id="destination" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		          Of course we do! If your wedding is more than 35 miles outside of Accra, we will add GHC 20 per mile traveled to your total invoice to accommodate for things like fuel and other incidentals. If your wedding is outside the Ghana, we will have to charge for travel accommodations. If your wedding is taking place outside of the US, please give us at least 6 months of notice so we can make necessary travel plans.
		        </div>
		      </div>
		    </div>
		  </div><!-- end accordion -->

		    <div class="row" style="margin-top: 50px;">
		  	<div class="row">
		  		<div class="col">
		  			<h5 class="text-muted text-lead " >You could not find answers to your question?...Please write to us.</h5>
		  		</div>
		  		
		  	</div>
		  	<div class="col-sm-8 mx-auto">
		  		<form action="index.php" method="post">
	  			  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" id="name" name="name" placeholder="enter your name" required="required" maxlength="49">
				  </div>
				  <div class="form-group">
				    <label for="msg_email">Email address:</label>
				    <input type="email" class="form-control" name="msg_email" id="msg_email" placeholder="enter email" required="required" maxlength="98">
				  </div>
				  
				  <div class="form-group">
				  	<label for="msg">Message:</label>
				    <textarea class="form-control" id="msg" name="msg" rows="7" cols="4" placeholder="Your message" required="required" maxlength="500"></textarea>
				  </div>
				  <button type="submit" name="btn_msg_enquiry" class="btn btn-primary">Submit</button>
				</form>
		  	</div>
		  </div>
<?php require_once "footer.php";?>