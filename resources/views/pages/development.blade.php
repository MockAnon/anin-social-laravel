@extends('layouts.master')

@section('title')
 Development
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h3> Development </h3>
        <p> With over a year of experience as a developer and roughly five years of Compositing and Design experience. </p>
        
    </div>
</div>


<!-- Image Accordion -->
<div class="accordion-container">
  <div class="card" onclick="loadDevObject('1')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
    <div class="card__head">
      Plotting Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card" onclick="loadDevObject('2')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/False_alarm_-a.jpg/1280px-False_alarm_-a.jpg">
    <div class="card__head">
      Angry Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Neugierige-Katze.JPG/1280px-Neugierige-Katze.JPG">
    <div class="card__head">
      Curious Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Al_acecho_%289272124788%29.jpg/1280px-Al_acecho_%289272124788%29.jpg">
    <div class="card__head">
      Prowling Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">
      Sleepy Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">
      Sleepy Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
</div>
<!-- Image Accordion -->
<img id="devImg" src="/"/>
<h1 id="devTitle"> Title </h1>
<p id="devDescription"> Description </p>
    
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
]

function loadDevObject (event) {
    // modalSlider.style.display = "block";

    console.log("this works");
    
    console.log("EVENT VALUE", devObject[event].title)

    console.log("EVENT VALUE", devObject[event].img)

    console.log("EVENT VALUE", devObject[event].description)

    $("#devTitle").text(devObject[event].title);
    // $("#filmModalDescription").text(objectCredits[event].img);
    $("#devDescription").text(devObject[event].description);
    $("#devImg").attr("src", devObject[event].img);
  
  }

</script>