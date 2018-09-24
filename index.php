<!DOCTYPE html>
<html>
<head>
  <title>Ilana & Joe Are Getting Married!</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Crimson+Text" rel="stylesheet">
  <link rel="icon" href="favicon-heart.ico">
  <?php include("rsvp.php"); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="jquery-3.3.1.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
	<section class="navigation">
  		<div class="nav-container">
    		<nav>
      			<div class="nav-mobile" id="mobile-nav">
        			<a id="nav-toggle" href="#!"><span></span></a>
      			</div>
      
      			<div id="names-logo"><a id="top-link"
      			 href="#">Ilana & Joe</a></div>
        		<div id="list-items">
			      <ul class="nav-list">
			        <li><a id="story-link" class="sliding-link" href="#">our story</a></li>
			        <li><a id="details-link" class="sliding-link" href="#">the details</a></li>
			        <li><a id="rsvp-link" class="sliding-link" href="#">rsvp</a></li>
			      </ul>
	      		</div>
	    	</nav>
	  	</div>
	</section>

	<!-- Main Content Section -->
	<main>

		<div class="background-img" id="bg1">
			<div id="outer">
				<div id="inner">
					<p id="names">Ilana & Joe</p>
					<p class="smallcaps" id="gettingmarried">we are getting married</p>
					<p id="bars"><div class="bar"></div><i class="fas fa-heart"></i><div class="bar"></div></p>
					<br>
					<p id="date">November 23, 2018</p>
				</div>
			</div>
		</div>

		<div class="text" id="text1">
			<h1 class="reveal">Our Story</h1>
			<div id="story-pics">
		 	<img class="reveal" id="joe-single" src="css/photos/joe-small.jpg"></img>
		 	<img data-sr class="reveal" id="ilana-single" src="css/photos/ilana-small.jpg"></img>
		 	<div class="reveal"><i class="fas fa-heart" id="heart2"></i></div>
		 </div>
		 	<div data-sr class="reveal" id="our-story-text">
		 		<p>
		 			Our story began in January 2014 at JFK Elementary School. It was Ilana's first job and Joe was starting his first externship for Grad school. We became friends and, naturally, most of our conversations led us to craft beer. One night, after sharing some craft beer, Joe told Ilana that he liked her and, later that week, they went on a date.  After seeing each other almost every day that semester, we both knew it was only a matter of time. We fell in love and we both knew that we were meant to be!

		 		</p>
		 	</div>
		 </div>

		 <div class="background-img" id="bg2"></div>

		 <div class="text" id="text2">
		 	<div id="beer-icons" class="reveal">
		 		<i class="fas fa-beer" id="beer2"></i>
		 		<i class="fas fa-beer" id="beer1"></i>
		 	</div>

		 	<div id="ceremony" class="reveal">
		 	<h1>Ceremony & Reception</h1>
		 	<br>
		 	<p style="font-size: 25px">Emperor Restaurant</p>
		 	<p><a target="_blank" href="https://goo.gl/maps/mRgiqxUh7Wu"><i class="fa fa-map-marker-alt"></i> 725 Red Lion Rd, Philadelphia, Pennsylvania 19115</a></p>
		 		<br>
			 	<div id="ceremony-info">
			 		<h2>Cocktail Hour</h2>
			 		<p>5:00PM - 6:00PM</p><br><br>
			 		<h2>Ceremony</h2>
			 		<p>6:00PM - 7:00PM</p><br><br>
			 		<h2>Reception</h2>
			 		<p>7:00PM - 1:00AM</p>
			 	</div>
		 	</div>

			 <div id="accommodations" class="reveal">
			 	<h1>Accommodations</h1>
			 	<br>
			 	<p style="font-size: 25px">Holiday Inn Express Philadelphia NE-Bensalem</p>
				<p><a target="_blank" href="https://goo.gl/maps/vKtLDo53v222"><i class="fa fa-map-marker-alt"></i> 1329 Bristol Pike Bensalem, PA 19020</a></p>
				<br>

				<p>The special $109.00 Group Rate includes breakfast, and is available to reserve through 10/23/2018.</p>
				<br>
				<div>
					<a target="_blank" href="https://www.ihg.com/holidayinnexpress/hotels/us/en/bensalem/pneex/hoteldetail?qAdlt=1&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn.ki.sp.nd.ct&qChld=0&qFRA=1&qGRM=0&qGrpCd=GSW&qIta=99801505&qPSt=0&qRRSrt=rt&qRef=df&qRms=1&qRpn=1&qRpp=20&qSHp=1&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&icdv=99801505&setPMCookies=true"> <span class="fa-stack fa-lg">
				  <i class="far fa-circle fa-stack-2x"></i>
				  <i class="fas fa-desktop fa-stack-1x"></i>
					</span>
					
					Click To Reserve Online</a><br>
					Desktop Only - Will not work on mobile<br><br>
					
				</div>

				<div>
					<a href="tel:2152455222"> <span class="fa-stack fa-lg">
				  <i class="far fa-circle fa-stack-2x"></i>
				  <i class="fa fa-phone fa-stack-1x"></i>
					</span></a>
					Reserve by Phone<br>
					(215) 245-5222 <br>
					Mention "Gorelik-Saylor Wedding" or Group Code "GSW"<br><br>


				</div>

			 	
			 </div>
		 </div>

		 <div class="background-img" id="bg3"></div>

		 <div id="text3" class="text">
		 	<div class="reveal"><i class="far fa-envelope"></i></div>
		 	
		 	<form action="<?= $_SERVER['PHP_SELF']; ?>#text3" method="post" id="myform">
		 		<fieldset>
		 			<p><legend class="reveal">RSVP</legend></p>
						 <p class="reveal">Please RSVP by November 1, 2018</p>
						 <p class="italic">Please refer to the envelope and invitation that you received in the mail when entering guest names and the total number of guests</p>
		 				<br>
		 			<input class="reveal" type="text" placeholder="Guest 1" name="guest1" value="<?php echo isset($_POST["guest1"]) ? $_POST["guest1"] : ''; ?>"/>
					 <div class="error reveal"><?= $guest1_error ?></div>
					 <input class="reveal" type="text" placeholder="Guest 2" name="guest2" value="<?php echo isset($_POST["guest2"]) ? $_POST["guest2"] : ''; ?>"/>
					 <div class="error reveal"><?= $guest2_error ?></div>
					 <input class="reveal" type="text" placeholder="Guest 3" name="guest3" value="<?php echo isset($_POST["guest3"]) ? $_POST["guest3"] : ''; ?>"/>
		 			<div class="error reveal"><?= $guest3_error ?></div>
		 			<br>
		 			<input class="reveal" type="text" placeholder="Total Number of Guests" name="number" id="number" value="<?php echo isset($_POST["number"]) ? $_POST["number"] : ''; ?>"/>
		 			<div class="error reveal"> <?= $number_error ?></div>
		 			<p class="reveal" id="attending">Attending:
		 			<label><input type="radio" name="attending" value="yes" id="r1" <?php if (isset($_POST['attending']) && $_POST['attending'] == "yes") {
    echo 'checked="checked"';} ?> /> Yes</label>
		 			<label><input type="radio" name="attending" value="no" id="r2" <?php if (isset($_POST['attending']) && $_POST['attending'] == "no") {
    echo 'checked="checked"';} ?>/>No</label>
		 			<div class="error reveal"> <?= $attending_error ?></div>
		 		</p>
		 			<input class="reveal" type="submit" value="Submit"/>
		 			<div class="success reveal"><?= $success ?></div>
		 		</fieldset>
		 	</form>

		</div>

		<div class="background-img" id="bg4"></div>

		<footer>
			<div>
				<p id="countdown"></p>
			</div>
		</footer>
	</main>


	<!-- Scripts -->
	<script>

	// mobile nav click handlers
	$('#nav-toggle').on('click', function() {
  		this.classList.toggle('active');
	});

	$('#nav-toggle').click(function() {
 		$('ul').slideToggle();
	});

	// close mobile nav on link click

	$('.sliding-link').click(function() {
		if ($(window).width() <= 768) {
			document.getElementById("nav-toggle").classList.toggle('active');
			$('ul').slideToggle();
		}
	});

    // navigation links scroll function

    function scrollToDiv(aid) {
	    var divTag = $("#" + aid);
	    
	    $('html, body').animate({scrollTop: divTag.position().top - 82},'slow');
	}

	$("#top-link").click(function() {
		
		scrollToDiv("bg1");
		
	});
	
	$("#story-link").click(function() {
		scrollToDiv("text1");
	});

	$("#details-link").click(function() {
		
		scrollToDiv("text2");
	
	});

	$("#rsvp-link").click(function() {
		
		scrollToDiv("text3");
	});
	
	// Countdown Timer
    var countDownDate = new Date("November 23, 2018 15:00:00").getTime();

    var x = setInterval(function() {
    	var now = new Date().getTime();
    	var distance = countDownDate - now;

    	var days = Math.floor(distance/(1000*60*60*24));
    	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
   		 var seconds = Math.floor((distance % (1000 * 60)) / 1000);

   	$("#countdown").html(days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds");

    })

    window.sr = ScrollReveal({ reset: true });
    sr.reveal(".reveal", {duration: 1000, viewFactor: .3,reset: true, mobile: true});
	</script>

</body>