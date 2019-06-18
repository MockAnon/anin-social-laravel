<div id="slider-container">
  <div id="slider-box">
    <ul id="parent">
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>
      <li><img class="credit-img" src="img/filmCredits/credit1.jpg"></li>

    </ul>
  </div>
  <button id="slide-foward-button" onclick="nextSlide()"> > </button>
  <button id="slide-backward-button" onclick="previousSlide()"> < </button>
</div>




<script src="{{ asset('js/app.js') }}"></script>

<script>
  console.log("test");
  let guardSlide = false;

  //configuration
  var xOffset = 300;
  var animationSpeed = 1500;
  var slideSpeed = 1500;
  var startSlide = 1;
  //cache the DOM
  var slider = $("#slider-box");
  var slideContainer = slider.find("ul");
  var slides = slideContainer.find("li");

  function checkPosition() {
      if (startSlide >= 7) {
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