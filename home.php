<?php include_once "inc/header.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<script>
		var i = 0; 			// Start Point
		var images = [];	// Images Array
		var time = 2000;	// Time Between Switch
	 
		// Image List
		images[0] = 'images/working1.webp';
		images[1] = 'images/eb.jpg';
		images[2] = 'images/working3.webp';
		images[3] = 'images/working2.webp';

		// Change Image
		function changeImg(){
		document.slide.src = images[i];

	
	if(i < images.length - 1){
	  
	  i++; 
	} else { 
		
		i = 0;
	}

		// Run function every x seconds
		setTimeout("changeImg()", time);
}

		// Run function when page loads
		window.onload=changeImg;
	</script>
</head>
<body>
	

		<section id="foto">
			<div class="fotoo">
				<div class="img"><img name="slide"/></div>
			</div>
		</section>
	
	<div class="partneret">
			<h2>Partneret</h2>
		<div class="pr">

			<div class="pa">							
				<img src="images/amazon.png" width="80">
				<h4>Amazon</h4>
 			</div>

			<div class="pa">
	  			<img src="images/google.png" width="80" >
	  			<h4>Google</h4>
   			</div>

	   		<div class="pa">
		 		<img src="images/dell.png" width="80">
		 		<h4>Dell</h4>
	   		 </div>

	    	<div class="pa">
		 		<img src="images/hp.png" width="80">
		 		<h4>Hp</h4>
	    	</div>
  		
		</div>
	</div>



		<div class="services">
			<h2>Rreth pakove dhe trajnereve:</h2>
				<span class="border"></span>

		<div class="sv">
			<a href="#ss"><img src="images/andii.jpg" width="200" ></a>
			<a href="#ss1"><img src="images/yllkaa.jpg" width="200"></a>
			<a href="#ss2"><img src="images/premtim.jpg" width="200"></a>
		</div>

		<div class="section" id="ss">
			<span class="name">Pako 1-Andi Demi </span>
			<span class="border"></span>
		
			<ul>
				<li>Html</li>
				<li>Css</li>
				<li>Html</li>
				<li>Css</li>
			</ul>

			<a href="services.html">Read more &gt;&gt;</a>
		</div>

		<div class="section" id="ss1">
			<span class="name">Pako 2-Yllka Topalli</span>
			<span class="border"></span>
		
			<ul>
				<li>Html</li>
				<li>Css</li>
				<li>Javascript</li>
			
			</ul>

			<a href="services.html">Read more &gt;&gt;</a>

		</div>

		<div class="section" id="ss2">
			<span class="name">Pako 3- Premtim Pasjaqa</span>
			<span class="border"></span>
		
			<ul>
				<li>Html</li>
				<li>Css</li>
				<li>Html</li>
				<li>Css</li>
			</ul>

			<a href="services.html">Read more &gt;&gt;</a>
		</div>
	</div>
	

	
	<div id="footer">
		<h4>Follow us</h4>
		<p>Mos harroni të na ndiqni përmes profileve të mediave tona sociale dhe vazhdoni me lajmet tona të fundit.</p>
		<div class="imgimg">
			<div class ="image">
				<a href="https://www.facebook.com/" target="_blank"><img src="https://img.icons8.com/color/48/000000/facebook.png"/> </a>
			</div>

			<div class="image">
				<a href="https://www.instagram.com/"target="_blank"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>
			</div>

			<div class="image">
				<a href="https://www.twitter.com/"target="_blank"><img src="images/twitter.png"></a>
			</div>

		</div>

		<p class="paragraf">comWEB &copy;2020</p>

	</div>



</body>
</html>
