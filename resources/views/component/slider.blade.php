<div id="slider-container">
  <div id="slider-box">
    <ul id="sliderParent">
      <!-- <li><img onclick="filmCreditModal()" class="credit-img modalSliderBtn" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img onclick="filmCreditModal()" class="credit-img" src="img/filmCredits/credit1.jpg"></li> -->

    </ul>
  </div>
  <button id="slide-foward-button" onclick="nextSlide()"> > </button>
  <button id="slide-backward-button" onclick="previousSlide()"> < </button>


  <!-- Trigger/Open The Modal -->
  <!-- <div id="modalSliderBtn"> -->
    <!-- <img id="modalIcon" src="img/icons/create_mail.svg"> -->
    <!-- <button> PRESS THIS </button>
  </div> -->

  <!-- The Modal -->
  <div id="myModalSlider" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="flex-row-reverse">
        <span class="close">&times;</span>
      </div>
      Test
    </div>

  </div>
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
var output = $('#sliderParent');


for (val in objectCredits) {
  console.log(objectCredits[val]['img'], val);
  
  output.append('<li><img value=' + val + ' onclick="filmCreditModal(event)" class="credit-img" src=' + objectCredits[val]['img'] + '></li>')
}





  console.log("test", objectCredits);
  let guardSlide = false;

  //configuration
  var xOffset = 300;
  var animationSpeed = 1000;
  var slideSpeed = 2500;
  var startSlide = 1;
  var lastSlide = objectCredits.length;
  //cache the DOM
  var slider = $("#slider-box");
  var slideContainer = slider.find("ul");
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
  //mouse events
  // slider.on("mouseenter", stopSlider);
  // slider.on("mouseleave", startSlider);
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


  $('#slider-container').hover(function(){
    $(this).addClass('active');
    guardSlide = true;
    console.log(guardSlide);
    }, function(){
        $(this).removeClass('active');
        guardSlide = false;
        console.log(guardSlide);
    })

  // $('#slider-container').mouseenter(function() {
  //     $('#slider-container').show();  
  // }).mouseleave(function() {      
  //     if(!$('#slider-container').hasClass('active')){
  //         $('#slider-container').hide();
  //     }
  // });

  var modalSlider = document.getElementById("myModalSlider");

  var btn = document.getElementById("modalSliderBtn");

  // var btn = document.getElementsByClassName("modalSliderBtn");  

  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    modalSlider.style.display = "block";
  }

  span.onclick = function() {
    modalSlider.style.display = "none";
  }

  // When the user clicks anywhere outside of the modalSlider, close it
  window.onclick = function(event) {
    if (event.target == modalSlider) {
      modalSlider.style.display = "none";
    }
  }

  function filmCreditModal (event) {
    modalSlider.style.display = "block";

    console.log("EVENT VALUE", event.target.value)
  }


</script>









<!-- 
@push('custom-scripts')
  
  <script type="text/javascript">
    console.log("test");
    $(document).ready(function(){
      //configuration
      var xOffset = 300;
      var animationSpeed = 500;
      var slideSpeed = 3000;
      var startSlide = 1;

      //cache the DOM
      var slider = $("#slider-box");
      var slideContainer = slider.find("ul");
      var slides = slideContainer.find("li");
        
      var sliderInterval;
      function startSlider(){
        sliderInterval = setInterval(function(){
        slideContainer.animate({"margin-left": "-="+xOffset},animationSpeed, function(){
          startSlide++;
          if (startSlide >= 7) {
            startSlide = 1;
            //slideContainer.animate({"margin-left": 0},500);
            slideContainer.css("margin-left", "50px");
          };
        });
      },slideSpeed);
      };

      function stopSlider(){
        clearInterval(sliderInterval);
      }
      //mouse events
      slider.on("mouseenter", stopSlider);
      slider.on("mouseleave", startSlider);
      startSlider();
      console.log(reStartSlide);
    });
  </script>
@endpush -->