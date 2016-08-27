<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body id="directions-memorial">
<div id="pageOuter" class="container-fluid">
	
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/navigation.php'; ?>

	<section class="row" id="mainContentRow">
		<main class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="leftCol">
			<div class="row">
				<div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
					<img src="images/pages/Memorial032.JPG" class="img-responsive" alt="Memorial" />
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h2>Directions to the Palmerton Memorial</h2>
					<p>The Palmerton Veterans Memorial is located in the Palmerton Borough Park Delaware Avenue, Palmerton, PA.</p>
				
				<div id="memorial-map"></div>
				    <script>
				      var map;
				      function initMap() {
				        map = new google.maps.Map(document.getElementById('memorial-map'), {
				          center: {lat: 40.803781, lng: -75.604791},
				          zoom: 8
				        });
				      }
				    </script>
				    <script src="http://maps.googleapis.com/maps/api/js?key=key&callback=initMap"
				    async defer></script>
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