<div id="button-reel-breakdown" onclick="toggleBreakdown()" style="margin: 1rem 0px;"> 
    <p id="reel-copy" style="margin:0px; padding:10px;"> Reel Breakdown </p>
</div>

<div id="accordion-container-reel" class="accordion-container-reel" style="display: none;">
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
    <div class="card__head">
      Plotting Cat
    </div>
    <p class="card__copy">This is the text below</p>
  </div>
  <div class="card">
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

<script>
function toggleBreakdown() {
  // console.log("toggle");
  var x = document.getElementById("accordion-container-reel");
  var y = document.getElementById("accordion-container-reel").querySelectorAll(".card");

  let buttonReel = document.getElementById("button-reel-breakdown");

  // console.log("toggle", y);



  
  if (x.style.display === "none") {
    // console.log("hide");
    x.style.display = "flex";
    // y.style.height = "40vmin";
    y.forEach(function(element) {

      // element.style.height = "260px";
      element.classList.remove("height0");
    });
    buttonReel.style.margin = "0px";
    

  } else {
    // console.log("show");
    x.style.display = "none";
    // y.style.height = "0px";
    y.forEach(function(element) {
      // element.style.height = "0px";
      element.classList.add("height0");

    });

    buttonReel.style.margin = "1rem 0px 1rem 0px";

  }

};
</script>