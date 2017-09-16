<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="keywords" content="responsive, Graphic design, web design, graeme reed, html5, css, creative, portfolio, design, graphic, development, branding">
<meta name="Description" content="Graeme Reed is a Graphic and Web Designer - Branding - Graphic Design - Web Design - Animation - HTML - CSS">
<title>Graeme Reed Portfolio | Graphic & Web Design</title>
<style>
.sr .Reveal { visibility: hidden; }	
</style>
</head>
<body>

<div class="background"></div>
<a href="index.php"><img src="logo.svg" alt="Graeme Reed's web development and graphic design portfolio logo" data-scroll-speed="3" class="Reveal logo"></a>

<div class="container ">	
<header>
  <button class="hamburger"><i class="fa fa-bars fa-2x"></i></button>
  <button class="cross"><i class="fa fa-times fa-2x"></i></button>
	</header>

<nav class="menu">
    <a href="index.php">Home Page</a>
    <a href="webdesign.php">Web Design | <span class="subheading">Development</span></a>
    <a href="graphicdesign.html">Graphic Design | <span class="subheading">Branding</span></a>
	</nav> </div>

	
	<section class="sec section-class-name">
	<div class="container webcontainer">
	<div class="Reveal">
	<div class="bordertop"></div>
		<h1 class="heading blue">Web Design </h1></div>
	<div class="row mobileworkimages">
	
		<a class="Reveal col-xl-4 col-sm-12 webworkwrapper" href="userfulwork.php">
		<div class="webicon">
		<i class="fa fa-plus fa-2x"></i>
		<p><strong>Userful Corp</strong></p></div>	
		<img src="bluesquare.jpg" alt="Grayscale image of userful's landing page" class="webimage">
		</a>
		
		<a class="Reveal col-xl-4 col-sm-12 webworkwrapper" href="inglewoodwork.php">
		<div class="webicon">
		<i class="fa fa-plus fa-2x"></i>
		<p><strong>Inglewood Area</strong></p></div>	
		<img src="inglewood.jpg" alt="Grayscale image of inglewood project's homepage" class="webimage">
		</a>
		
		<a class="Reveal col-xl-4 col-sm-12 webworkwrapper" href="oldsite.php">
		<div class="webicon">
		<i class="fa fa-plus fa-2x"></i>
		<p><strong>Old Portfolio</strong></p></div>	
		<img src="oldsite.jpg" alt="Grayscale image of my old graphic design, web design portfolio" class="webimage">
		</a>
		
		<a class="Reveal col-xl-4 col-sm-12 webworkwrapper" href="TMOC.php">
		<div class="webicon">
		<i class="fa fa-plus fa-2x"></i>
		<p><strong>The Magic Of Christmas</strong></p></div>	
		<img src="santa.jpg" alt="Grayscale image of the magic of christmas homepage" class="webimage">
		</a>
		
		<a class="Reveal col-xl-4 col-sm-12 webworkwrapper" href="Pointrwork.php">
		<div class="webicon">
		<i class="fa fa-plus fa-2x"></i>
		<p><strong>PointR Financial</strong></p></div>	
		<img src="pointr.jpg" alt="Grayscale image of pointR financial homepage" class="webimage">
		</a>
		
		<a class="Reveal col-xl-4 col-sm-12 webworkwrapper" href="H2Mwork.php">
		<div class="webicon">
		<i class="fa fa-plus fa-2x"></i>
		<p><strong>How To Mead</strong></p></div>	
		<img src="h2m.jpg" alt="Grayscale image of the how to mead homepage" class="webimage">
		</a>
		
	</div>
	</div>
	</section>
	<footer class="footer nothomefooter">
<div class="container-fluid">
	<div class="d-inline-block socialmediacontainer">
	<a href="https://www.instagram.com/graeme_reed/?hl=en"><i class="socialmedia blue fa fa-instagram fa-lg" aria-hidden="true"></i></a>
	<a href="https://www.behance.net/graemethecff8d"><i class="socialmedia blue fa fa-behance-square fa-lg" aria-hidden="true"></i></a>
	<a href="https://www.linkedin.com/in/graeme-reed-9297b5117/"><i class="socialmedia blue fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
	<a href="https://github.com/reedgraeme/portfolio"><i class="socialmedia blue fa fa-github fa-lg" aria-hidden="true"></i></a>	
	<a href="https://dribbble.com/Greed"><i class="socialmedia blue fa fa-dribbble fa-lg" aria-hidden="true"></i></a>	
	<a href="#"><i class="socialmedia blue fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>	
	</div>
</div>
</footer>



<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="scrollreveal.min.js"></script>

<script>
	  window.sr = ScrollReveal({ duration: 1000 });
	    if (sr.isSupported()) {
        document.documentElement.classList.add('sr');
      }
      sr.reveal('.Reveal', 300, { origin: 'bottom', reset: true, mobile: true, viewFactor:0.9, });
</script>

<script>
$( document ).ready(function() {
$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});
$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});
});	
</script>
</body>
</html>
