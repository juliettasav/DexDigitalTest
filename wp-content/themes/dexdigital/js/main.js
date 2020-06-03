const allLinks = document.querySelectorAll('li.nav-item > a');
allLinks.forEach((e) => {
    e.classList.toggle('nav-link') 
})

// Counter (1 number w/ 3 digits)

function counter() {
    let i = 0;
    let element = document.getElementById("count");
    
    let funcNameHere = function() {
      element.innerHTML = `${i}`
      if (i == 105) clearInterval(this);
    else i++;
    };
    // This block will be executed 100 times.
    setInterval(funcNameHere, 5000);
    funcNameHere();
  } 

counter();

// Counter (? number w/ 4 digits)

const counters = document.querySelectorAll("#comment-count");
let countersQuantity = counters.length;
let counterArray = [];

for (i = 0; i < countersQuantity; i++) {
  counterArray[i] = parseInt(counters[i].innerHTML);
}

let count = function(start, value, id) {
  counters[id].innerHTML = 0;
  let localStart = start;
  setInterval(function() {
      if (localStart < value) {
      localStart++;
      counters[id].innerHTML = localStart;
      
      }
  }, 3000);
}

for (j = 0; j < countersQuantity; j++) {
  count(0, counterArray[j], j);
}




// Slider

$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<img src='../../wp-includes/assets/arrow-right.png' width='100%'>",
    "<img src='../../wp-includes/assets/arrow-left.png' width='100%'>"
  ],
  autoplay: true,
  autoplayTimeout: 3000,
  smartSpeed: 800,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})