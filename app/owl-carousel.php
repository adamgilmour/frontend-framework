<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<!--load plugin-->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!--init plugin-->
<script type="text/javascript">
$(document).ready(function(){

	//standard slider
	$("#standard-owl").owlCarousel({
		items : 4
	});

	//synced slider
	var sync1 = $("#owl-main");
	var sync2 = $("#owl-thumbs");
	sync1.owlCarousel({
		singleItem : true,
		slideSpeed : 1000,
		navigation: true,
		pagination:false,
		afterAction : syncPosition,
		responsiveRefreshRate : 200,
		navigationText: ["",""]
	});

	sync2.owlCarousel({
		items : 4,
		pagination:false,
		responsiveRefreshRate : 100
	});

	function syncPosition(el){
		var current = this.currentItem;
		$("#owl-thumbs")
		.find(".owl-item")
		.removeClass("synced")
		.eq(current)
		.addClass("synced")
		if($("#owl-thumbs").data("owlCarousel") !== undefined){
			center(current)
		}
	}

	$("#owl-thumbs").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync1.trigger("owl.goTo",number);
	});

	function center(number){
		var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for(var i in sync2visible){
			if(num === sync2visible[i]){
				var found = true;
			}
		}

		if(found===false){
			if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			}else{
				if(num - 1 === -1){
					num = 0;
				}
				sync2.trigger("owl.goTo", num);
			}
		} else if(num === sync2visible[sync2visible.length-1]){
			sync2.trigger("owl.goTo", sync2visible[1])
		} else if(num === sync2visible[0]){
			sync2.trigger("owl.goTo", num-1)
		}

	}

});
</script>

<main class="wrapper owlcarousels">

	<section class="a-center feature-title content">
		<h2>Owl Carousel</h2>
	</section>
	<section class="container" id="owl-carousel">
		<h3>Synced Slider</h3>

		<div class="synced-owl" id="synced-owl">
			<div class="owl-carousel" id="owl-main">
				<div><img src="http://placehold.it/1150x150?text=IMAGE 1"></div>
				<div><img src="http://placehold.it/1150x150?text=IMAGE 2"></div>
				<div><img src="http://placehold.it/1150x150?text=IMAGE 3"></div>
				<div><img src="http://placehold.it/1150x150?text=IMAGE 4"></div>
			</div>
			<div class="owl-carousel" id="owl-thumbs">
				<div><img src="http://placehold.it/1150x150?text=IMAGE 1"></div>
				<div><img src="http://placehold.it/1150x150?text=IMAGE 2"></div>
				<div><img src="http://placehold.it/1150x150?text=IMAGE 3"></div>
				<div><img src="http://placehold.it/1150x150?text=IMAGE 4"></div>
			</div>
		</div>

		<h3>Standard Owl</h3>

		<div class="standard-owl">
			<div class="owl-carousel" id="standard-owl">
				<div class="item">
					<img src="img/index/owl1.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl2.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl3.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl4.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl5.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl6.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl7.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
				<div class="item">
					<img src="img/index/owl8.jpg" alt="Owl Image">
					<h4>Heading</h4>
					<p>Paragraph</p>
				</div>
			</div>
		</div>

	</section>

</main>


<?php include 'includes/footer.php';?> 