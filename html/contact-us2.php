<?php 
	require_once('userloggedfunction.php');
 ?>

<?php 
	require_once('header.php');
	 ?>

	   <title>News Press | Contact Us</title>
	
<body>
	
		<?php
		 	require('topnav.php');		
		 ?>
	
		<div class="container">
			<div class="page-breadcrumbs">
				<!-- <h1 class="section-title title">Contact Us</h1> -->
			</div>
			<div class="contact-us contact-page-two">
				<!-- <div class="map-section">
					<div id="gmap"></div>
				</div> -->
				<div class="contact-info">	
					<h1 class="section-title title">Contact Information</h1>
					<ul class="list-inline">
						<li>
							<h2>Head Office</h2>
							<address>
								23-45A, Silictown <br>Great Country
								<p class="contact-mail"><strong>Email:</strong> <a href="#">hello@newspress.com</a></p>
								<p><strong>Call:</strong> +123 123 456 789</p>
							</address>
						</li>
						<li>
						   <h2>USA Office</h2>
							<address>
								245 North Street, <br>New York, NY
								<p class="contact-mail"><strong>Email:</strong> <a href="#">info@usa-newspress.com</a></p>
								<p><strong>Call:</strong> +123 123 456 789</p>
							</address>
						</li>
						<li>
						   <h2>UK Office</h2>
							<address>
								123, Pall Mall,<br> London England
								<p class="contact-mail"><strong>Email:</strong> <a href="#">info@uk-newspress.com</a></p>
								<p><strong>Call:</strong> +123 123 456 789</p>
							</address>
						</li>
					</ul>
				</div>
				<div class="message-box">
					<h1 class="section-title title">Drop Your Message</h1>
					<form id="comment-form" name="comment-form" method="post">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" class="form-control" required="required">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" required="required">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="subject">Subject</label>
									<input type="subject" name="subject" class="form-control">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="comment" >Your Text</label>
									<textarea name="comment" id="comment" required="required" class="form-control" rows="5"></textarea>
								</div>
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Send </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div><!-- contact-us -->
		</div><!--/.container-->
	</div><!--/#main-wrapper--> 
	
	
	<?php 
		require('footer.php');
	 ?>
	
	
</body>
</html>