


  <!-- <script src="jquery-3.4.0.min.js"></script> -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          // alert("Settings page was loaded");
          console.log("Please work");
      });


      
      // WOAH
    var rafId = null;
    var delay = 80;
    var lTime = 0;

    function scroll() {
      var scrollTop = $(window).scrollTop();
      var height = $(window).height()
      // console.log(scrollTop, height);
      var visibleTop = scrollTop + height;

      if(scrollTop < 20) {
        console.log("transparent");
        $("#navbar").css('background-color','#fbf3f200');
      } else {
        $("#navbar").css('background-color', "#fbf3f2");
      }

      $('.reveal').each(function() {
        var $t = $(this);
        if ($t.hasClass('reveal_visible')) { return; }
        var top = $t.offset().top;
        if (top <= visibleTop) {
          if (top + $t.height() < scrollTop) {
            $t.removeClass('reveal_pending').addClass('reveal_visible');
          } else {
            $t.addClass('reveal_pending');
            if (!rafId) requestAnimationFrame(reveal);  
          }
        }

      });
    }

    function reveal() {
      rafId = null;
      var now = performance.now();
      
      if (now - lTime > delay) {
        lTime = now;
        var $ts = $('.reveal_pending');
        $($ts.get(0)).removeClass('reveal_pending').addClass('reveal_visible');  
      }
      
      
      if ($('.reveal_pending').length >= 1) rafId = requestAnimationFrame(reveal);
    }

    $(scroll);
    $(window).scroll(scroll);
    // $(window).click(function() {
    //   console.log("clicker");
    //   $('.reveal').removeClass('reveal_visible').removeClass('reveal_pending');
    //   lTime = performance.now() + 500;
    //   var top = $(window).scrollTop();
    //   $(window).scrollTop(top === 0 ? 1 : top-1);
    // });

    $(document).ready(function(){
      let right = $("#img-home-right");
      let left = $("#img-home-left");

      let righta = $("#img-home-right .main-links-homepage");
      let lefta = $("#img-home-left .main-links-homepage");



      // background: #668da7;

      $(function() {
        right.hover(function() {
          left.css('background-color', '#00caff4d');
          lefta.css('background-color', '#668da7');
          
        }, function() {
          // on mouseout, reset the background colour
          lefta.css('background-color', '');
          left.css('background-color', '#ffffff45');
          
        });
      });

      $(function() {
        left.hover(function() {
          right.css('background-color', '#00caff4d');
          righta.css('background-color', '#668da7');
          
        }, function() {
          righta.css('background-color', '');
          // on mouseout, reset the background colour
          right.css('background-color', '#ffffff45');
        });
      });


      right.mouseover(function() {
        // console.log("over");  
        right.animate({
            width: "70%"
        }, 100, function() {

        });
        left.animate({
            width: "30%"
        }, 100, function() {

        });
      });

      left.mouseover(function() {
        // console.log("left");  
        left.animate({
            width: "70%",
            background: "#00caff4d"
        }, 100, function() {

        });
        right.animate({
            width: "30%",
            background: "#ffffff45"
        }, 100, function() {

        });
      });
    });




  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RJGL0ERD9K"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RJGL0ERD9K');
  </script>

@section('custom-script')


@stop