@extends('layouts.master')

@section('title')
 Design/ Generalist
@endsection
@section('description')
 My name is Jaron D Evans I am a Design and overall Generalist.
@endsection
@section('keywords')
 Design, Generalist, Jaron D Evans, Art, Compositor, Experience
@endsection

@section('content')
<div id="generalist-body">
    
    <!-- <img id="" src="img/generalistBG.jpg">
    <img id="" src="img/developmentBG.jpg"> -->

        
    <div id="generalist-ol" class="generalist-ol-visible">
        <img onclick="generalistClose();" id="generalist-close" src="img/x2.svg">
        <h1> Hello </h1>
        <p> Hello 2323 232 222 </p>
    </div>

    <div id="generalist-top">
        <div id="addOpacity"> </div>

        <div class="display-info push-top">
      
                <div class="flex-row">

                    <h3 class="reveal" style="margin: 0px;"> Developer, Compositor <br> and CG Generalist </h3>

                </div>
                <hr style="margin: 0px;">
                <div>
                    <p class="font-size-14 reveal">
                        My names Jaron D. Evans, I'm currently working as Front-End Developer and UI Designer. <br> <br>
                        I'm a graduate of both Seneca's Visual Effects for Film and Television program, as well as Sheridan's famous BAA Animation program. Over my carrier I have worked as a Front-End Developer, Designer, UI/UX Designer, Animator, Cg Generalist, and Compositor accumillating over 20 film credits, attributing to multple apps, websites, and even winning a Canadian Screen Award. I've worked on projects such as: UFO Declassifed, Texas Rising, and Beast Farmer. I'm proficent with software such as: Nuke, Modo, Fusion, Maya, Adobe XD, Mudbox, Z Brush, After Effects, Premier, Photoshop, Illustrator, Boujou, and Pftrack. Please feel free to send me a message regarding any potential employment opportunities. 
                        <br> <br> Thank you for both your time,
                        <br> <br> and consideration.
                    </p>
                </div>
                
                
{{-- position: absolute; right: 3vw; --}}

                <div class="flex-row-start social-icon-row" style="justify-content: space-between; bottom: 0px;">
                    <div class="flex-row-start social-icon-row">  
                        <div class="zoom reveal margin-auto">
                            <a href="https://www.linkedin.com/in/jarondevans/" class="color-black"> <img class="padding-r-1" src="{{url('img/icons/linkedin-logo.svg')}}" alt="profile Pic"> LinkedIn </a>
                        </div>

                        <div class="zoom reveal padding-0-40 margin-auto">
                            <a target="_blank" href="https://resume.creddle.io/resume/4h5yjn4rlty" class="color-black"> <img class="padding-r-1" src="{{url('img/icons/profiles.svg')}}" alt="profile Pic"> Resume </a>
                        </div>

                        <div class="zoom reveal margin-auto">
                            <a id="modalDevBtn" onclick="openModal()" class="color-black"> <img class="padding-r-1" src="{{url('img/icons/email-icon.svg')}}" alt="profile Pic"> Contact Me </a>
                        </div>
                    </div>

                    <div style="justify-content: flex-end; justify-content: flex-end; bottom: 0px;">
                        <button onclick="toggleReel()" class="toggle-reel-button zoom"> 
                            <p class="margin-0 padding-bottom-1"> Play Reel </p> 
                            <img class="toggle-reel-img" style="" src="img/icons/play_reel.svg"> 
                        </button>
                    </div>
                    <!-- <div id="button-reel-breakdown" onclick="toggleBreakdown()" style="margin: 1rem 0px;">  -->
                    {{-- <div class="zoom" id="button-reel-breakdown" style=""> 
                        <p id="reel-copy" class="margin-0 padding-bottom-1" style="margin:0px;"> Reel Breakdown </p>
                        <img class="toggle-reel-img" style="" src="img/icons/gallery.svg">
                        @include('component.reelBreakdown') 
                    </div> --}}
                </div>

    <div class="skew">
        <div style="" class="flex-row-start margin-top-2 ">
          <div class="col-12 mt-0">
            <ul class="border-black background-grey h-100">
              <li> <h5 class="border-left-orange"> EXPERIENCE </h5> </li>
                <li class="border-bottom-black flex-row">      
                    <div>      
                        Jam Filled - Lighting/ Compositing
                    </div>
                    <div>
                    	Jan. 2018​ to May 2018​
                    </div>
                </li>
                <li  class="border-bottom-black flex-row"> 
                    <div>
                    Intelligent Creatures - Compositor
                    </div>
                    <div>
                        June 2015​ to Dec. 2017​
                    </div>
                </li>
                <li  class="border-bottom-black flex-row"> 
                    <div>
                    University of Toronto - 3D Generalist (Freelance)
                    </div>
                    <div>
                    	May 2015​ to Dec. 2017​
                    </div>
                </li>
                <li  class="border-bottom-black flex-row"> 
                    <div>
                    Awesometown Entertainment - Compositor
                    </div>
                    <div>
                    May 2015​ to June 2015​
                    </div>
                </li>
                <li  class="border-bottom-black flex-row"> 
                    <div>
                    Encore VFX	- Compositor
                    </div>
                    <div>
                    Feb. 2015​ to Apr. 2015​
                    </div>
                </li>
                <li  class="border-bottom-black flex-row">
                    <div>
                    Technicolor	- Compositor
                    </div>
                    <div>
                    Nov. 2014​
                    </div> 
                </li>
                <li  class="border-bottom-black flex-row"> 
                    <div>
                    Company X Studios - Compositor / CG Generalist
                    </div>
                    <div>
                    	June 2014​ to Nov. 2014​
                    </div>
                </li>
                <li class="flex-row"> 
                    <div>
                    Industrial Brothers	- CG Modeller / CG Generalist
                    </div>
                    <div>
                    	May 2012​ to Aug. 2012​
                    </div>
                </li>
            </ul>
          </div>
        </div>

        {{-- <div style="" class="flex-row-start">
          <div class="col-12 mt-0">
            <ul class="border-black">
              <li> <h5 class="border-left-orange"> PROJECTS </h5> </li>
              <li> 
                Net2Net IT - Developer Jan 2020 to current
              </li>
              <li> 
                BeauteSchool Inc. - Front End Developer and UX Designer Jan. 2019​ to Jan 2020
              </li>
              <li> 
                FIIN INC. - Front-End Developer and Web Designer Sept. 2018​ to Jan. 2019​
              </li>
            </ul>
          </div>
        </div> --}}

        <div style="" class="flex-row-start mb-6">
          <div class="col-3 mt-0">
            <ul class="border-black background-grey h-100">
              <li> <h5 class="border-left-orange"> DESIGN KNOWLEDGE</h5> </li>
                <li  class="border-bottom-black"> 
                Design
                </li>
                <li  class="border-bottom-black"> 
                Storyboarding
                </li>
                <li  class="border-bottom-black"> 
                Concept
                </li>
                <li  class="border-bottom-black"> 
                Compositing
                </li>
                <li  class="border-bottom-black"> 
                Lighting
                </li>
                <li  class="border-bottom-black"> 
                Rigging
                </li>
                <li  class="border-bottom-black"> 
                Tracking
                </li>
                <li  class="border-bottom-black"> 
                CG Modelling
                </li>
                <li  class="border-bottom-black"> 
                UI UX Design
                </li>
            </ul>
          </div> 

          <div class="col-9 mt-0 ">
            <div class="flex-row-start border-black background-grey">
              <ul class="col-6 padding-0 h-100">
                <li> <h5 class="border-left-orange"> VFX, ANIMATION, AND DESIGN SOFTWARE </h5> </li>
              <li  class="border-bottom-black"> Unity</li>
              <li  class="border-bottom-black">  Autodesk Maya</li>
              <li  class="border-bottom-black"> NukeX</li>
              <li  class="border-bottom-black">  Zbrush </li>
              <li  class="border-bottom-black">  PFTrack </li>
              <li  class="border-bottom-black">  Fusion </li>
              <li  class="border-bottom-black">  Mocha </li>
              <li  class="border-bottom-black">  Adobe After Effects </li>
              <li  class="border-bottom-black">   Adobe Photoshop </li>
              




              </ul>
              <ul class="col-6 padding-0 flex-end h-100">
                <li  class="border-bottom-black">   Adobe Illustrator </li>
                <li  class="border-bottom-black">   V-ray </li>
                <li  class="border-bottom-black">  Arnold </li>
                <li  class="border-bottom-black">  Premier </li>
                <li  class="border-bottom-black">  Mari </li>
                <li  class="border-bottom-black">   Mental Ray </li>
                <li  class="border-bottom-black">  Houdini </li>
                <li  class="border-bottom-black">   Adobe Premiere </li>
                <li  class="border-bottom-black">  Boujou </li>
                <li  class="border-bottom-black">  Krita </li>
                <li  class="border-bottom-black">  Adobe XD </li>
                <li  class="border-bottom-black">  Invision App </li>
              </ul>
            </div>
          </div>

        </div>
        
      </div>

    <a href="#bottom"> 
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

        <div class="row display-reel reveal">
            <div style="position: relative;">
                <button onclick="toggleReel()" class="toggle-reel-button position-reel-button youtube-button-settings"> 
                    {{-- <p class="reveal"> Close </p>  --}}
                    {{-- <img class="toggle-reel-img" src="img/icons/return_icon.svg">  --}}
                    X
                </button>
                <iframe style="position: relative; max-width:100%; max-height:100%;" class="video" width="100%" height="100%" src="https://www.youtube.com/embed/6OKm4HMqyHY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- <div class="tooltip">Hover over me
            <span class="tooltiptext">Tooltip text</span>
        </div>
        <div class="tooltip">Hover over me
            <span class="tooltiptext">Tooltip text</span>
        </div> -->
    </div>

    <div id="bottom" > </div>
    @include('component.slider')



    <!-- design Section -->

    @include('component.design')

</div>






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
        breakdownHide();
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
