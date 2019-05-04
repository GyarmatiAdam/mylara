/*Loading page scripts*/
window.addEventListener("load", function() {
    var load_screen = document.getElementById("load_screen");
    document.body.removeChild(load_screen);
});

/*footer hide on scroll*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("footer").style.visibility = "hidden";
  } else {
    document.getElementById("footer").style.visibility = "visible";
  }
}


/* Welcome page image slider */
const container = document.querySelector('.wp_images');
const next = document.querySelector('.btn_next');
const prev = document.querySelector('.btn_prev');

let counter = 0;

function auto(){
  counter++;
  container.style.backgroundImage = `url(images/img-${counter}.JPG)`;
  container.animate([{opacity:'0.1'}, {opacity:'0.3'}, {opacity:'0.6'}, {opacity:'1'}], {duration: 1000, fill: 'forwards'});


  if(counter === 8){
    counter = -1;
  }
}

setInterval(auto, 3000);


/*
const next = document.querySelector('.btn_next');
const prev = document.querySelector('.btn_prev');
const container = document.querySelector('.wp_images');


let counter = 0;


next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);



function nextSlide(){
    container.animate([{opacity:'0.1'}, {opacity:'0.3'}, {opacity:'0.5'}, {opacity:'0.8'}], {duration: 1000, fill: 'forwards'});

    

    if(counter === 8){
        counter = 0;
    }

    counter++;

    container.style.backgroundImage = `url(images/img-${counter}.JPG)`;
}

function prevSlide(){
    container.animate([{opacity:'0.1'}, {opacity:'0.3'}, {opacity:'0.5'}, {opacity:'0.8'}], {duration: 1000, fill: 'forwards'});

    if(counter === 0){
        counter = 8;
    }

    counter--;

    container.style.backgroundImage = `url(images/img-${counter}.JPG)`;
 
}
*/