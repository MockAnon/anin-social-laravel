<div style="position:absolute;  right:5; width: 400%; z-index:5; bottom:100%;">
  <div id="accordion-container-reel" class="accordion-container-reel" style="display: none;">
    <div class="card" onclick="generalistOpen();">
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
      <div class="card__head">
        Plotting Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/False_alarm_-a.jpg/1280px-False_alarm_-a.jpg">
      <div class="card__head">
        Angry Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Neugierige-Katze.JPG/1280px-Neugierige-Katze.JPG">
      <div class="card__head">
        Curious Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Al_acecho_%289272124788%29.jpg/1280px-Al_acecho_%289272124788%29.jpg">
      <div class="card__head">
        Prowling Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
  </div>
</div>

<script>
  var xToggle = document.getElementById("accordion-container-reel");
  var yToggle = document.getElementById("accordion-container-reel").querySelectorAll(".card");
  let buttonReel = document.getElementById("button-reel-breakdown");
  // function toggleBreakdown() {
  //   if (xToggle.style.display === "none") {
  //     breakdownShow();
  //   } else {
  //     breakdownHide();
  //   }
  // };

  function breakdownShow() {
    xToggle.style.display = "flex";
    yToggle.forEach(function(element) {
      element.classList.remove("height0");
    });
    $(document).click(function(event) {
    if (!$(event.target).closest("#accordion-container-reel, #button-reel-breakdown").length) {
      console.log("BOOM");
        xToggle.style.display = "none";
        yToggle.forEach(function(element) {
          element.classList.add("height0");
        });
      }
    });
  };

  function breakdownHide() {
    xToggle.style.display = "none";
    yToggle.forEach(function(element) {
      element.classList.add("height0");
    });
  };

  $(document).ready(function(){
      $('#button-reel-breakdown').hover(function(){
        breakdownShow();

      }, function(){
        breakdownHide();
      });
  });



</script>