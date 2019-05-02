<!DOCTYPE html>
<html>
    <head>
        <title>Maxx Kitchen Pizza</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="view/style/tampilan.css">
        <link rel="stylesheet" type="text/css" href="view/style/fontFamily.css">
        <link rel="stylesheet" type="text/css" href="view/style/utama.css">
        <script src="view/script/slideshow.js"></script>
    </head>
	
	<body>
		<div class="slideshow-container" id="home">
			<div class="mySlides fade">
				<img src="view/images/pizza1.jpg" style="width: 100%">
                <div class="text">Margherita Pizza</div>
            </div>
            <div class="mySlides fade">
                <img src="view/images/pizza2.jpg" style="width: 100%">
                <div class="text">Beef Pizza</div>
            </div>
            <div class="mySlides fade">
                <img src="view/images/pizza3.jpg" style="width: 100%">
                <div class="text">Cheese Pizza</div>
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
		
		<!-- Navbar (sit on top) -->
        <div class="w3-top w3-hide-small">
			<div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
				<a href="#home" class="w3-bar-item w3-button">HOME</a>
				<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
				<a href="#contact" class="w3-bar-item w3-button">CONTACT</a>
			</div>
        </div>
		
        <h2>Welcome To Maxx Kitchen Pizza</h2>
		
		<img id="log" src="view/images/index.jpg" style="width: 20%">
		<div id="box">
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
		</div>
        <div id="id01" class="modal">
			<form class="modal-content animate" method="POST" action="signin">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					<img src="view/images/index.jpg" style="width: 20%" class="avatar">
				</div>
				<div class="container">
					<label for="uname"><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
        
					<button type="submit">Login</button>
					<label>
						<input type="checkbox" checked="checked" name="remember"> Remember me
					</label>
				</div>
				<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>
			</form>
        </div>
		<section class="bersih" style="margin: 50px 0"></section>

        <!-- About Container -->
        <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
			<div class="w3-content">
				<h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
				<p>Maxx Kitchen Pizza merupakan sebuah chain restaurant (restorant berantai) dan waralaba (franchise) makanan nasional yang berpusat di Bandung. Maxx Kitchen Pizza menawarkan pizza dalam berbagai jenis topping seperti keju, bawang bombay, pepperoni dan lain-lain.</p>
				<p>Maxx Kitchen Pizza didirikan pada tahun 2013 oleh 3 mahasiswa, Rio Aurellio, Juan Nandrissa, dan Melody Victorian.</p>
				<p><strong>The Founder?</strong> Three of them<img src="images/chef.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
				<p>We are proud of our interiors.</p>
				<img src="view/images/onepage_restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
          
				<h1><b>Visi</b></h1>
			<div class="w3-row">
				<div class="w3-col s6">
					<p>Menjadikan perusahaan berkembang dengan kerja keras dan kerja sama antar karyawan.</p>
				</div>
				<h2><b>Misi</b></h2>
				<div class="w3-col s6">
					<p> Semangat dalam bekerja agar mendapatkan hasil yang memuaskan</p>
					<p> Melayani pelanggan dengan baik</p>
					<p> Terbuka pikirannya dalam segala hal</p>
				</div>
          </div>
		  </div>
      </div>
	  
      <!-- Image of location/map -->
	  <img src="view/images/map.jpg" class="w3-image w3-greyscale" style="width:100%;">

	<!-- Contact -->
	<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge" id="contact">
		<div class="w3-content">
			<h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
			<p>Find us at some address at some place</p>
			<p>call us at 021-4221 or email : maxxkitchen_pizza@yahoo.com</p>
			<p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
		</div>
	</div>
	
	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
        <p>Copyright &copy; 2019 Maxx Kitchen. All rights reserved</p>
    </footer>
	
	
	<script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
	</script>
    
    </body>
</html>