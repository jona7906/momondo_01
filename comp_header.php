

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $_page ?? 'No title!' ?></title>

    
    <link rel="stylesheet" href="style_comp_header.css">
<link rel="stylesheet" href=<?= $_css ?? 'style_app.css' ?>>

      

</head>
  <body>

  <header>

  <nav>
  <div id="section_one">
    <button onclick="displayNav()">
  <img src="icon_burger.svg" alt="burger">
  </button>
  <div>
 <a href="/view_login.php" <?= $_page == 'login' ? 'class="active"' : '' ?>>
 <img src="/icon_login.svg" alt="login icon">
  <p class="nav-text">Login</p></a>
  </div>
  </div>
  <div id="section_two">

  <div> 
 <a href="view_app.php" <?= $_page == 'flights' ? 'class="active"' : '' ?>>
 <img src="/icon_flights.svg" alt="flights icon">
  <p class="nav-text">Flights</p></a>
  </div>
  <div> 
  <a href="/view_stays.php" <?= $_page == 'stays' ? 'class="active"' : '' ?>>
  <img src="/icon_stays.svg" alt="stays icon"><p class="nav-text">Stays</p></a>
  </div>
  <div> 
  <a href="/view_car_hire.php" <?= $_page == 'car hire' ? 'class="active"' : '' ?>>
  <img src="/icon_car_hire.svg" alt="care hire icon"><p class="nav-text">Car hire</p></a>
  </div>
  <div> 
  <a href="/view_campers.php" <?= $_page == 'campers' ? 'class="active"' : '' ?> >
  <img src="icon_campers.svg" alt="campers icon"><p class="nav-text">Campers</p></a>
  </div>
 
    
   </div>
    <div id="section_three">threee</div>
    <div id="section_four">foourr</div>
  </nav>

  <div id="right_nav">
    <div id="logo">
      <img src="/icon_momondo.svg" alt="momondo"></div>

    <div id="right_sub_nav">
  
      <a href="">Trips</a>
      <?php      
   session_start();
   
    if( $_SESSION ){
      echo ' <button type="button" onclick="showSignout()" id="right-login">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 500 500">
  <g id="UrTavla">
    <circle style="fill:rgba(255, 255, 255);stroke:#010101;stroke-width:1.6871;stroke-miterlimit:10;" cx="250" cy="250" r="245">
    </circle>
    <text fill="rgb(33, 3, 58);" x="50%" y="50%" text-anchor="middle"  dy=".3em" >'.$_SESSION['user_name'][0].'</text>
  </g>
</svg>'.$_SESSION['user_name'].'<img src="icon_down-arrow.svg"></button>';
    }
 
    
    if( ! $_SESSION ){
      echo '<a id="right-login" href="view_login.php"><img src="icon_login.svg">Login</a>';
    }
    ?>

<div id="signout-box"  style="display:none">
  <a href="">Dine rejser</a>
  <a href="">Hjælp/Ofte stillede spørgsmål</a>
  <a href="">Din konto</a>
  <a id="signout-button" href="comp_logout.php">Log ud</a>
</div>

<!-- Country Flag Fixer extention for chrome to fix flag not showing -->

      <button id="display_countries" onclick="displayCountries()" onblur="hideCountries()" style="font-size:x-large;text-decoration:none;background:none;color: inherit;
	border: none;
	padding: 0;
	cursor: pointer;
	outline: inherit;text-align:center;align-items:center; font-family: DejaVu Sans, Symbola, Everson Mono, Dingbats, Segoe UI Symbol,
 Quivira, SunExt-A, FreeSerif, Universalia, unifont;" href="" ><p>&#127465&#127472</p></button>

<div style="display:none" id="show-countries">
  <img src="img_countries.png" alt="">
</div>

<button onclick="displayCurrencies()" onblur="hideCurrencies()" style="font-size:large;text-decoration:none;background:none;color: inherit;
	border: none;
	padding: 0;
	cursor: pointer;
	outline: inherit;" href="">kr.</button>

  
    </div>
  
  </div>

  </header>
   
 <script>



 document.addEventListener('click', function handleClickOutsideBox(event) {
  const box = document.getElementById('signout-box');
  const box2 = document.getElementById('right-login');
  if (!box.contains(event.target) && !box2.contains(event.target)) {
    box.style.display = 'none';
  }
});


document.addEventListener('click', function handleClickOutsideBox2(event) {
  const box = document.getElementById('show-countries');
  const box2 = document.getElementById('display_countries');
  
  if (!box2.contains(event.target)) {
    box.style.display = 'none';
  }
});

 function showSignout(){

  const signoutBox = document.querySelector("#signout-box")
if(signoutBox.style.display === "grid"){
  console.log(signoutBox.style.display)
  signoutBox.style.display = "none"
  return
}
if(signoutBox.style.display === "none"){
  console.log(signoutBox.style.display)
  signoutBox.style.display = "grid"
  return
}

} 

function displayCountries(){

  const countriesBox = document.querySelector("#show-countries")
if(countriesBox.style.display === "block"){
  console.log(countriesBox.style.display)
  countriesBox.style.display = "none"
  return
}
if(countriesBox.style.display === "none"){
  console.log(countriesBox.style.display)
  countriesBox.style.display = "block"
  return
}
  console.log("displaying countries")
  
}

function hideCountries(){
  console.log("hiding countries")
  
}

function displayNav(){
  console.log("displaying nav")
  const navText = document.querySelectorAll(".nav-text")
navText.forEach((p)=>{

  console.log(p, p.style.display)
  
if(p.style.display === "block"){
  console.log(p.style.display)
  p.style.display = "none"
  return
}
if(p.style.display === "none"|| p.style.display === ""){
  console.log(p.style.display)
  p.style.display = "block"
  return
}


})


}

 </script>
