<!DOCTYPE html>
<html lang="en">
<head>
    <title>hot soup </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
   
</head>
<body>
<?php include_once ('header.php');?>
<main> 
    <!--top button-->
    <button onclick="topFunction()" id="myBtn" title="Go to top"> <img src="icons8-collapse-arrow-24.png"></button>
     <!--top button-->

<!-- the main landing --> 
<section class="mainsec">
<div class="logo">
<a href="#"><img src="logologo.png"></a>
</div>
</section>
<!-- the main landing --> 
<!-- the mini menu-->
<div class="slideshow-container">
  <div class="mySlides fade">
    <section class="menu ">
        <a class="prev " onclick="plusSlides(-1)"><img src="icons8-less-than-30.png"></a>
        <div class="itemsline-through ">
    <a href="#"> <img  src="pexels-photo-6692112.jpeg">  </a>
   <span>"300.0"</span> 
   <div class="thedish ">
    <div class="theinsidedish">
      <a href="#"> <img src="icons8-shopping-basket-add-24.png" style="align-self: center;"></a>
                    <a href="#">Kung Pao Chicken.</a>
    </div>
   </div>
        </div> <!-- the 1st dish -->
       
        <div class="itemsline-through">
          <a href="#">   <img  src="pexels-photo-6692112.jpeg"></a>
         <span>"300.0"</span> 
         <div class="thedish">
          <div class="theinsidedish">
            <a href="#"> <img src="icons8-shopping-basket-add-24.png" style="align-self: center;"></a>
                    <a href="#">Kung Pao Chicken.</a>
</div>
</div>
</div>
<!-- the 2nd dish -->
<div class="itemsline-through">
<a href="#"> <img  src="pexels-photo-6692112.jpeg"> </a>
 <span>"300.0"</span> 
 <div class="thedish">
<div class="theinsidedish">
 <a href="#"> <img src="icons8-shopping-basket-add-24.png" style="align-self: center;"></a>
<a href="#">Kung Pao Chicken.</a>
</div> </div>
</div><!--  the 3rd dish  -->
<a class="next" onclick="plusSlides(1)" ><img src="icons8-more-than-30.png"></a> <!--for the nesxt slide this will be the more button links to menu page -->
    </section>
</div>
    <div class="mySlides fade">
        <section class="menu  ">
            <a class="prev" onclick="plusSlides(-1)"><img src="icons8-less-than-30.png"></a>
            <div class="itemsline-through ">
        <a href="#"> <img  src="pexels-photo-6692112.jpeg">  </a>
       <span>"300.0"</span> 
       <div class="thedish ">
        <div class="theinsidedish">
          <a href="#"> <img src="icons8-shopping-basket-add-24.png" style="align-self: center;"></a>
                        <a href="#">Kung Pao Chicken.</a>
        </div>
       </div>
            </div> <!-- the 1st dish -->
           
            <div class="itemsline-through">
              <a href="#">   <img  src="pexels-photo-6692112.jpeg"></a>
             <span>"300.0"</span> 
             <div class="thedish">
              <div class="theinsidedish">
                <a href="#"> <img src="icons8-shopping-basket-add-24.png" style="align-self: center;"></a>
                        <a href="#">Kung Pao Chicken.</a>
  </div>
  </div>
    </div>
  <!-- the 2nd dish -->
    <div class="itemsline-through">
    <a href="#"> <img  src="pexels-photo-6692112.jpeg"> </a>
     <span>"300.0"</span> 
     <div class="thedish">
    <div class="theinsidedish">
     <a href="#"> <img src="icons8-shopping-basket-add-24.png" style="align-self: center;"></a>
    <a href="#">Kung Pao Chicken.</a>
   </div> </div>
   </div><!--  the 3rd dish  -->
   <a class="next" onclick="plusSlides(1)" href="file:///C:/Users/maria/OneDrive/Desktop/this4/restauraunt/menu.html?"><img src="icons8-plus-48.png"></a> <!--for the nesxt slide this will be the more button links to menu page -->
        </section>
    </div>
 </div>
 <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  
</div>

<!--the mini menu-->  
<section class="ordering" >
  <div class="theres">
  <h4> pick-up and dilevery</h4> 
   <h1>order</h1>
  <h6>
  <span style="color:#000000;">to place an order </span><br>
  <span style="color:#000000;">please order <a>via</a></span> <br>
</h6> 
<h5> phone </h5>
<h6>  <span>00-00-00-00</span><br>
<span>00-00-00-00</span></h6>
<p> </p>
<button type="button" class="linki"><a href="file:///C:/Users/maria/OneDrive/Desktop/this4/restauraunt/menu.html?">order now </a> </button>
</section>
<!-- the events-->

<div class="event">
  
    <div class="eventitem">
    <h1> today's</h1>
    <h5> what we have ...</h5>
    <!-- commantes from the scial media acc-->
    <a href="" class="linki" > more </a> <!-- contact us  link -->
   
</div>
<div class='air air1'></div>
<div class='air air2'></div>
<div class='air air3'></div>
<div class='air air4'></div>
</div>
<!-- the events-->

<!-- reservation-->
<section class="reserv"> 
    <div class="theres">
    <h4> welcome</h4> 
     <h1>reservation</h1>
    <h6>
    <span style="color:#000000;">09:00 AM – 23:00 PM weekday</span><br>
    <span style="color:#000000;">10:00 AM – 24:00 PM weekend </span> <br>
</h6> 
<h5> phone </h5>
<h6>  <span>00-00-00-00</span><br>
<span>00-00-00-00</span></h6>
<p> </p>
<!-- reservation pop up-->
<div   class="popupcont">
  <button type="button" class="linki" onclick="openpopup()"> reserve now </button> <!-- reservation link -->
  <div  id="thispop" class="pop">
    <!--popleft-->
      <div class="popleft"> <img src="pexels-photo-5848496.jpeg"></div>
      <!--popleft-->

      <!--popright-->
      <div class="popform">
      <div class="formitem"> 
        <input type="number" placeholder="how many peopl"> </div>

      <div class="formitem">
      <input type="text" placeholder="your name"></div> 

      <div class="formitem">
      <input type="tel" placeholder="telephone number"></div>
      
      <div class="formitem"> 
      <input type="email" placeholder="email"></div>

      <div class="formitem" style="width:94%;">
      <input type="date" placeholder="the date of reservation"></div>
      <div class="formitem"style="width:95%; padding-left:1%;"><button type="submit" class="linki"style="width:100%;">reserve</button></div>

    </div> 
    <!--popright-->
    <button type="button" onclick="closepopup()" style="align-self: self-end;"> <img src="icons8-double-down-48.png"></button>
</div> 
</div>
<!-- reservation pop up script-->
<script> 
  let  popy=document.getElementById("thispop");
  function openpopup(){
   popy.classList.add("oppen-popup");
  }
  function closepopup(){
    popy.classList.remove("oppen-popup");
  }
  </script>
  <!-- reservation pop up script-->
</div>

</section>
<!-- reservation-->
<section class="endsec">

</section>
<!-- footer-->
<?php include_once('footer.php');?>

<!-- footer-->
</main>
    <script src="C:\Users\maria\OneDrive\Desktop\this4\restauraunt\home.js"> 
  </script>
</body>
</html>