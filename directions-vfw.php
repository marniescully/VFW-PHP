<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body id="directions-vfw">
<div id="pageOuter" class="container-fluid">
	
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/navigation.php'; ?>

	<section class="row" id="mainContentRow">
		<main class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="leftCol">
			<div class="row">
				<div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
					<img src="images/pages/Memorial031.JPG" class="img-responsive" alt="Memorial" />
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h2>Directions to Meetings</h2>
					<p>Both of the organizations of the Palmerton, PA United Veterans Organization -  American Legion Post #269 and VFW Post #7134 - meet at The VFW building- 2020 Forest Inn Rd Palmerton, PA 18071.</p>
					<div id="vfw-map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('vfw-map'), {
          center: {lat: 40.83551, lng: -75.5954},
          zoom: 8
        });
      }
    </script>
    <script src="http://maps.googleapis.com/maps/api/js?key=key&callback=initMap"
    async defer></script>
			
		</main>
		<aside class="hidden-xs col-xs-12 col-sm-4 col-md-4 col-lg-4" id="rightCol">
			<?php include 'includes/quotes.php'; ?>
		</aside>
	</section>

	<?php include 'includes/footer.php'; ?>

</div>
 
</body>
</html>