<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<!--load plugin-->
<script type="text/javascript" src="js/fancybox.min.js"></script>

<!--init plugin-->
<script type="text/javascript">
$(document).ready(function(){

	$(".fancybox-content").fancybox({
    	padding     : 20,
		maxWidth    : 900,
		minHeight   : 'auto',
		autoHeight  : true,
		fitToView   : false,
		width       : '100%',
		height      : '100%',
		scrolling   : 'no',
		autoSize    : false,
		modal		: false,
		openEffect  : 'fade',
		closeEffect : 'fade'
	});
	
	$(".fancybox-gallery").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });

});
</script>

<main class="wrapper">

	<section class="a-center feature-title content">
		<h2>Fancybox</h2>
	</section>

	<section class="fancybox container">
		<h3>Image gallery</h3>
		<div class="row">
			<div class="col-xs-12 col-ms-6 col-sm-6 col-md-3 item">
				<a class="fancybox-gallery" rel="gallery" href="img/index/gallery1.jpg" title="This is the caption">
					<img src="img/index/gallery1.jpg" />
				</a>
			</div>
			<div class="col-xs-12 col-ms-6 col-sm-6 col-md-3 item">
				<a class="fancybox-gallery" rel="gallery" href="img/index/gallery2.jpg" title="This is the caption">
					<img src="img/index/gallery2.jpg" />
				</a>
			</div>
			<div class="col-xs-12 col-ms-6 col-sm-6 col-md-3 item">
				<a class="fancybox-gallery" rel="gallery" href="img/index/gallery3.jpg" title="This is the caption">
					<img src="img/index/gallery3.jpg" />
				</a>
			</div>
			<div class="col-xs-12 col-ms-6 col-sm-6 col-md-3 item">
				<a class="fancybox-gallery" rel="gallery" href="img/index/gallery4.jpg" title="This is the caption">
					<img src="img/index/gallery4.jpg" />
				</a>
			</div>
		</div>
		<h3>Content Pop-up</h3>
		<a class="fancybox-content button" href="#fancybox-content">Click me</a>
		<div id="fancybox-content" style="display:none">
			Pop up content
		</div>
	</section>

</main>

<?php include 'includes/footer.php';?> 