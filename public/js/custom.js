/*Loading page
window.addEventListener("load", function() {
    var load_screen = document.getElementById("load_screen");
    var body = document.getElementById("body");
      body.removeChild(load_screen);
});*/

/*footer hide on scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("footer").style.visibility = "hidden";
  } else {
    document.getElementById("footer").style.visibility = "visible";
  }
}*/


/* Welcome-page image handler 
const container = document.querySelector('.wp_images');

let counter = 0;

function auto(){
  counter++;
  container.style.backgroundImage = `url(images/img-${counter}.JPG)`;
  container.animate([{opacity:'0.1'}, {opacity:'0.3'}, {opacity:'0.6'}, {opacity:'1'}], {duration: 1000, fill: 'forwards'});


  if(counter === 8){
    counter = -1;
  }
}

setInterval(auto, 3000);*/