function liveSearch() {
  // Locate the card elements
  let cards = document.querySelectorAll('.Product__labelwrapper')
  var thisis =document.getElementsByClassName('Product__withquantity')
  // Locate the search input
  let search_query = document.getElementById("searchbox").value;
  // Loop through the cards
  for (var i = 0; i < cards.length; i++) {
    // If the text is within the card...
    if(cards[i].innerText.toLowerCase()
      // ...and the text matches the search query...
      .includes(search_query.toLowerCase())) {
        // ...remove the `.is-hidden` class.
        thisis[i].classList.remove("is-hidden");
    } else {
      // Otherwise, add the class.
      thisis[i].classList.add("is-hidden");
    }
  }
}
// A little delay
let typingTimer;        
let typeInterval = 500; // Half a second
let searchInput = document.getElementById('searchbox');

searchInput.addEventListener('keyup', () => {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(liveSearch, typeInterval);
});

/*const thechecks =document.querySelectorAll('.btn-raised');

thechecks.forEach( thecheck => {
thecheck.addEventListener("click",()=>{
  document.querySelector('.btn-primary')?.classList.add('btn-default');
  document.querySelector('.btn-primary')?.classList.remove('btn-primary');

  thecheck.classList.add('btn-primary');
  thecheck.classList.remove('btn-default');

});

thecheck.addEventListener("dblclick",()=>{
  document.querySelector('.btn-primary')?.classList.add('btn-default');
  document.querySelector('.btn-primary')?.classList.remove('btn-primary');
  thecheck.classList.add('btn-default');
  thecheck.classList.remove('btn-primary');
});
});*/

  function cr(value){
  var e =document.createElement("input");
   e.setAttribute("aria-label","quantity for product Appetiser 1");
   e.setAttribute("step","1");
   e.setAttribute("type","number");
   e.setAttribute("class" ,"LiveField__input  LiveField__input--manualfocus");
   e.setAttribute("placeholder","1");
   e.setAttribute("max","100000000000");
   e.setAttribute("min","0");
   e.setAttribute("value","1");
   value.after(e);
   document.querySelector('.btn-primary')?.classList.add('btn-default');
   document.querySelector('.btn-primary')?.classList.remove('btn-primary');
   value.previousElementSibling.classList.add('btn-primary');
   value.previousElementSibling.classList.remove('btn-default');
  value.removeAttribute("onclick");
  value.setAttribute("onclick","rm(this)");
  }
  function rm(val){
    val.nextElementSibling.remove();
    val.previousElementSibling.classList.add('btn-default');
   val.previousElementSibling.classList.remove('btn-primary' );
   val.removeAttribute("onclick");
   val.setAttribute("onclick","cr(this)");
  }

  function openi(valu){
   valu.nextElementSibling.classList.add("info-oppen");
   valu.nextElementSibling.classList.remove("info-close");
  }
  function closei(val){
    val.parentElement.classList.add("info-close");
    val.parentElement.classList.remove("info-oppen");
  }
 