<div id="slider-vert-container">
  <div id="slider-vert-box">
    <ul id="vertParent">
    </ul>
  </div>
  <button id="slide-foward-button" onclick="nextSlideVert()"> > </button>
  <button id="slide-backward-button" onclick="previousSlideVert()"> < </button>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script>
  let vertCredits = [{
    img: "img/filmCredits/credit1.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit2.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit3.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit4.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit5.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit6.jpg",
    title: "Colossal",
    description: "goes here"
  },
]

// let out;
var outputVert = $('#vertParent');


for (val in vertCredits) {
  console.log("VERT CREDITS", vertCredits[val]['img'], val);
  
  outputVert.append('<li><div class="credit-img-div"><img value=' + val + ' onclick="filmCreditModal('+ val +')" class="credit-img" src=' + vertCredits[val]['img'] + '></div></li>')
}

  console.log("test", vertCredits);
  let guardSlide2 = false;

  //configuration
  var xOffset2 = 320;
  var animationSpeed2 = 1000;
  var slideSpeed2 = 2500;
  var startSlide2 = 1;
  var lastSlide2 = vertCredits.length;

  //cache the DOM
  var sliderVert = $("#slider-vert-box");
  var slideContainerVert = sliderVert.find("ul");
  var slides = slideContainerVert.find("li");

  function checkPositionVert() {
    console.log("Last Slide", lastSlide2);
      if (startSlide2 >= lastSlide2) {
        startSlide2 = 1;
        // slideContainerVert.css("margin-left", "50px");
        slideContainerVert.animate({"margin-top": "0px"},animationSpeed2, function(){
        startSlide2 = 1;
      });
    }
  }

  // $(document).ready(function(){
  //   var sliderInterval;
  //   function startSlider(){
  //     sliderInterval = setInterval(function(){
  //         if (guardSlide2 == false) {
  //         // console.log(slideContainerVert.animate({"margin-left": "-="+xOffset2}));
  //       slideContainerVert.animate({"margin-left": "-="+xOffset2},animationSpeed2, function(){
  //         startSlide2++;
  //         checkPositionVert();
  //       });
  //     }
  //     },slideSpeed2);
  // };
  // function stopSlider(){
  //   clearInterval(sliderInterval);
  // }
  // startSlider();
  // });

  function nextSlideVert() {
    console.log("Last Slide", lastSlide2);
    console.log("next", startSlide2);
    // slideContainerVert.animate({"margin-left": "-="+xOffset2},animationSpeed2, function(){
    slideContainerVert.animate({"margin-top": "-="+xOffset2},animationSpeed2, function(){
        startSlide2++;
        checkPositionVert();
      });
  }
  function previousSlideVert() {
    console.log("Last Slide", lastSlide2);
    console.log("next", startSlide2);
    if (startSlide2 > 1) {
      console.log("previous", startSlide2);
      slideContainerVert.animate({"margin-top": "+="+xOffset2},animationSpeed2, function(){
        startSlide2 = startSlide2 - 1;
        checkPositionVert();
        });
    }
  }


</script>



