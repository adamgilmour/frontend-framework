<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<!--load plugin-->
<script type="text/javascript" src="js/tooltip.min.js"></script>

<!--init plugin-->
<script type="text/javascript">
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<article class="wrapper index">

	<!-- Tooltip -->
	<section class="tooltips content">
		<div class="a-center feature-title">
			<h2>Tooltip</h2>
		</div>
		<button type="button" class="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
		<button type="button" class="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
		<button type="button" class="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
		<button type="button" class="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
	</section>

</article>


<?php include 'includes/footer.php';?>	