@extends('layouts.master')

@section('title')
 Design/ Generalist
@endsection

@section('content')

<div id="generalist-ol" class="generalist-ol-visible">
    <img onclick="generalistClose();" id="generalist-close" src="img/x2.svg">
    <h1> Hello </h1>
    <p> Hello 2323 232 222 </p>
</div>

<div id="generalist-top">

    <div class="display-info">
        <div class="">
            <div class="flex-row">

                <h3> Designer, Compositor, and CG Generalist </h3>
                <button onclick="toggleReel()" class="toggle-reel-button"> 
                    <p> Play Reel </p> 
                    <img class="toggle-reel-img" style="" src="img/icons/play_reel.svg"> 
                </button>
                <div id="button-reel-breakdown" onclick="toggleBreakdown()" style="margin: 1rem 0px;"> 
                    <p id="reel-copy" style="margin:0px; padding:10px;"> Reel Breakdown </p>
                    <img class="toggle-reel-img" style="" src="img/icons/gallery.svg">
                    @include('component.reelBreakdown') 
                </div>
            </div>
            <p>
            My names Jaron D. Evans, I'm currently working as Front-End Developer and UI Designer. <br>
            I'm a graduate of both Seneca's Visual Effects for Film and Television program, as well as Sheridan's famous BAA Animation program. Over my carrier I have worked as a designer, ui designer, animator, cg generalist, and compositor accumillating over 20 film credits, attributing to multple apps, websites, and even winning a Canadian Screen Award. I've worked on projects such as: UFO Declassifed, Texas Rising, and Beast Farmer. I'm proficent with software such as: Nuke, Modo, Fusion, Maya, Mudbox, Z Brush, After Effects, Premier, Photoshop, Boujou, and Pftrack. Please feel free to send me a message regarding any potential employment opportunities. 
            <br> Thank you for both your time,
            <br> and consideration.
            </p>
        </div>
    </div>

    <div class="row display-reel">
        <div style="position: relative;">
            <button onclick="toggleReel()" class="toggle-reel-button position-reel-button"> 
                <p> Play Reel </p> 
                <img class="toggle-reel-img" src="img/icons/return_icon.svg"> 
            </button>
            <iframe style="position: relative;" class="video" width="100%" height="315" src="https://www.youtube.com/embed/6OKm4HMqyHY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </div>

    <div class="tooltip">Hover over me
        <span class="tooltiptext">Tooltip text</span>
    </div>
    <div class="tooltip">Hover over me
        <span class="tooltiptext">Tooltip text</span>
    </div>


    @include('component.slider')

</div>

<!-- design Section -->

 @include('component.design')






@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="application/javascript"> 




let globalToggleReel = false;




function toggleReel() {
    if (globalToggleReel == false) {
        // console.log("this sort of works. false");
        $('.display-info').css('display','none');
        $('.display-reel').css('display','block');
        $('.video').attr('src', 'https://www.youtube.com/embed/6OKm4HMqyHY');
        return globalToggleReel = true;
    }
    if (globalToggleReel == true) {
        // console.log("this sort of works. true");
        $('.display-reel').css('display','none');
        $('.display-info').css('display','block');
        $('.video').attr('src', '/');
        return globalToggleReel = false;
    }
}

    function generalistClose() {
        $('#generalist-ol').hide();
        
        // $('#generalist-ol').addClass("generalist-ol-visible");
    }

    function generalistOpen() {
        $('#generalist-ol').show();
        // $(document).click(function(event) {
        // console.log()
        
        // if (!$(event.target).closest("#generalist-ol, #generalist-close").length) {
        //     $("body").find("#generalist-ol").addClass("generalist-ol-visible");
        // }
        // });

        // $('#generalist-ol').removeClass("generalist-ol-visible");
    }



    $(document).click(function(event) {
        if (!$(event.target).closest("#generalist-ol, #generalist-close, #accordion-container-reel").length) {
            $('#generalist-ol').hide();
        }
    });










</script>
