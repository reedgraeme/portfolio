<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Graeme Reed Portfolio | Graphic & Web Design</title>
<style>
.sr .Reveal { visibility: hidden; }	
</style>
</head>

<body>
<div class="background"></div>
<a href="index.php"><img src="logo.svg" class="logo"></a>

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


<div class="container individualworkcontainer">
<div class="Reveal">
	<div class="bordertop"></div>
	<h1 class="blue heading">How To Mead: Instructional</h1></div>	
		<div class="row mockupcontainer">
		<div class="Reveal col-xl-12"><img src="H2Mmockup.png" alt="photoshop mockup of the how to mead website. The mockup contains an ipad, iphone, imac and macbook. This shows the responsiveness of the website" class="mockupimage"></div>
		<div class="Reveal col-xl-12"><p class=" blue mockupdescription">“How to Mead” was an instructional website I made in my first year in the NMPD program. The purpose of the project was to instruct the user on how to do or make something with easily broken down steps using UI and UX design theory, HTML5, CSS and PHP. This was the first major web design project I worked on. <em>Made with HTML and CSS</em></p>
			<a href="h2m/h2m.php"><p class="gotolivesite blue"><strong>Go to Live Site</strong><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i></p></a>
		</div>
		
	</div>	
</div>


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