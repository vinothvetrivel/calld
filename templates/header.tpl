<html>
	<head>
		<title>
			Call Management System
		</title>
		<script type="text/javascript" src="lib/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="lib/js/validation.js" ></script>
		<script type="text/javascript" src="lib/js/common.js" ></script>
		<script type="text/javascript" src="lib/js/bootstrap.js"></script>
		<script type="text/javascript" src="lib/js/slides.min.jquery.js"></script>
		<!--<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="lib/css/commonStyle.css">
		<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
	</head>
  <body>
  	<div id="header">
  		{if $username!=""}
  		<span>
  			<img src="images/management-system.jpg" class="headImage">
		 </span>
  		</span>
  		<span class="showLeft">
  			Welcome <b>{$username}<b>
  		</span>
  		<span class="ShowRight">
  			<a href="Control/signout.php">Signout</a>
  		</span>
  		{/if}
  	</div>