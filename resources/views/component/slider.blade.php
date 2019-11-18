<!-- <div id="slider-overlay"> <p> </p> </div> -->

<!-- slider-ol -->
<div style="position: relative; z-index:1-;">
  <div id="slider-ol-visible" class="">
      <h1 class="reveal" id="slider-title"> </h1>
      <p class="reveal" id="slider-text"> </p>
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
    description: "Colossal is a 2016 science fiction black comedy film directed and written by Nacho Vigalondo. I worked on Colossal as a VFX Compositor."
  },
  { img: "img/filmCredits/credit2.jpg",
    title: "See You Tomorrow",
    description: "See You Tomorrow (Chinese: 擺渡人) is a 2016 Chinese-Hong Kong romantic comedy film directed by Chinese writer Zhang Jiajia. I worked on Colossal as a VFX Compositor."
  },
  { img: "img/filmCredits/credit3.jpg",
    title: "Journey to the West The Demons Strike Back",
    description: "Journey to the West: The Demons Strike Back (Chinese: 西遊伏妖篇) is a 2017 Chinese fantasy-adventure-comedy film directed by Tsui Hark. I worked on Colossal as a VFX Compositor."
  },
  { img: "img/filmCredits/credit4.jpg",
    title: "Hunter Killer",
    description: "Hunter Killer is a 2018 American action thriller film directed by Donovan Marsh, written by Arne Schmidt and Jamie Moss, and based on the 2012 novel Firing Point by Don Keith and George Wallace. I worked on Colossal as a VFX Compositor."
  },
  { img: "img/filmCredits/credit5.jpg",
    title: "Status Update",
    description: "Status Update is a 2018 American direct-to-video teen comedy romance film, directed by Scott Speer, from a screenplay by Jason Filardi. I worked on Colossal as a VFX Compositor."
  },
  { img: "img/filmCredits/credit6.jpg",
    title: "Legion",
    description: "Legion is an American cable television series created for FX by Noah Hawley, based on the Marvel Comics character David Haller / Legion. I worked on the first season of Legion as an uncredited VFX Compositor."
  },
  { img: "img/filmCredits/credit7.jpg",
    title: "Wynonna Earp",
    description: "Wynonna Earp is a supernatural Western horror television series. Developed by Emily Andras, the Canadian-American production is based on the comic book. I worked on the first two seasons of Wynonna Earp as an uncredited VFX Compositor."
  },
  { img: "img/filmCredits/credit8.jpg",
    title: "Edge of Winter",
    description: "Edge of Winter is a 2016 Canadian psychological thriller drama film directed by and written by Rob Connolly and Kyle Mann. I worked on Edge of Winter as a VFX Compositor."
  },
  { img: "img/filmCredits/credit9.jpg",
    title: "Scandal",
    description: "Scandal is an American political thriller television series starring Kerry Washington. I worked on one season of Scandal as an uncredited VFX Compositor."
  },
  { img: "img/filmCredits/credit10.jpg",
    title: "London Has Fallen",
    description: "London Has Fallen is a 2016 American action thriller film directed by Babak Najafi and written by Creighton Rothenberger, Katrin Benedikt, Chad St. John and Christian Gudegast. I worked on London Has Fallen as a VFX Compositor."
  },
  { img: "img/filmCredits/credit11.jpg",
    title: "Hyena Road",
    description: "Hyena Road is a 2015 Canadian war drama film written, directed by and starring Paul Gross. It was shown in the Gala Presentations section of the 2015 Toronto International Film Festival. I worked on Hyena Road as a VFX Compositor. Our team won a Canadian Screen Award for our work on this film."
  },
  { img: "img/filmCredits/credit12.jpg",
    title: "The Brain The Story of You",
    description: "The Brain with David Eagleman is a PBS documentary series created and presented by neuroscientist Dr. David Eagleman. Eagleman explores the wonders of the human brain with the goal of revealing why we feel and think the things we do. I worked on this documentary as a VFX Compositor."
  },
  { img: "img/filmCredits/credit13.jpg",
    title: "Orphan Black",
    description: "Orphan Black is a Canadian science fiction thriller television series created by screenwriter Graeme Manson and director John Fawcett, starring Tatiana Maslany as several identical people who are clones. I worked on the last few seasons of Orphan Black as a VFX Compositor. It was a honour."
  },
  { img: "img/filmCredits/credit14.jpg",
    title: "How to Get Away With Murder",
    description: "How to Get Away with Murder is an American legal drama television series that premiered on ABC on September 25, 2014. The series was created by Peter Nowalk, and produced by Shonda Rhimes and ABC Studios. I worked on How to Get Away with Murder very breifly as a VFX Compositor."
  },
  { img: "img/filmCredits/credit15.jpg",
    title: "Texas Rising",
    description: "Texas Rising is a 2015 History Channel 10-hour television miniseries based on the Texas Revolution against Mexico and how the Texas Rangers were created. It is directed by Roland Joffé and premiered on May 25, 2015. I worked on Texas Rising as a VFX Compositor."
  },
  { img: "img/filmCredits/credit16.jpg",
    title: "UFOs Declassified",
    description: "UFOs Declassified is a 2015 Canadian television series that premiered on the History Canada channel. Produced by Company X Studios, the program features declassified CIA and US Air Force documents pertaining to notable UFO reports. I worked on UFOs Declassified as a VFX Compositor/ CG Generalist."
  },
  { img: "img/filmCredits/credit17.jpg",
    title: "Hellions",
    description: "Hellions is a 2015 Canadian horror film directed by Bruce McDonald, written by Pascal Trottier and starring Chloe Rose. The film was an official selection of the 2015 Sundance Film Festival lineup and also screened at the 2015 Toronto International Film Festival. I worked on Hellions as a VFX Compositor."
  },
  { img: "img/filmCredits/credit18.jpg",
    title: "A.C.O.R.N.S. Operation Crack Down",
    description: "A.C.O.R.N.S.: Operation Crack Down is a 2016 American animated film produced by John H. Williams (through Vanguard Animation) and directed by Ross Venokur. I worked on A.C.O.R.N.S. Operation Crack Down as a Compositor/ Lighter."
  },
  { img: "img/filmCredits/credit19.jpg",
    title: "Star Trek Discovery",
    description: "Star Trek: Discovery is an American web television series created for CBS All Access by Bryan Fuller and Alex Kurtzman. Released in 2017. I worked on the first season of Star Trek Discovery as an uncredited VFX Compositor."
  },
  { img: "img/filmCredits/credit20.jpg",
    title: "Loving Pablo",
    description: "Loving Pablo, internationally known as Escobar, is a 2017 English-language Spanish drama film directed by Fernando León de Aranoa, based on Virginia Vallejo's memoir Loving Pablo, Hating Escobar. I worked on Loving Pablo as a VFX Compositor."
  },
  { img: "img/filmCredits/credit21.jpg",
    title: "Hunter Killer",
    description: "Hunter Killer is a 2018 American action thriller film directed by Donovan Marsh, written by Arne Schmidt and Jamie Moss, and based on the 2012 novel Firing Point by Don Keith and George Wallace. The film stars Gerard Butler, Gary Oldman, Michael Nyqvist (in one of his final film roles), Common, Linda Cardellini and Toby Stephens, and follows a submarine crew and a group of Navy SEALs who rescue the captured Russian President from a coup. I worked on Hunter Killer as a VFX Compositor."
  }
]

// let out;
var output = $('#sliderParent');




function appendToArray(){
  for (val in objectCredits) {
    output.append('<li class="credit-li reveal">' + '<input style="display:none;" value='+val+'>' + '<img value=' + val + ' onclick="filmCreditModal('+ val +')" class="credit-img" src=' + objectCredits[val]['img'] + '></li>')
  }
};

function appendToArray(){
  for (val in objectCredits) {
    // <li class="tooltip"> </li> <div class="tooltiptext"> <div>' + objectCredits[val]['description'] + '</div></div>
    output.append('<li class="credit-li reveal">' + '<input style="display:none;" value='+val+'>' + '<img value=' + val + ' onclick="filmCreditModal('+ val +')" class="credit-img" src=' + objectCredits[val]['img'] + '></li>')
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
    return console.log("test");
    // modalSlider.style.display = "block";
    // guardSlide = true;
    // $("#filmModalTitle").text(objectCredits[event].title);
    // $("#filmModalDescription").text(objectCredits[event].description);
    // $("#filmModalImage").attr("src", objectCredits[event].img);
  
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