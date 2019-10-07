<!-- <div id="slider-overlay"> <p> </p> </div> -->

<!-- slider-ol -->
<div style="position: relative; z-index:1-;">
  <div id="slider-ol-visible" class="">
      <h1 id="slider-title"> </h1>
      <p id="slider-text"> </p>
  </div>
</div>


<div style="position: relative; overflow: hidden;" id="slider-container">
  <div id="slider-box">
    <ul id="sliderParent">
      <!-- <li value="2"> <div style="width:30px; height: 2rem;"> </div> </li> -->
    </ul>
  </div>
  <div id="slide-foward-div" style="">
    <button style="position: relative;" id="slide-foward-button" onclick="nextSlide()">  <p style="flex-direction: column; display: flex; align-items: center;"> > </p>  </button>
  </div>
  <div id="slide-backward-div" style="">
    <button style="position: relative;"  id="slide-backward-button" onclick="previousSlide()"> <p style="flex-direction: column; display: flex; align-items: center;"> < </p> </button>
  </div>

</div>


<!-- The Modal -->
<div id="myModalSlider" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="flex-row-reverse">
      <span id="modalSliderClose" class="close close-slider">&times;</span>
    </div >

    <div class="flex-row" style="max-height: 500px; width: 100%;">
      <div>
        <h1 id="filmModalTitle"> </h1>
        <p id="filmModalDescription"> </p>
      </div>
      <div style="width:50%;">
        <img class="img-width-100-height-auto" id="filmModalImage" src=""/>
      </div>
    </div>
  </div>

</div>




<script src="{{ asset('js/app.js') }}"></script>

<script>
  let objectCredits = [{
    img: "img/filmCredits/credit1.jpg",
    title: "Colossal",
    description: "goes here temp writting for clossal"
  },
  { img: "img/filmCredits/credit2.jpg",
    title: "Colossal",
    description: "goes here goes here temp writting for clossal"
  },
  { img: "img/filmCredits/credit3.jpg",
    title: "Colossal",
    description: "goes here goes here temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit4.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit5.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit6.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit7.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit8.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit9.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit10.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit11.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit12.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit13.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit14.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit15.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit16.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit17.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit18.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit19.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit20.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  },
  { img: "img/filmCredits/credit21.jpg",
    title: "Colossal",
    description: "goes here  temp writting for clossal testing this thing blah blah blah"
  }
]

// let out;
var output = $('#sliderParent');




function appendToArray(){
  for (val in objectCredits) {
    output.append('<li class="credit-li">' + '<input style="display:none;" value='+val+'>' + '<img value=' + val + ' onclick="filmCreditModal('+ val +')" class="credit-img" src=' + objectCredits[val]['img'] + '></li>')
  }
};

function appendToArray(){
  for (val in objectCredits) {
    // <li class="tooltip"> </li> <div class="tooltiptext"> <div>' + objectCredits[val]['description'] + '</div></div>
    output.append('<li class="credit-li">' + '<input style="display:none;" value='+val+'>' + '<img value=' + val + ' onclick="filmCreditModal('+ val +')" class="credit-img" src=' + objectCredits[val]['img'] + '></li>')
  }
};



// <div class="tooltip">Hover over me
//     <span class="tooltiptext">Tooltip text</span>
// </div>



  // console.log("test", objectCredits);
  let guardSlide = false;

  //configuration
  var xOffset = 110;
  var animationSpeed = 2500;
  var slideSpeed = 3500;
  var startSlide = 0;
  // var lastSlide = objectCredits.length / 1.5;
  var lastSlide = objectCredits.length;
  //cache the DOM
  var slider = $("#slider-box");
  var slideContainer = slider.find("ul");
  var slides = slideContainer.find("li");

  function checkPosition() {
      if (startSlide >= lastSlide) {
        // startSlide = 1;
        slideContainer.css("margin-left", "0px");
        // slideContainer.animate({"margin-left": "35px"},animationSpeed, function(){
      //   slideContainer.animate({"margin-left": "0px"},animationSpeed, function(){
      // });
        startSlide = 0;
    }
  }

              // checkPosition();


  $(document).ready(function(){
    slideContainer.css("margin-left", "0px");
    appendToArray();
    appendToArray();
    var sliderInterval;
    function startSlider(){
      sliderInterval = setInterval(function(){
        console.log("guardSlide", guardSlide);
          if (guardSlide == false) {
          console.log("currentSlide", startSlide, "lastSlide", lastSlide);
            if (startSlide >= lastSlide) {
              slideContainer.css("margin-left", "0px");
              startSlide = 0;
            } else {
              slideContainer.animate({"margin-left": "-="+xOffset},animationSpeed, function(){
              });
              startSlide++;
            }
      }
      },slideSpeed);
  };
  function stopSlider(){
    clearInterval(sliderInterval);
  }
  startSlider();
  });
  
          // console.log(slideContainer.animate({"margin-left": "-="+xOffset}));
    //mouse events
  // slider.on("mouseenter", stopSlider);
  // slider.on("mouseleave", startSlider);

  function nextSlide() {
    slideContainer.animate({"margin-left": "-="+xOffset},animationSpeed, function(){
        startSlide++;
        console.log(startSlide);
      });
  }
  
  function previousSlide() {
    if (startSlide > 1) {
      // console.log("previous", startSlide);
      slideContainer.animate({"margin-left": "+="+xOffset},animationSpeed, function(){
        startSlide = startSlide - 1;
        console.log(startSlide);
        // checkPosition();
        });
    }
  }

  $(document).ready(function(){

    $(".credit-li").mouseover(function() {
      // $("#slider-ol-visible").css("display","block");
      let index = $(this).find('input').val();
      console.log(index);
      $("#slider-title").text(objectCredits[index].title);
      $("#slider-text").text(objectCredits[index].description);
      $("#slider-ol-visible").show();
    }).mouseout(function() {
      // $("#slider-ol-visible").css("display","none");
      $("#slider-ol-visible").hide();
    });


    // $('.credit-li').hover(function(){
    //   let index = $(this).find('input').val();
    //   console.log(index);
    //   $("#slider-title").text(objectCredits[index].title);
    //   $("#slider-text").text(objectCredits[index].description);
    //   $("#slider-ol-visible").show();
    // })

  });

  // body.on('mouseleave', '.credit-img', (function() {
    // $(this).fadeOut(500);
  //   console.log(this);
  // }));

  // $('li').hover(function(){
  //   alert($(this).find('input').val())
  // });

  $('#slider-container').hover(function(){
    $(this).addClass('active');
    guardSlide = true;
    console.log(guardSlide);
  }, function(){
      $(this).removeClass('active');
      guardSlide = false;
      // console.log(guardSlide);
  });




  // $('#slider-container').mouseenter(function() {
  //     $('#slider-container').show();  
  // }).mouseleave(function() {      
  //     if(!$('#slider-container').hasClass('active')){
  //         $('#slider-container').hide();
  //     }
  // });

  var modalSlider = document.getElementById("myModalSlider");

  // var btn = document.getElementById("modalSliderBtn");

  var spanSlider = document.getElementById("modalSliderClose");

  // var btn = document.getElementsByClassName("modalSliderBtn");  

  // var spanSlider = document.getElementsByClassName("close-slider");

  // console.log("span", spanSlider);

  // btn.onclick = function() {
  //   modalSlider.style.display = "block";
  // }

  spanSlider.onclick = function() {
    modalSlider.style.display = "none";
    guardSlide = false;
  }

  // When the user clicks anywhere outside of the modalSlider, close it
  window.onclick = function(event) {
    if (event.target == modalSlider) {
      modalSlider.style.display = "none";
      guardSlide = false;
    }
  }

  function filmCreditModal (event) {
    modalSlider.style.display = "block";
    guardSlide = true;
    
        // console.log("EVENT VALUE", objectCredits[event].title)
    
        // console.log("EVENT VALUE", objectCredits[event].img)
    
        // console.log("EVENT VALUE", objectCredits[event].description)
        // $("#filmModalDescription").text(objectCredits[event].img);

        $("#filmModalTitle").text(objectCredits[event].title);
        $("#filmModalDescription").text(objectCredits[event].description);
        $("#filmModalImage").attr("src", objectCredits[event].img);
  
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