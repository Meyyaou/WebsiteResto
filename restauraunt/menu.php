    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
<?php include_once ('header.php'); ?>
  <figure class="fieldSection fieldSection-undefined entity--1 alignment--left  paperform__page paperform__page--0" data-block="true" data-editor="paperform-editor" data-offset-key="acaah-0-0" data-testid="liveatomic">
  <form data-testid="livefieldsection" class="LiveFieldSection Paperform__QuestionBlock Paperform__QuestionBlock--acaah  " style="width:90%; max-width: 100%; margin: 0px auto; padding-bottom: 15px; padding-top: 15px;"> 
 <div class="searchfood">
    <input 
      type="search" 
      oninput="liveSearch()" 
      id="searchbox" placeholder="Search"
    >
 </div>

 <section class="LiveField__container">
<div class="  LiveField__answer">
  <div class="ProductCards" role="group" aria-labelledby="field-label-products-arcfc field-description-products-arcfc " aria-invalid="false">
<div class="Product__withquantity " >
  <label class="btn-raised Choices__choice btn-default">
    <label class="Product__imgthumb" for="ProductInput__App1" style='display: block; background-image: url("dimsum-2097947.jpg");'>
      <i role="button" aria-label="show full screen image" class="MaterialIcon material-icons" style="transform: rotate(45deg);" onclick="openi(this)">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" >
  <path fill="none" d="M0 0h24v24H0z"></path>
  <path d="M13 6.99h3L12 3 8 6.99h3v10.02H8L12 21l4-3.99h-3z"></path>
      </svg>
      </i>
      <div class="info-close">
        <button type="button" onclick="closei(this)" class="btn-clos"></button>
        
      </div>
    </label>
    <input id="ProductInput__App1" class="Choices__input" type="checkbox" tabindex="0" value="App1">
    <div class="Product__labelwrapper"> 
  <div class="Product__label ">Appetiser 1</div>
      <div class="Product__price">300</div>
    </div>
  </label>
<button type="button"onclick="cr(this)" class="btn-com" > +</button>
</div>


<div class="Product__withquantity ">
  <label class="btn-raised Choices__choice btn-default">
    <label class="Product__imgthumb" for="ProductInput__App1" style='display: block; background-image: url("dimsum-2097947.jpg");'>
      <i role="button" aria-label="show full screen image" class="MaterialIcon material-icons" style="transform: rotate(45deg);">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" >
  <path fill="none" d="M0 0h24v24H0z"></path>
  <path d="M13 6.99h3L12 3 8 6.99h3v10.02H8L12 21l4-3.99h-3z"></path>
      </svg>
      </i>
    </label>
    <input id="ProductInput__App1" class="Choices__input" type="checkbox" tabindex="0" value="App1">
    <div class="Product__labelwrapper"> 
  <div class="Product__label ">Appetiser 1</div>
      <div class="Product__price">300</div>
    </div>
  </label>
  <button type="button"onclick="cr(this)" class="btn-com" > +</button>
</div>

<div class="Product__withquantity ">
  <label class="btn-raised Choices__choice btn-default">
    <label class="Product__imgthumb" for="ProductInput__App1" style='display: block; background-image: url("dimsum-2097947.jpg");'>
      <i role="button" aria-label="show full screen image" class="MaterialIcon material-icons" style="transform: rotate(45deg);">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" >
  <path fill="none" d="M0 0h24v24H0z"></path>
  <path d="M13 6.99h3L12 3 8 6.99h3v10.02H8L12 21l4-3.99h-3z"></path>
      </svg>
      </i>
    </label>
    <input id="ProductInput__App1" class="Choices__input" type="checkbox" tabindex="0" value="App1">
    <div class="Product__labelwrapper"> 
  <div class="Product__label ">Appetiser 1</div>
      <div class="Product__price">300</div>
    </div>
  </label>
  <button type="button"onclick="cr(this)" class="btn-com" > +</button>
</div>

  </div >

</div>

</section>
</form>
</figure>
<button class="btn-raised btn-primary Pagination__btn Pagination__btn--next" >
  <span class="Pagination__price"> 00.00 DA  </span>
  <i class="MaterialIcon material-icons">
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24">
      <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
    </svg>
  </i>
</button>
    <script  src="menu.js"> </script> 
    <?php include_once('footer.php'); ?>

</body>
</html>
       
