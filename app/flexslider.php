<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<!--load plugin-->
<script type="text/javascript" src="js/flexslider.min.js"></script>

<!--init plugin-->
<script type="text/javascript">
$(document).ready(function(){

	$('.flexslider').flexslider({
		animation: "slide",
		prevText: "",
		nextText: "",
		easing: "swing",
		slideshow: false
	});

});
</script>

<main class="wrapper">

	<section class="a-center feature-title content">
		<h2>Flexslider</h2>
	</section>
	<section class="flexslider">
		<ul class="slides">
			<li>
				<img src="img/index/slide1.jpg">
			</li>
			<li>
				<img src="img/index/slide2.jpg">
			</li>
			<li>
				<img src="img/index/slide3.jpg">
			</li>
		</ul>
	</section>

</main>



<?php include 'includes/footer.php';?>  