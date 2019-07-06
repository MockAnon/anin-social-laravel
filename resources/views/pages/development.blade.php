@extends('layouts.master')

@section('title')
 Development
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h3> Development </h3>
        <p> With over a year of experience as a developer and roughly five years of Compositing experience. Experience with languages such as Javascript, Jquery, PHP, Python, CSS, SCSS and HTML. I also have experience with Frameworks such as Laravel, React, Angular, Ionic, and React Native. </p>
        
    </div>
</div>


<!-- Image Accordion -->
<div class="accordion-container">
  <div class="card" onclick="loadDevObject('0')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
    <div class="card__head">
      Plotting Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card" onclick="loadDevObject('1')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/False_alarm_-a.jpg/1280px-False_alarm_-a.jpg">
    <div class="card__head">
      Angry Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>

  <div class="card" onclick="loadDevObject('2')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Neugierige-Katze.JPG/1280px-Neugierige-Katze.JPG">
    <div class="card__head">
      Curious Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>

  <div class="card" onclick="loadDevObject('3')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Al_acecho_%289272124788%29.jpg/1280px-Al_acecho_%289272124788%29.jpg">
    <div class="card__head">
      Prowling Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>

  <div class="card" onclick="loadDevObject('4')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">
      Sleepy Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>

  <div class="card" onclick="loadDevObject('5')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">
      Sleepy Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>

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

<script>

let devObject = [{
    img: "img/designCredits/credit1.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Colossal",
    description: "goes here"
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Bob",
    description: "Blah Due Doe here"
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Stage",
    description: "goes here"
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Cheetos",
    description: "Work I did "
  },
  { img: "img/designCredits/credit2.jpg",
    title: "Not Cheetos",
    description: "Blah Blah Blah"
  },
]

function loadDevObject (event) {
    // modalSlider.style.display = "block";

    console.log("this works");
    
    console.log("EVENT VALUE", devObject[event].title);

    console.log("EVENT VALUE", devObject[event].img);

    console.log("EVENT VALUE", devObject[event].description);

    $("#devTitle").text(devObject[event].title);
    // $("#filmModalDescription").text(objectCredits[event].img);
    $("#devDescription").text(devObject[event].description);
    $("#devImg").attr("src", devObject[event].img);
  
  }

</script>