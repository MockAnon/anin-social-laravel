@extends('layouts.master')

@section('title')
 Jaron D Evans Portfolio
@endsection
@section('description')
 My name is Jaron D Evans I am a Designer and CG Generalist.
@endsection
@section('keywords')
 Design, Generalist, Jaron D Evans, Art, Compositor, Experience
@endsection

@section('content')
<div style="position: relative; white-space: nowrap; width: 100vw; height: 100vh;">

    <div class="main-div-homepage-left" style="">
        <div id="homepage-black-block">
        </div>

        <div id="homepage-video-block">
            <img id="homepage-bg-image" style="height: 100%; width: auto; position: absolute;" src="./img/background_05.svg" alt="background navigation">
        </div>


        <header style="display: flex;  width: 100%; flex-direction: column; padding: 3rem;">
            <div style="display: flex; flex-direction: row;">
                <div style="position: relative;">
                    <span style="font-size: .8rem; color: white; position: absolute; left: 0.8rem; top: 0;"> 00 </span>
                    <a class="zoom main-links-homepage-02" href="/generalist" onmouseover="hoverTitle(0)"> <h1> Design </h1> </a>
                </div>

                <div style="position: relative;">
                    <span style="font-size: .8rem; color: white; position: absolute; left: 0.8rem; top: 0;"> 01 </span> 
                    <a class="zoom main-links-homepage-02" href="/development" onmouseover="hoverTitle(1)"> <h1> Development </h1> </a>
                </div>
            </div>
       
        
            <hr>

            <div id="home-white-div" style=""> </div>

            <p id="selectedTitle"> Web Development </p>

            <div style="position: absolute; bottom: 10%; font-size: 1.2rem; display: flex; color:white;"> <span id="selectedNo"> 00 </span> </div>
        </div>

    </div>

</div>

@include('component.contact')

@include('pages.development')
@include('pages.generalist')


<script type="application/javascript">

    let selectHomeType = [
        {
            title: "Developer, Compositor and CG Generalist",
            no: "#00"
        },
        {
            title: "Development",
            no: "#01"
        }
    ];

    function hoverTitle(val) {
        $("#selectedTitle").css({"width":"0", "opacity": "0"});
        $("#selectedNo").css({"height":"0", "opacity": "0"});
        $("#selectedTitle").text(selectHomeType[val].title);
        $("#selectedNo").text(selectHomeType[val].no);
        $("#selectedTitle").stop().animate({width: "100%", opacity: 1}, 600, function() { });
        $("#selectedNo").stop().animate({height: "100%", opacity: 1}, 600, function() { });
        
        if(val == 0) {
            console.log(0);
            $(".container").removeClass("homepage-bg-1");
            // if($(".container").hasClass("homepage-bg-1")) {
            //     $(".container").removeClass("homepage-bg-0");
            // }
        } else {
            console.log(1);

            $(".container").addClass("homepage-bg-1");
        }

    }

    console.log(selectHomeType[0].title, selectHomeType[0].no);

</script>
@endsection

