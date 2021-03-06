@extends('layouts.master')

@section('title')
 Welcome!
@endsection
@section('description')
 My name is Jaron D Evans I am a Design and overall Generalist.
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
            <img id="homepage-bg-image" style="height: 100%; width: auto; position: absolute; right: 0px; left: auto;" src="./img/background_05.svg" alt="background navigation">
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

            <div style="position: absolute; bottom: 10%; font-size: 1.2rem; display: flex; color:white;"> <span id="selectedNo"> 00 </span> <div style="height:1px; width: 3rem; max-width: 50%; margin: auto 20px; background: white;"> </div> 01 </div>
        </div>

    </div>

</div>



{{-- <div style="position: relative; white-space: nowrap; width: 100vw;">
    <div id="img-home-left" >
        <div class="main-div-homepage">
            <a class="zoom main-links-homepage" href="/generalist"> Design </a>

        </div>
        <img class="img-home-size"  id="" src="img/generalistBG.jpg">
    </div>
    <div id="img-home-right" >
        
        
        <div class="main-div-homepage">
            <a class="zoom main-links-homepage" href="/development"> Development </a>
        </div>

        <img class="img-home-size"  id="" src="img/developmentBG.jpg">
    </div>

</div> --}}

    <!-- <canvas></canvas> -->
    <!-- <div class="flex-row">
        <p class="flex-1"> Woah </p>
        <p class="flex-1"> Woah2 </p>
        <p class="flex-1"> woah 3 </p>
    </div>  -->
    <!-- <div style="height: 100vh;">
    </div> -->
    <!-- <div style="height: 100vh;">
    </div> -->


<!-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script> -->

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
            $("#homepage-bg-image").stop().animate({"left": "0px", "right": "auto"});
            $("#homepage-bg-image").css("right", "auto");
            $("#home-white-div").stop();
            $("#home-white-div").css("width", "2.5%");
            $("#home-white-div").css("margin-left", "30%");
        } else {
            $("#homepage-bg-image").stop().animate({"left": "auto", "right": "0px"});
            $("#homepage-bg-image").css("left", "auto");
            $("#home-white-div").stop();
            $("#home-white-div").css("width", "5%");
            $("#home-white-div").css("margin-left", "2.5%");
        }

    }

    console.log(selectHomeType[0].title, selectHomeType[0].no);

    


    // particle.min.js hosted on GitHub
// Scroll down for initialisation code

// !function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation
// var canvasDiv = document.getElementById('particle-canvas');
//     var options = {
//     particleColor: '#888',
//     background: 'https://raw.githubusercontent.com/JulianLaval/canvas-particle-network/master/img/demo-bg.jpg',
//     interactive: true,
//     speed: 'medium',
//     density: 'high'
//     };
//     var particleCanvas = new ParticleNetwork(canvasDiv, options);





// right.mouseover(function() {
//     console.log("over");  
// right.animate({
//     width: "70%"
//   }, 5000, function() {
//   });
// });




</script>
@endsection

