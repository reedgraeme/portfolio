<?php

//create short variable names
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);

//set up some static information
$toaddress = "graemereed.business@gmail.com";

$subject = "Hey men! You got some clients from your Website on ".date("l jS \of F Y h:i:s A");

$mailcontent = "Hi, My name is: ".str_replace("\r\n", "", $name)."\n".
               "I want you to contact me at: ".str_replace("\r\n", "",$email)."\n".
               "This is the reason why I am contacting you:\n".str_replace("\r\n", "",$subject)."\n";

$fromaddress = "From: $name <$email>";


//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Thank You for Contacting Graeme Reed</title>
    </head>
  <body>
       <div class="background"></div>
        <section class="sec section-class-name" id="homesection">
        <div class="scrollstuff">
			<a href="index.php"><img src="logo.svg" alt data-scroll-speed="3" class="logo"></a>
            </div>
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
           
            <div class="container homecontainer">
                <div class="bordertop"></div>
                    <h1 class="heading blue">Thank you, <?php echo nl2br(htmlspecialchars($name)); ?> </h1>
                    <h3 class="subheading blue">I will be contacting you shortly.</h3>
                    </div>
           	
        
        <script
          src="http://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>

        <script>
            $.fn.moveIt = function(){
          var $window = $(window);
          var instances = [];

          $(this).each(function(){
            instances.push(new moveItItem($(this)));
          });

          window.onscroll = function(){
            var scrollTop = $window.scrollTop();
            instances.forEach(function(inst){
              inst.update(scrollTop);
            });
          }
        }

        var moveItItem = function(el){
          this.el = $(el);
          this.speed = parseInt(this.el.attr('data-scroll-speed'));
        };

        moveItItem.prototype.update = function(scrollTop){
          this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
        };

        // Initialization
        $(function(){
          $('[data-scroll-speed]').moveIt();
        });
            </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>




        <script>
            $(window).bind('scroll',function(e){
          redrawDotNav();
        });

        function redrawDotNav(){

            var topNavHeight = 50;
            var numDivs = $('section').length;

            $('#dotNav li a').removeClass('active').parent('li').removeClass('active');  	
            $('section').each(function(i,item){
              var ele = $(item), nextTop;

              console.log(ele.next().html());

              if (typeof ele.next().offset() != "undefined") {
                nextTop = ele.next().offset().top;
              }
              else {
                nextTop = $(document).height();
              }

              if (ele.offset() !== null) {
                thisTop = ele.offset().top - ((nextTop - ele.offset().top) / numDivs);
              }
              else {
                thisTop = 0;
              }

              var docTop = $(document).scrollTop()+topNavHeight;

              if(docTop >= thisTop && (docTop < nextTop)){
                $('#dotNav li').eq(i).addClass('active');
              }
            });   
        }

        /* get clicks working */
        $('#dotNav li').click(function(){

            var id = $(this).find('a').attr("href"),
              posi,
              ele,
              padding = $('.navbar-fixed-top').height();

            ele = $(id);
            posi = ($(ele).offset()||0).top - padding;

            $('html, body').animate({scrollTop:posi}, 'slow');

            return false;
        });

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
</body>
</html>

