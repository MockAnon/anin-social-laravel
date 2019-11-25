@extends('layouts.master')

@section('title')
 Development
@endsection

@section('content')
<div id="development-top" class="row display-info">
  <div id="addOpacity"> </div> 
    <div class="col push-top">
        <h3 class="reveal"> Development </h3>
        <p class="reveal"> Over a year of experience as a developer and roughly five years of Compositing experience. Experience with languages such as Javascript, PHP, Python, CSS, Sass and HTML. I also have experience with Frameworks such as Laravel, Angular, Ionic, and React Native. I have experience with lybraries such as jQuery and React.
         DATABASES, SYSTEMS, CMS: MongoDB, SQL, Git, Firebase, Google FireStore </p>

        <p> </p>
        <p> </p>
        <p>  </p>
        <div class="flex-row-start social-icon-row">
          <div class="zoom reveal">
            <a href="https://www.linkedin.com/in/jarondevans/"> <img class="padding-r-1" src="{{url('img/icons/linkedin-logo.svg')}}" alt="profile Pic"> LinkedIn </a>
          </div>

          <div class="padding-0-40 zoom reveal">
            <a href="https://github.com/mockanon"> <img class="padding-r-1" src="{{url('img/icons/github-logo.svg')}}" alt="profile Pic"> GitHub </a>
          </div>

          <div class="zoom reveal">
            <a href="https://resume.creddle.io/resume/4h5yjn4rlty"> <img class="padding-r-1" src="{{url('img/icons/profiles.svg')}}" alt="profile Pic"> Resume </a>
          </div>

          <div class="padding-0-40 zoom reveal">
            <a id="modalDevBtn"> <img class="padding-r-1" src="{{url('img/icons/email-icon.svg')}}" alt="profile Pic"> Contact Me </a>
          </div>

        </div>


        
    </div>

    <a href="#bottom"> 
      <img class="toggle-reel-img" style="position:absolute; left: 50%; right: 50%; bottom: 5vh;" src="img/icons/downArrow.svg"> 
    </a>

</div>


<!-- Image Accordion -->
<div id="bottom"> 
</div>

<div class="accordion-container">



<a id="devDiv00" class="card devcard-info reveal" onclick="loadDevObject('0')" href="#devTitle">
    <img src="img/appCredits/seminarii_02.png">
    <div class="card__head">
        Title
    </div>
    <p class="card__copy"> </p>
    <input style="display:none;" value='0'>
</a>

  <a id="devDiv01" class="card devcard-info reveal" onclick="loadDevObject('1')" href="#devTitle">
    <img src="img/appCredits/moneymate_01.jpg">
    <div class="card__head">
      MoneyMate
    </div>
    <p class="card__copy">This is the text below</p>
    <input style="display:none;" value='1'>
</a>

  <a id="devDiv02" class="card devcard-info reveal" onclick="loadDevObject('2')" href="#devTitle">
    <img src="img/appCredits/furever_01.png">
    <div class="card__head">
      Furrever
    </div>
    <p class="card__copy">This is the text below</p>
    <input style="display:none;" value='2'>
</a>

  <!-- <a id="devDiv03" class="card" onclick="loadDevObject('3')" href="#devTitle">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">
      Chatty App
    </div>
    <p class="card__copy">This is the text below</p>
</a>

  <a id="devDiv04" class="card" onclick="loadDevObject('4')" href="#devTitle">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">
      Scoodle
    </div>
    <p class="card__copy">This is the text below</p>
</a> -->

</div>
<!-- Image Accordion -->
<div id="development-bottom-parent">
  <div class="flex-col padding-2-0" id="development-bottom">
      <div class="flex-row">
          <div class="flex-1-van padding-0-1" style="padding-right: 0px;">
              <img class="scale-img reveal" id="devImg" src="/"/>
          </div>
          <div class="flex-1-van padding-0-1 border-left-break"> 
              <h1 class="reveal" id="devTitle"> Title </h1>
              <p class="reveal" id="devDescription"> Description </p>
          </div>
      </div>
      <!-- <h1 id="devTitle"> Title </h1>
      <p id="devDescription"> Description </p> -->
  </div>
</div>
    
@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>

let devObject = [{
    img: "img/appCredits/seminarii_01.png",
    img2: "img/appCredits/seminarii_02.png",
    title: "Seminarii",
    description: `In 2019, I began working on Seminarii. I was the UX Designer and Front-End Developer on this project. I was also responsible for updating the companies style guides and was fortunate to have been able to do some hiring for the project. <br> <br>
    I gained more experience in React, the PHP framework Laravel, and Adobe XD.

    I was also responsible for the companies sound editing and design.
    `,
    date: 'Jan 2019 - Current',
  },
  { img: "img/designCredits/credit2.jpg",
    img2: "img/designCredits/credit2.jpg",
    title: "MoneyMate",
    description: `MoneyMate is an admirable application I was forunate enough to work on in 2018. It was created by a start up called FIIN that was meant to be a much needed alternative to payday loans. It provides fast and easy personal loans that help the user take care of their instant cash needs, while also helping them create a savings cushion.
  In regards to the project stack: For Front-End Development we used React Router, React Native, Ionic, Ionic-Angular, Redux, Bootstrap, and Sass.
  For UX/UI we used InVision and Photoshop. Aside from assisting with this, I was fortunate enough to do some other design for ad and pamphlets, not to mention some CGI work building the Money Mate mascot, which they still use even today.
  I worked on this project as a Front-End Developer, Designer, and UI/UX Designer.
    `,
    date: 'Sept 2018 - Dec 2018',
  },
//   { img: "img/designCredits/credit2.jpg",
//     title: "FIIN INC",
//     description: "Blah Due Doe here"
//   },
  { img: "img/appCredits/furever_01.png",
    img2: "img/appCredits/furever_02.png",
    title: "Furrever",
    description: `Fur-ever is an application that helps caring owners acquire and raise pets the pet centric way. Fur-ever is an application that helps caring owners acquire and raise pets the pet centric way. We strived to create an app that would foster a pet centered community through local events and knowledge. 
    In regards to the project stack: For Front-End Development we used React Router, Bootstrap, Axios, and Sass. For Back-end we used Node.Js, Express, Firebase, and Google FireStore. We also used both the Google Places and Petfinder API’s.
    Our team split the work for the initial skeleton horizontally and then built the features vertically. Each feature spanned the entire stack.
    We built each feature vertically, thus we all worked on the full-stack.`,
    
    date: 'Sept 2018 - Dec 2018',
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Chatty App",
    description: "Work I did ",
    date: 'Sept 2018 - Dec 2018',
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Scoodle",
    description: "Blah Blah Blah",
    date: 'Sept 2018 - Dec 2018',
  },
]


// $(".devcard-info").mouseover(function() {
//   let index = $(this).find('input').val();
//   loadDevObject(index);

// }).mouseout(function() {

// });

let globalPortfolio;

// let loaded = 1;

function loadDevObject (event) {
  // event.preventDefault();
  
// if (loaded == 1) {
  loaded = 0;
  globalPortfolio = event;
  var el = $('#development-bottom');
  let devTitle = $("#devTitle");
  let imgSelect = $('.scale-img');
  let devDescription = $("#devDescription");

  el.stop();
  devTitle.stop();
  imgSelect.stop();
  devDescription.stop();

  
  
  devTitle.text(" ");
  devTitle.empty();
  // devTitle.animate({"max-width": '0px'},0);
  devTitle.css({"max-width": '0px'});

  // devTitle.empty();

  
  devDescription.text(" ");
  devDescription.empty();
  devDescription.animate({"max-height": '0px'},0);
  devDescription.css({"max-height": '0px'});
  // devDescription.animate({},0);
  // devTitle.empty();

  $( ".scale-img" ).each(function() {
    $(this).empty();
    // $(this).animate({"max-width": "0px"}, 1);
    $(this).css({"max-width": "0px"});
    $(this).attr("src", devObject[event].img);
  });



  new Promise(function(resolve, reject) {
    devTitle.css("display", "none");

    devDescription.css("display", "none");
    // $("#devImg").attr("src", devObject[event].img);
    // el.css('display','flex');
    // el.animate({"max-height": '0%'}, 5);
    el.css({"max-height": '0%'});
    
    console.log("Promise 01");
    
    // for(i = 0; i < imgSelect.length; i++) {
    //   imgSelect[i].animate({"max-height": 0}, 5);
    // }
  });

  new Promise(function(resolve, reject) {
    
    el.animate({"max-height": '100%'}, 100);
    console.log("Promise 02");
    devTitle.css("display", "none");
    devTitle.animate({ "max-width": '100%'}, 1000);
    

    devDescription.css("display", "none");
    // devDescription.animate({ "max-width": '100%'}, 1000);
    // devDescription.animate({ "max-height": '100%'}, 1000);
    devDescription.animate({ "max-height": '3000px'}, 3000);

    resolve('Promise 02'); 
  });

  new Promise(function(resolve, reject){
    devTitle.css("display", "block");
    devTitle.text(devObject[event].title);

    devDescription.css("display", "block");
    devDescription.text(devObject[event].description);
    console.log("Promise 03");

    $( ".scale-img" ).each(function() {
      console.log(this);
      $(this).animate({"max-width": '100%'}, 1000);
    });
    // devDescription.animate({ "max-height": '100%'}, 1000);
    // document.getElementById('development-bottom').scrollIntoView();
    // loaded = 1;
  });
// }
// else {
//   return false;
// }
  
}





//   let devAccordian = ``;

// function onLoadDev() {
// }

$(document).ready(function () {
  //your code here
  $("#devDiv00 .card__head").text(devObject[0].title);
  $("#devDiv00 .card__copy").text(devObject[0].date);

  $("#devDiv01 .card__head").text(devObject[1].title);
  $("#devDiv01 .card__copy").text(devObject[1].date);

  $("#devDiv02 .card__head").text(devObject[2].title);
  $("#devDiv02 .card__copy").text(devObject[2].date);

  loadDevObject(1);

  
});

// onLoadDev();

var devBtn = document.getElementById("modalDevBtn");

// devBtn.onclick = function() {
//   modal.style.display = "block";
// }


// $(".card-info").mouseover(function() {
//   let index = $(this).find('input').val();
//   typeSliderData(index);
//   }).mouseout(function() {
// });




</script>