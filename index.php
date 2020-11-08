<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<title>SCRAPOUS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:14px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>SCRAPOUS.<br>ONLINE SCRAP COLLECTION</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Donate</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rates</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Register</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>SCRAPOUS.</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>SCRAPOUS.</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>SHOWCASE</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="hello.jpg" style="width:100%" onclick="onClick(this)" alt="Have Waste, Scrap, Useless Things?">
      <img src="hello3.jfif" style="width:100%" onclick="onClick(this)" alt="Help Save Environment by Exchanging Waste with Plant">
    </div>

    <div class="w3-half">
      <img src="hello1.jpg" style="width:100%" onclick="onClick(this)" alt="We Understand Your Problem!">
      <img src="hello2.png" style="width:100%" onclick="onClick(this)" alt="Just Request PickUp!!">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>DONATE.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We all want this world to be a better place to live in...and you can play a important role in that. Donate us any amount of money and we will plant a seedling with the money you donated to us!! We can improve our EARTH together....
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>OUR TEAM.</p>
    <p>We all are nature lovers and are trying to use our abilities to make this world a better place to live in with help of you all.
    </p>
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="Capture3.png" alt="Somil	" style="width:100%">
        <div class="w3-container">
          <h3>Somil Bansal</h3>
          <p class="w3-opacity">Developer</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="hello6.png" alt="Ashish" style="width:100%">
        <div class="w3-container">
          <h3>Ashish Yenepuri</h3>
          <p class="w3-opacity">Designer</p>
        </div>
      </div>
    </div>
	<div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="hello5.jpg" alt="Abirami S" style="width:100%">
        <div class="w3-container">
          <h3>Abirami S</h3>
          <p class="w3-opacity">Developer</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="hello5.jpg" alt="Teja" style="width:100%">
        <div class="w3-container">
          <h3>Tejaswini Boyapati</h3>
          <p class="w3-opacity">Designer</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>RATES.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Rate of different types of waste material...</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Metal</li>
        <li class="w3-padding-16">Copper - Rs.15/kg</li>
        <li class="w3-padding-16">Iron - Rs.10/kg</li>
        <li class="w3-padding-16">Steel - Rs.12/kg</li>
        <li class="w3-padding-16">Brass - Rs.15/kg</li>
        <li class="w3-padding-16">Tin - Rs.10/kg</li>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Non-Metal</li>
        <li class="w3-padding-16">Newspaper - Rs.3/kg</li>
        <li class="w3-padding-16">Cardboard - Rs.5/kg</li>
        <li class="w3-padding-16">Plastic - Rs.6/kg</li>
        <li class="w3-padding-16">Glass - Rs.1/kg</li>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>REGISTER.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Register to our website and enjoy the easy removal of waste from you home. Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="index.php" method="post">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Password</label>
        <input class="w3-input w3-border" type="password" name="password" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">DONE </button>
    </form>  
  </div>
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>LOGIN.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Already Registered members can Login here...</p>
    <form action="index.php" method="post">
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email_2" required>
      </div>
      <div class="w3-section">
        <label>Password</label>
        <input class="w3-input w3-border" type="text" name="password_2" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">LOGIN</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Phone no:9818887289 <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p><p>Email: somil.bansal.11@gmail.com</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
