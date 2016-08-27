<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body id="contact">
<div id="pageOuter" class="container-fluid">
	
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/navigation.php'; ?>

	<section class="row" id="mainContentRow">
		<main class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="leftCol">
			<div class="row">
				<div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
					<img src="images/pages/Memorial025.JPG" class="img-responsive" alt="Memorial" />
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h2>Contact Us</h2>
					<form method="get" id="contactForm" action="http://morpheus.dce.harvard.edu/cgi-bin/echo.cgi">
	    				<div>
	    					<label for="name">Name:</label>
	    					<div>
	    						<input type="text" name="name" id="name"  class="required"/>
	    					</div>
	    				</div>
	    				<div>
							<label for="email">Email Address:</label>
	    					<div>
	    						<input type="email" name="email" id="email"  class="required email"/>
	    					</div>
	    				</div>
	    				<div>
	    					<label for="subject">Subject:</label>
	    					<div>
	    						<input type="text" name="subject" id="subject"  class="required"/>
	    					</div>
	    				</div>
	    				<div>	
	    					<label for="message">Message:</label>
	    					<div>
	    						<textarea class="required" name="message" id="message" cols="20" rows="5"></textarea>
								<br>
								<br>
								<input type="submit" value="Send"/>
								<input type="reset" value="Reset"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
		<aside class="hidden-xs col-xs-12 col-sm-3 col-md-3 col-lg-3" id="rightCol">
			<?php include 'includes/quotes.php'; ?>
		</aside>
	</section>

	<?php include 'includes/footer.php'; ?>

</div>
</body>
</html>