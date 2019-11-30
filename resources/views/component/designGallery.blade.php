<div class="accordion-container-design">
  <div onclick="typeSliderDataClick(0)" class="card card-info reveal" val="0">
    <input style="display:none;" value='0'>
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
    <div class="card__head" id="acordTitle00">
    </div>
    <!-- <p class="card__copy" id="acordCopy00">This is the text below</p> -->
  </div>
  <div onclick="typeSliderDataClick(1)" class="card card-info reveal" val="1">
    <input style="display:none;" value='1'>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/False_alarm_-a.jpg/1280px-False_alarm_-a.jpg">
    <div class="card__head" id="acordTitle01">
    </div>
    <!-- <p class="card__copy" id="acordCopy01">This is the text below</p> -->
  </div>
  <div onclick="typeSliderDataClick(2)" class="card card-info reveal" val="2">
    <input style="display:none;" value='2'>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Neugierige-Katze.JPG/1280px-Neugierige-Katze.JPG">
    <div class="card__head" id="acordTitle02">
    </div>
    <!-- <p class="card__copy" id="acordCopy02">This is the text below</p> -->
  </div>
  <div onclick="typeSliderDataClick(3)" class="card card-info reveal" val="3">
    <input style="display:none;" value='3'>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Al_acecho_%289272124788%29.jpg/1280px-Al_acecho_%289272124788%29.jpg">
    <div class="card__head" id="acordTitle03">
    </div>
    <!-- <p class="card__copy" id="acordCopy03">This is the text below</p> -->
  </div>
  <div onclick="typeSliderDataClick(4)" class="card card-info reveal" val="4">
    <input style="display:none;" value='3'>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head" id="acordTitle04">
    </div>
    <!-- <p class="card__copy" id="acordCopy04">This is the text below</p> -->
  </div>
</div>

<div id="design-op1" class="flex-row-to-col display-none padding-0-3" onload="assembleDesign()"> 
  <div style="width: 50%;">
      <h3 class="reveal" id="design-title"> Design </h3>
      <hr class="reveal" style="margin: 0px;">
      <p class="reveal" id="design-copy"> Design  </p>
     
  </div>
  <div class="reveal" id="vertParent" style="max-height:700px; display: flex; flex-wrap: wrap; width: 50%; justify-content: space-between; padding: 1rem;">
  </div>
</div> 

<!-- <div class="flex-row-to-col">
  <div style="width: 100%; height: 2rem;">
  
  </div>  
</div> -->

<div id="design-op2" class="flex-row-to-col display-none padding-0-3">
  <div style="width: 50%;">
    <button class="reveal" style="width: auto;" onclick="returnGallery()"> <img src="{{ asset('img/x.svg') }}" id="return-button"> </button>
    <h3 class="reveal" id="design-clicked-title"> Design Title </h3>
    <hr class="reveal" style="margin: 0px;">
    <p class="reveal" id="design-clicked-copy"> Design  </p>
  </div>
  
  <div style="width: 50%;">
    <img src="" class="vert-img reveal">
  </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script>

//loads generalists
  let vertCredits = [{
    img: "img/designCredits/credit1.jpg",
    title: "Colossal 1",
    description: "goes here"
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Colossal2",
    description: "goes here2"
  },
  { img: "img/designCredits/credit3.jpg",
    title: "Colossal3",
    description: "goes here3"
  },
  { img: "img/designCredits/credit4.jpg",
    title: "Colossal4",
    description: "goes here4"
  },
  { img: "img/filmCredits/credit5.jpg",
    title: "Colossal5",
    description: "goes he5555re"
  },
  { img: "img/filmCredits/credit6.jpg",
    title: "Colossal666",
    description: "goes h666ere"
  },
];

  let designPortfolio = [
    {
    title: 'Design',
    copy: 'Why hire a designer with only design experience when you have hire a designer that can take your work from start to finish.',
    sub: [
      {
        img: "img/designCredits/credit1.jpg",
        title: "BG Image",
        description: "goes here0"
      },
      { img: "img/designCredits/credit2.jpg",
        title: "Drawing",
        description: "goes here1"
      },
      { img: "img/designCredits/credit3_1.jpg",
        img2: "img/designCredits/credit3_2.jpg",
        title: "Design Wedding",
        description: "goes here2"
      },
      // { img: "img/designCredits/BeauteVite_DSP.jpg",
      //   title: "BeauteVite DPS",
      //   description: "goes here3"
      // },
      { img: "img/designCredits/moneymate.gif",
        title: "moneymate.gif",
        description: "moneymate"
      },
    ]
  }, 
  {
    title: 'UX Design',
    copy: 'Design',
    sub: [
      { img: "img/uxCredits/furever_01.png",
        title: "Colossal Peezy00",
        description: "goes here00"
      },
      { img: "img/uxCredits/furever_02.png",
        title: "Colossal Peezy01",
        description: "goes here01"
      },
      { img: "img/uxCredits/furever_03.gif",
        title: "Colossal Peezy00",
        description: "goes here00"
      },
      { img: "img/uxCredits/seminarii_01.png",
        title: "Colossal Peezy01",
        description: "goes here01"
      },
      { img: "img/uxCredits/seminarii_02.png",
        title: "Colossal Peezy00",
        description: "goes here0022"
      },

      ],
    },
  {
    title: 'General',
    copy: 'Design',
    sub: [],
    },
  {
    title: 'CGI',
    copy: 'Design',
    sub: [],
    },
  {
    title: 'Rigging',
    copy: 'Design',
    sub: [],
    }
];

// let out;
var outputVert = $('#vertParent');

let globalPortfolio = 0;

// vertCredits
for (val in designPortfolio[globalPortfolio].sub) {
  // console.log("vertCAl", vertCredits[val]['img']);
  // outputVert.append('<div style="position:absolute;"><img value=' + val + ' onclick="vertSliderData('+ val +')" class="credit-img" src=' + vertCredits[val]['img'] + '></div>')
  outputVert.append('<div style="margin: auto; width: 25%; height: auto; padding: .4rem; background: black;" class="design-credit-div"><img style="height: auto; width: 100%;" value=' + val + ' onclick="vertSliderData('+ val +')" class="design-credit" src=' + vertCredits[val]['img'] + '></div>')
}

  let guardSlide2 = false;

  //configuration
  var xOffset2 = 320;
  var animationSpeed2 = 1000;
  var slideSpeed2 = 2500;
  var startSlide2 = 1;
  var lastSlide2 = vertCredits.length;
  // var lastSlide2 = 2;

  //cache the DOM
  var sliderVert = $("#slider-vert-box");
  var slideContainerVert = sliderVert.find("ul");
  var slides = slideContainerVert.find("li");

  function checkPositionVert() {
      if (startSlide2 >= lastSlide2) {
        startSlide2 = 1;
        slideContainerVert.animate({"margin-top": "0px"},animationSpeed2, function(){
        startSlide2 = 1;
      });
    }
    if (startSlide2 <= 1) {
        startSlide2 = 1;
        slideContainerVert.animate({"margin-top": "0px"},animationSpeed2, function(){
        startSlide2 = 1;
      });
    }
  }



  function filmCreditModal (event) {
    modalSlider.style.display = "block";
        $("#filmModalTitle").text(objectCredits[event].title);
        $("#filmModalDescription").text(objectCredits[event].description);
        $("#filmModalImage").attr("src", objectCredits[event].img);
  };

  function vertSliderData(data) {
    // console.log (vertCredits[data]);
    // $(".vert-title").text(vertCredits[data].title);
    // $(".vert-description").text(vertCredits[data].description);

    console.log("DATA KEY", data, " ", globalPortfolio, " ", designPortfolio[globalPortfolio].sub[data].title, designPortfolio[globalPortfolio].sub[data].description);

    $("#design-clicked-title").text(designPortfolio[globalPortfolio].sub[data].title);
    $("#design-clicked-copy").text(designPortfolio[globalPortfolio].sub[data].description);

    $("#design-op1").css('display','none');
    $("#design-op2").css('display','flex');

    $(".vert-img").attr("src", vertCredits[data].img);
  };


  // $('.card-info').hover(function(){
  //   let inputVal = $(this).find('input').val();
  //   typeSliderData(inputVal);
  // });

  $(".card-info").mouseover(function() {
      let index = $(this).find('input').val();
      typeSliderData(index);
      // console.log(index);
      // $("#slider-title").text(objectCredits[index].title);
      // $("#slider-text").text(objectCredits[index].description);
      // $("#slider-ol-visible").show();
    }).mouseout(function() {
      // $("#slider-ol-visible").hide();
    });


  function typeSliderDataClick(data) {
    // document.getElementById('design-op1').scrollIntoView();

    typeSliderData(data);
  }

  // let dataSelected;

  function typeSliderData(data) {
    if(data == globalPortfolio) {
      return;

    } else {
      globalPortfolio = data;
      var el = $('#design-op1');
      var cr = $('.design-credit');
      el.stop();
      cr.stop();
      outputVert.empty();
      $("#design-title").text(designPortfolio[globalPortfolio].title);
      $("#design-copy").text(designPortfolio[globalPortfolio].description);

      for (val in designPortfolio[globalPortfolio].sub) {
        console.log("EACH", vertCredits[val]['img'], designPortfolio[globalPortfolio].sub[val]['img'] );
        outputVert.append('<div style="margin: auto; width: 25%; height: auto; padding: .4rem; background: black;" class="design-credit-div"><img style="height: auto; width: 100%;" value=' + val + ' onclick="vertSliderData('+ val +')" class="design-credit" src=' + designPortfolio[globalPortfolio].sub[val]['img'] + '></div>')
      } 

      new Promise(function(resolve, reject) {
        $("#design-op1").css('display','flex');
        $("#design-op2").css('display','none'); 
        el.animate({"max-height": 0}, 5);
        cr.animate({"max-width": 0}, 5);
      });

      new Promise(function(resolve, reject) {
        el.animate({"max-height": '100%'}, 1000);
        cr.animate({"max-width": '100%'}, 1000);
        console.log("Promise 02");
        resolve('Promise 02'); 
      });

      return;
    }
  };

  function returnGallery() {
    $("#design-op1").css('display','flex');
    $("#design-op2").css('display','none');
  };



$(document).ready(function() { 

  // console.log("123123123 this peee");
  // alert("Assemble");

  $("#acordTitle00").text(designPortfolio[0].title);
  $("#acordTitle01").text(designPortfolio[1].title);
  $("#acordTitle02").text(designPortfolio[2].title);
  $("#acordTitle03").text(designPortfolio[3].title);
  $("#acordTitle04").text(designPortfolio[4].title);

  

  // $("#acordCopy00").text(designPortfolio[0].copy);
  // $("#acordCopy01").text(designPortfolio[1].copy);
  // $("#acordCopy02").text(designPortfolio[2].copy);
  // $("#acordCopy03").text(designPortfolio[3].copy);
  // $("#acordCopy04").text(designPortfolio[4].copy);

  

});


</script>



