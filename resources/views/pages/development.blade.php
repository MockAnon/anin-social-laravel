@extends('layouts.master')

@section('title')
 Development
@endsection
@section('description')
 My name is Jaron D Evans I am a Developer with over two years of experience. I also worked as a Compositor and CG generalist in the film industry.
@endsection
@section('keywords')
 Design, Generalist, Jaron D Evans, Art, Compositor, Experience
@endsection

@section('content')
<div id="development-top" class="row display-info">
  <div id="addOpacity"> </div> 
    <div class="col push-top">
        <h1 class="reveal"> Development </h1>
        <p class="reveal"> Over two years of experience as a developer and roughly five years of Compositing experience. Experience with languages such as Javascript, PHP, Python, CSS, Sass and HTML. I also have experience with Frameworks such as Laravel, Angular, Ionic, and React Native. I have experience with lybraries such as jQuery and React.
         DATABASES, SYSTEMS, CMS: MongoDB, SQL, Git, Firebase, Google FireStore </p>

        <div class="flex-row-start social-icon-row">
          <div class="zoom reveal">
            <a href="https://www.linkedin.com/in/jarondevans/"> <img class="padding-r-1" src="{{url('img/icons/linkedin-logo.svg')}}" alt="profile Pic"> LinkedIn </a>
          </div>

          <div class="padding-0-40 zoom reveal">
            <a href="https://github.com/mockanon"> <img class="padding-r-1" src="{{url('img/icons/github-logo.svg')}}" alt="profile Pic"> GitHub </a>
          </div>

          <div class="zoom reveal">
            <a href="https://resume.creddle.io/resume/4h5yjn4rlty" target="_blank" rel="noreferrer"> <img class="padding-r-1" src="{{url('img/icons/profiles.svg')}}" alt="profile Pic"> Resume </a>
          </div>

          <div class="padding-0-40 zoom reveal">
            <a id="modalDevBtn" onclick="openModal()"> <img class="padding-r-1" src="{{url('img/icons/email-icon.svg')}}" alt="profile Pic"> Contact Me </a>
          </div>
        </div>



      <div class="skew">
        <div style="" class="flex-row-start margin-top-2 ">
          <div class="col-12 mt-0">
            <ul class="border-black background-grey h-100">
              <li> <h5 class="border-left-orange"> EXPERIENCE </h5> </li>
              <li  class="border-bottom-black flex-row"> 
                <div>
                  Net2Net IT - Developer
                </div>
                <div>
                   Jan 2020 to current
                </div>
              </li>
              <li  class="border-bottom-black flex-row"> 
                <div>
                  BeauteSchool Inc. - Front End Developer and UX Designer 
                </div>
                <div>
                  Jan. 2019​ to Jan 2020
                </div>
              </li>
              <li class="flex-row"> 
                <div>
                  FIIN INC. - Front-End Developer and Web Designer Sept. 
                </div>
                <div>
                  2018​ to Jan. 2019​
                </div>
              </li>

            </ul>
          </div>
        </div>

        {{-- <div style="" class="flex-row-start">
          <div class="col-12 mt-0">
            <ul class="border-black">
              <li  class="border-bottom-black"> <h5 class="border-left-orange"> PROJECTS </h5> </li>
              <li  class="border-bottom-black"> 
                Net2Net IT - Developer Jan 2020 to current
              </li>
              <li  class="border-bottom-black"> 
                BeauteSchool Inc. - Front End Developer and UX Designer Jan. 2019​ to Jan 2020
              </li>
              <li  class="border-bottom-black"> 
                FIIN INC. - Front-End Developer and Web Designer Sept. 2018​ to Jan. 2019​
              </li>
            </ul>
          </div>
        </div> --}}

        <div style="" class="flex-row-start mb-6">

          <div class="col-3 mt-0 ">
            <ul class="border-black background-grey h-100">
              <li> <h5 class="border-left-orange"> DATABASES, SYSTEMS, CMS </h5> </li>
              <li  class="border-bottom-black"> MongoDB</li>
              <li  class="border-bottom-black"> SQL</li>
              <li  class="border-bottom-black"> Git</li>
              <li  class="border-bottom-black"> Firebase</li>
              <li> Google FireStore </li>
            </ul>
          </div>

          <div class="col-3 mt-0">
            <ul class="border-black background-grey h-100">
              <li> <h5 class="border-left-orange"> CODING LANGUAGES </h5> </li>
              <li  class="border-bottom-black"> HTML</li>
              <li  class="border-bottom-black"> CSS</li>
              <li  class="border-bottom-black"> JavaScript</li>
              <li  class="border-bottom-black"> Python</li>
              <li  class="border-bottom-black"> PHP </li>
              <li> C# </li>
            </ul>
          </div>
          
          <div class ="col-6 mt-0 ">
            <div class="flex-row-start border-black background-grey h-100">
              <ul class="col-6 padding-0">
                <li> <h5 class="border-left-orange"> FRAMEWORKS, LIBRARIES, PLATFORMS AND ENVIRONMENTS </h5> </li>
                <li  class="border-bottom-black"> NodeJS</li>
                <li  class="border-bottom-black"> React</li>
                <li  class="border-bottom-black"> Rails</li>
                <li  class="border-bottom-black"> AJAX</li>
                <li  class="border-bottom-black"> Express </li>
                <li  class="border-bottom-black"> Knex </li>
                <li> JQuery </li>

              </ul>
              <ul class="col-6 padding-0 h-100">
                <li  class="border-bottom-black"> ActiveRecord </li>
                <li  class="border-bottom-black"> WebSockets </li>
                <li  class="border-bottom-black"> React Router </li>
                <li  class="border-bottom-black"> Axios </li>
                <li  class="border-bottom-black"> SASS </li>
                <li  class="border-bottom-black"> Node.js </li>
                <li  class="border-bottom-black"> Google Places </li>
                <li  class="border-bottom-black"> Ionic </li>
                <li  class="border-bottom-black"> React Native </li>
                <li  class="border-bottom-black"> Laravel </li>
                <li  class="border-bottom-black"> Moodle </li>
                <li> Unity </li>
              </ul>
            </div>
          </div>

        </div>
        
      </div>

        
      </div>

        
   

    <a href="#bottom" aria-label="Bottom of page"> 
    <svg class="toggle-reel-img"  style="position:absolute; left: 50%; right: 50%; bottom: 5vh;"  version="1.1" id="Capa_1" overflow="visible" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929; fill:grey;"
      xml:space="preserve">
      <g>
        <path id="top-arrow" d="M135.899,167.877c1.902,1.902,4.093,2.851,6.567,2.851s4.661-0.948,6.562-2.851L282.082,34.829
        c1.902-1.903,2.847-4.093,2.847-6.567s-0.951-4.665-2.847-6.567L267.808,7.417c-1.902-1.903-4.093-2.853-6.57-2.853
        c-2.471,0-4.661,0.95-6.563,2.853L142.466,119.622L30.262,7.417c-1.903-1.903-4.093-2.853-6.567-2.853
        c-2.475,0-4.665,0.95-6.567,2.853L2.856,21.695C0.95,23.597,0,25.784,0,28.262c0,2.478,0.953,4.665,2.856,6.567L135.899,167.877z"
          />

              <path id="bottom-arrow" d="M135.899,167.877c1.902,1.902,4.093,2.851,6.567,2.851s4.661-0.948,6.562-2.851L282.082,34.829
        c1.902-1.903,2.847-4.093,2.847-6.567s-0.951-4.665-2.847-6.567L267.808,7.417c-1.902-1.903-4.093-2.853-6.57-2.853
        c-2.471,0-4.661,0.95-6.563,2.853L142.466,119.622L30.262,7.417c-1.903-1.903-4.093-2.853-6.567-2.853
        c-2.475,0-4.665,0.95-6.567,2.853L2.856,21.695C0.95,23.597,0,25.784,0,28.262c0,2.478,0.953,4.665,2.856,6.567L135.899,167.877z"
          />
      </g>
    </svg>
  </a>

</div>


<!-- Image Accordion -->
<div id="bottom"> 
</div>

<div class="accordion-container">



<a id="devDiv00" class="card devcard-info reveal" onclick="loadDevObject('0')" href="#devTitle">
    <img src="img/appCredits/seminarii_02.png"  alt="seminarii">
    <div class="card__head">
        Title
    </div>
    {{-- <p class="card__copy"> </p> --}}
    <input style="display:none;" value='0'>
</a>

  <a id="devDiv01" class="card devcard-info reveal" onclick="loadDevObject('1')" href="#devTitle">
    <img src="img/appCredits/moneymate_01.jpg"  alt="moneymate">
    <div class="card__head">
      MoneyMate
    </div>
    {{-- <p class="card__copy"></p> --}}
    <input style="display:none;" value='1'>
</a>

  <a id="devDiv02" class="card devcard-info reveal" onclick="loadDevObject('2')" href="#devTitle">
    <img src="img/appCredits/furever_01.png"  alt="furever">
    <div class="card__head">
      Furrever
    </div>
    {{-- <p class="card__copy"></p> --}}
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
          <div class="flex-1-van padding-0-1" style="padding-right: 0px; background: #e5eeef;">
              <img class="scale-img reveal" id="devImg" src="/"  alt="generalist"/>
              <img class="scale-img reveal" id="devImg02" src="/"  alt="generalist"/>
              <img class="scale-img reveal" id="devImg03" src="/"  alt="generalist"/>
              <img class="scale-img reveal" id="devImg04" src="/"  alt="generalist"/>
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
@section('javascript')
  {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}

  <script type="text/javascript" defer="defer">

  let devObject = [{
      img: ["img/appCredits/seminarii_01.png", "img/appCredits/seminarii_02.png"],
      img2: "img/appCredits/seminarii_02.png",
      title: "Seminarii",
      description: `In 2019, I began working on Seminarii. I was the UX Designer and Front-End Developer on this project. I was also responsible for updating the companies style guides and was fortunate to have been able to do some hiring for the project. <br> <br>
      I gained more experience in React, the PHP framework Laravel, and Adobe XD.

      I was also responsible for the companies sound editing and design.
      `,
      date: 'Jan 2019 - Current',
    },
    { img: ["img/appCredits/moneymate_01.jpg", "img/appCredits/moneymate_02.jpg", "img/appCredits/moneymate_03.jpg", "img/appCredits/moneymate_04.gif"],
      title: "MoneyMate",
      description: `MoneyMate is an application I was forunate enough to work on in 2018. It was created by a start up called FIIN that was meant to be a much needed alternative to payday loans. It provides fast and easy personal loans that help the user take care of their instant cash needs, while also helping them create a savings cushion.
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
    { img: ["img/appCredits/furever_01.png", "img/appCredits/furever_03.gif", "img/appCredits/furever_02.png"],
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

    $( ".scale-img" ).each(function(val) {
      console.log("output this", devObject[event].img[val]);
      $(this).empty();
      // $(this).animate({"max-width": "0px"}, 1);
      $(this).css({"max-width": "0px"});
      console.log("woah", val);
      if(devObject[event].img[val] == undefined) {
        $(this).attr("src", "");
      } else {
        $(this).attr("src", devObject[event].img[val]);
      }
    });



    new Promise(function(resolve, reject) {
      devTitle.css("display", "none");

      devDescription.css("display", "none");
      el.css({"max-height": '0%'});
      console.log("Promise 01");
    });

    new Promise(function(resolve, reject) {
      
      el.animate({"max-height": '3000%'}, 100);
      console.log("Promise 02");
      devTitle.css("display", "none");
      devTitle.animate({ "max-width": '100%'}, 1000);
      

      devDescription.css("display", "none");
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

    });

  }





  //   let devAccordian = ``;

  // function onLoadDev() {
  // }

  $(document).ready(function () {
    //your code here
    $("#devDiv00 .card__head").text(devObject[0].title);
    //$("#devDiv00 .card__copy").text(devObject[0].date);

    $("#devDiv01 .card__head").text(devObject[1].title);
    //$("#devDiv01 .card__copy").text(devObject[1].date);

    $("#devDiv02 .card__head").text(devObject[2].title);
    //$("#devDiv02 .card__copy").text(devObject[2].date);

    loadDevObject(1);

    
  });

  // onLoadDev();

  var devBtn = document.getElementById("modalDevBtn");

  //devBtn.onclick = function() {
    //modal.style.display = "block";
  //}

  function openModal() {
    modal.style.display = "block";
  }

  // $(".card-info").mouseover(function() {
  //   let index = $(this).find('input').val();
  //   typeSliderData(index);
  //   }).mouseout(function() {
  // });




  </script>
@endsection
