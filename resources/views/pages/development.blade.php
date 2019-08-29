@extends('layouts.master')

@section('title')
 Development
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h3> Development </h3>
        <p> Over a year of experience as a developer and roughly five years of Compositing experience. Experience with languages such as Javascript, PHP, Python, CSS, Sass and HTML. I also have experience with Frameworks such as Laravel, Angular, Ionic, and React Native. I have experience with lybraries such as jQuery and React.
         DATABASES, SYSTEMS, CMS: MongoDB, SQL, Git, Firebase, Google FireStore </p>

        <p> </p>
        <p> </p>
        <p>  </p>
        <div class="flex-row-start social-icon-row">
          <div class="">
            <a href="https://www.linkedin.com/in/jarondevans/"> <img src="{{url('img/icons/linkedin-logo.svg')}}" alt="profile Pic"> LinkedIn </a>
          </div>

          <div class="padding-0-40">
            <a href="https://github.com/mockanon"> <img src="{{url('img/icons/github-logo.svg')}}" alt="profile Pic"> GitHub </a>
          </div>

          <div class="">
            <a href="https://resume.creddle.io/resume/4h5yjn4rlty"> <img src="{{url('img/icons/profiles.svg')}}" alt="profile Pic"> Resume </a>
          </div>

          <div class="padding-0-40">
            <a id="modalDevBtn"> <img src="{{url('img/icons/email-icon.svg')}}" alt="profile Pic"> Contact Me </a>
          </div>

        </div>
        
    </div>
</div>


<!-- Image Accordion -->
<div class="accordion-container">

<a id="devDiv00" class="card" onclick="loadDevObject('0')" href="#devTitle">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
    <div class="card__head">
        Title
    </div>
    <p class="card__copy"> </p>
</a>

  <a id="devDiv01" class="card" onclick="loadDevObject('1')" href="#devTitle">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/False_alarm_-a.jpg/1280px-False_alarm_-a.jpg">
    <div class="card__head">
      MoneyMate
    </div>
    <p class="card__copy">This is the text below</p>
</a>

  <a id="devDiv02" class="card" onclick="loadDevObject('2')" href="#devTitle">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Al_acecho_%289272124788%29.jpg/1280px-Al_acecho_%289272124788%29.jpg">
    <div class="card__head">
      Furrever
    </div>
    <p class="card__copy">This is the text below</p>
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
<div class="flex-col">
    <div class="flex-row">
        <div class="flex-1-van" >
            <img id="devImg" src="/"/>
        </div>
        <div class="flex-1-van"> 
            <h1 id="devTitle"> Title </h1>
            <p id="devDescription"> Description </p>
        </div>
    </div>
    <!-- <h1 id="devTitle"> Title </h1>
    <p id="devDescription"> Description </p> -->
</div>
    
@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>

let devObject = [{
    img: "img/designCredits/credit1.jpg",
    title: "BeautyVite",
    description: `In 2019, I began working on BeauteVite. I was the UX Designer and Front-End Developer on this project. I was also responsible for updating the companies style guides and was fortunate to have been able to do some hiring for the project. <br> <br>
    I gained more experience in React, the PHP framework Laravel, and Adobe XD.

    I was also responsible for the companies sound editing and design.
    `,
    date: 'Jan 2019 - Current',
  },
  { img: "img/designCredits/credit2.jpg",
    title: "MoneyMate",
    description: `In 2018, MoneyMate was the first App I worked on as a professional Developer, I also did some UI Design and Regular Design. While working on this project I gained experience in React, Redux, Ionic, and UX. <br> <br>
    I also gained experience as I revised the front end and recreated their mascot. Building the company an amazing 3D assest that they are still using today.
    `,
    date: 'Sept 2018 - Dec 2018',
  },
//   { img: "img/designCredits/credit2.jpg",
//     title: "FIIN INC",
//     description: "Blah Due Doe here"
//   },
  { img: "img/designCredits/credit2.jpg",
    title: "Furrever",
    description: "I mostly worked on the front-end and design for this group project, though I did also assist with the back-end." ,
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

function loadDevObject (event) {
    // modalSlider.style.display = "block";

    // console.log("this works");
    
    // console.log("EVENT VALUE", devObject[event].title);

    // console.log("EVENT VALUE", devObject[event].img);

    // console.log("EVENT VALUE", devObject[event].description);

    $("#devTitle").text(devObject[event].title);
    // $("#filmModalDescription").text(objectCredits[event].img);
    $("#devDescription").text(devObject[event].description);
    $("#devImg").attr("src", devObject[event].img);
  
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

  
});

onLoadDev();

var devBtn = document.getElementById("modalDevBtn");

devBtn.onclick = function() {
  modal.style.display = "block";
}


</script>