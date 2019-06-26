<div id="slider-vert-container">
  <div id="slider-vert-box">
    <ul id="sliderParent">
    </ul>
  </div>
  <button id="slide-foward-button" onclick="nextSlide()"> > </button>
  <button id="slide-backward-button" onclick="previousSlide()"> < </button>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script>
  let objectCredits = [{
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
  { img: "img/filmCredits/credit7.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit8.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit9.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit10.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit11.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit12.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit13.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit14.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit15.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit16.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit17.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit18.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit19.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit20.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/filmCredits/credit21.jpg",
    title: "Colossal",
    description: "goes here"
  }
]

// let out;
var outputVert = $('#sliderParent');


for (val in objectCredits) {
  console.log(objectCredits[val]['img'], val);
  
  outputVert.append('<li><img value=' + val + ' onclick="filmCreditModal('+ val +')" class="credit-img" src=' + objectCredits[val]['img'] + '></li>')
}

  console.log("test", objectCredits);
  let guardSlide = false;

  //configuration
  var xOffset = 300;
  var animationSpeed = 1000;
  var slideSpeed = 2500;
  var startSlide = 1;
  var lastSlide = objectCredits.length / 1.5;

  //cache the DOM
  var sliderVert = $("#slider-vert-box");
  var slideContainer = sliderVert.find("ul");
  var slides = slideContainer.find("li");

  function checkPosition() {
      if (startSlide >= lastSlide) {
        startSlide = 1;
        // slideContainer.css("margin-left", "50px");
        slideContainer.animate({"margin-left": "35px"},animationSpeed, function(){
        startSlide = 0;
      });
    }
  }

  $(document).ready(function(){
    var sliderInterval;
    function startSlider(){
      sliderInterval = setInterval(function(){
          if (guardSlide == false) {
          // console.log(slideContainer.animate({"margin-left": "-="+xOffset}));
        slideContainer.animate({"margin-left": "-="+xOffset},animationSpeed, function(){
          startSlide++;
          checkPosition();
        });
      }
      },slideSpeed);
  };
  function stopSlider(){
    clearInterval(sliderInterval);
  }
  startSlider();
  });

  function nextSlide() {
    console.log("next", startSlide);
    slideContainer.animate({"margin-left": "-="+xOffset},animationSpeed, function(){
        startSlide++;
        checkPosition();
      });
  }
  function previousSlide() {
    if (startSlide > 1) {
      console.log("previous", startSlide);
      slideContainer.animate({"margin-left": "+="+xOffset},animationSpeed, function(){
        startSlide = startSlide - 1;
        checkPosition();
        });
    }
  }


</script>



