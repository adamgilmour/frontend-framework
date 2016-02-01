<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<!--load plugin-->
<script type="text/javascript" src="js/camera.min.js"></script>

<!--init plugin-->
<script type="text/javascript">
$(document).ready(function(){

	$('.camera-slider').camera( {
		height: '30%',
		portrait: false,
		playPause: false,
		loader:'none',
		navigationHover: false,
		autoAdvance: false
	});

});
</script>

<main class="wrapper">

	<section class="a-center feature-title content">
		<h2>Camera Slider</h2>
	</section>

	<section class="camera-slider">
		<div data-src="img/index/slide1.jpg"></div>
		<div data-src="img/index/slide2.jpg"></div>
		<div data-src="img/index/slide3.jpg"></div>
	</section>

</main>



<?php include 'includes/footer.php';?>  