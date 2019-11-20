


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
      console.log(scrollTop, height);
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


  </script>

@section('custom-script')


@stop