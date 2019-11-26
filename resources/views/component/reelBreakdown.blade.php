<div style="position:absolute;  right:5; width: 400%; z-index:5; bottom:100%;">
  <div id="accordion-container-reel" class="accordion-container-reel" style="display: none;">
    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/01a.jpg">
      <div class="card__head">
        Plotting Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/02a.jpg">
      <div class="card__head">
        Angry Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/03a.jpg">
      <div class="card__head">
        Curious Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/04a.jpg">
      <div class="card__head">
        Prowling Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/05a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>
    
    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/06a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/07a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/08a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/09a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/10a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/11a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/12a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/13a.jpg">
      <div class="card__head">
        Sleepy Cat
      </div>
      <p class="card__copy">This is the text below</p>
    </div>

    <div class="card" onclick="generalistOpen();">
      <img src="img/reelIcons/14a.jpg">
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