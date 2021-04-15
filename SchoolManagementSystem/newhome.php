<!DOCTYPE html>
<html>

<head><title>SMS::HFHS</title>
<style>
.item1
 {
grid-area:head;
font-size:50px;
padding-bottom:0px;
}
.item2{grid-area: left;padding:20px;}
.item3{grid-area: main;padding:20px;}
.item4{grid-area: right;padding:20px;}
.item5
{
grid-area:footer;
padding:90px;
background-color:white;
}

#image
{
border-radius:0%;
}
.grid-container
{
display:grid;
grid-template-areas:
'head head head head head head'
'left left main main right right'
'footer footer footer footer footer footer'
}
.grid-container >div
{
color:white;
font-family:cambria;
text-align:center;
}

#a
{
color:#761804;
width :100%;
padding:20px;
background-color:#C0C0C0;

}
body
{
background-image:url("images/back2.jpg");
background-size:cover;
background-attachment:fixed;
}

p
{
font-style:italic;
font-weight:bold;
font-size:10px;
color:#761804;
}

a
{
overflow: ;
float: left;
display: block;
color: white;
text-align: center;
font-size:15px;
padding: 16px;
text-decoration: none;
font-family:verdana;
width:10%;
}

input[type=submit]
{
border-radius:10px;
background-color:#A77A1C;
font-size:20px;
font-family:cursive;
float:center;
}


 a:hover {
  background-color:blue;
  color: red;
}



      ul {
        list-style: none;
        padding: 0px;
        margin: 0px;
        position: relative;
      }
      .navigation {
        background-color: rgb(88, 212, 50);
        height: 60px;
        width: 100%;
      }
      ul li {
        float: left;
        margin-top: 20px;
      }
      ul li a {
        width: 150px;
        color: white;
        display: block;
        text-decoration: none;
        font-size: 20px;
        text-align: center;
        padding: 10px;
      }
     
      ul li ul {
        background: rgb(88, 212, 50);
      }
      ul li ul li {
        float: none;
      }
      ul li ul {
        display: none;
      }
      ul li:hover ul {
        display: block;
      }

</style>
</head>

<body>
<div class="grid-container">

<div class="item1">
<div style="margin-top:0px;padding-bottom:15px;">
 <a href="#"target="_blank"><img src="images/L2.jpeg" width="100px" height="100px"></a>
 <h2>Holy Faith High School, Siwan</h2>     
 <div class="navigation">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li>
          <a href="#">Products</a>
          <ul>
            <li><a href="#">Engineering</a></li>
            <li><a href="#">Telecom</a></li>
            <li><a href="#">Energy</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Consultancy</a></li>
          </ul>
        </li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
 <a href="#"target="_blank"><input type="submit" value="Get Started">
</a> 


</div>
<div class="item1">
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/school_img1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  
  <img src="images/school_img2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  
  <img src="images/school_img3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
</div>
<center>
<div style="margin-top:4%;font-size:20px;font-weigth:bold;width:100%;height:80%;background-image:url(c2.png);height=500px width=800px; float:left;background-attachment:fixed;">TravelMore To Discover Yourself </div>
</center>

<center>
<div style="margin-top:4%;font-size:40px;font-weigth:bold;width:50%; float:center;">Our Popular Services </div>
</center>

</div>

<div class="item2">
<center>
<div id="a"><p>IN YOUR STATE</p><br>
<img id="image"src="c2.png" width="200px" height="200px"><br>
A great travelling website design is not just beautiful,but effective as well.Whilesome websites.
</div>
</center></div>

<div class="item3">
<center>
<div id="a"><p>IN THE COUNTRY </p><br>
<img id="image"src="c2.png" width="200px" height="200px"><br>
A great travelling website design is not just beautiful,but effective as wel.Whilesome websites.
</div>
</center></div>

<div class="item4">
<center>
<div id="a"><p>INTERNATIONAL TRIPS </p><br>
<img id="image"src="c2.png" width="200px" height="200px"><br>
A great travelling website design is not just beautiful,but effective as wel.Whilesome websites.
</div>
</center></div>

<div class="item5"><center>

<div style="background-color:	#8B0000;width:40%;font-size:30px;">
Hello@travellers.com</div><br>

<div style="color:#761804;"> 8534.861.6159 | 610.952.1398 <br> <br>
We are working hard through friday ,starting bright andearly with a cup of lightly concerned.
we prefer email but feel free to give us ring for good measure.</div><br><br>

<img src="f.png" width="30px" height="30px">


</center> </div>
</div></body></html>











































