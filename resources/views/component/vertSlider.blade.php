<div id="slider-vert-container">
  <div id="slider-vert-box">
    <ul id="vertParent">
    </ul>
  </div>
  <button id="slide-foward-button" onclick="nextSlideVert()"> > </button>
  <button id="slide-backward-button" onclick="previousSlideVert()"> < </button>
</div>

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<script>
  let vertCredits = [{
    img: "img/designCredits/credit1.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/designCredits/credit3.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/designCredits/credit4.jpg",
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
  // console.log("VERT CREDITS", vertCredits[val]['img-v'], val);
  
  outputVert.append('<li><div class="credit-img-div"><img value=' + val + ' onclick="vertSliderData('+ val +')" class="credit-img" src=' + vertCredits[val]['img'] + '></div></li>')
}

  // console.log("test", vertCredits);
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
    // console.log("Last Slide", lastSlide2);
      if (startSlide2 >= lastSlide2) {
        startSlide2 = 1;
        // slideContainerVert.css("margin-left", "50px");
        slideContainerVert.animate({"margin-top": "0px"},animationSpeed2, function(){
        startSlide2 = 1;
      });
    }
    if (startSlide2 <= 1) {
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
    // console.log("Last Slide", lastSlide2);
    // console.log("next", startSlide2);
    // slideContainerVert.animate({"margin-left": "-="+xOffset2},animationSpeed2, function(){
    slideContainerVert.animate({"margin-top": "-="+xOffset2},animationSpeed2, function(){
        startSlide2++;
        checkPositionVert();
      });
  }
  function previousSlideVert() {
    // console.log("Last Slide", lastSlide2);
    // console.log("next", startSlide2);
    if (startSlide2 > 1) {
      // console.log("previous", startSlide2);
      slideContainerVert.animate({"margin-top": "+="+xOffset2},animationSpeed2, function(){
        startSlide2 = startSlide2 - 1;
        checkPositionVert();
        });
    }
  }


  function filmCreditModal (event) {
    modalSlider.style.display = "block";
    
        // console.log("EVENT VALUE", objectCredits[event].title)
    
        // console.log("EVENT VALUE", objectCredits[event].img)
    
        // console.log("EVENT VALUE", objectCredits[event].description)

        $("#filmModalTitle").text(objectCredits[event].title);
        // $("#filmModalDescription").text(objectCredits[event].img);
        $("#filmModalDescription").text(objectCredits[event].description);
        $("#filmModalImage").attr("src", objectCredits[event].img);
  
  }

  function vertSliderData(data) {
    // console.log (vertCredits[data]);
    $(".vert-title").text(vertCredits[data].title);
    $(".vert-description").text(vertCredits[data].description);
    // $(".vert-img").text(vertCredits[data].img);
    $(".vert-img").attr("src", vertCredits[data].img);
  }


</script>



