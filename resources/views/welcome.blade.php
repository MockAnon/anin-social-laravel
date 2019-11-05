@extends('layouts.master')

@section('title')
 Welcome!
@endsection

@section('content')
    <canvas></canvas>
    <div class="flex-row">
        <p class="flex-1"> Woah </p>
        <p class="flex-1"> Woah2 </p>
        <p class="flex-1"> woah 3 </p>
    </div> 
    <div style="height: 100vh;">
        <a href="/development"> Development </a>
        <a href="/generalist"> Design </a>
    </div>
    <div style="height: 100vh;">
    </div>
@endsection


<script type="application/javascript">


    // particle.min.js hosted on GitHub
// Scroll down for initialisation code

!function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

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


//legacy
var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var ctx = canvas.getContext('2d');

var mousePos = { x: 0, y: 0 };

window.onmousemove = function(e) {
    // zoom radio
    let zoomIn = 3;
    //mouse position
    mousePos.x = e.clientX;
    mousePos.y = e.clientY;
    //
    halfWidth = canvas.width / 2;
    halfHeight = canvas.height / 2;
    //percentage
    let xPercentage = e.clientX / canvas.width + 1;
    let fromCenter;
    let finalPercentage;
    let xPoint;
    let xCut;
    let yFromCenter;
    let Ypercentage;

    // let centerMinus = 40;

    if (mousePos.x < halfWidth) {
        // fromCenter = mousePos.x / 2;
        fromCenter = (mousePos.x - halfWidth) / zoomIn;
        xPoint = (fromCenter / halfWidth) * -1;
        console.log('xPoint', xPoint);
        xCut = xPoint / 2;
        finalPercentage = xCut + 1;
    } else {
        console.log('else');
        fromCenter = (mousePos.x - halfWidth) / zoomIn;
        xPoint = fromCenter / halfWidth;
        console.log('xPoint', xPoint);
        xCut = xPoint / 2;
        finalPercentage = xCut + 1;
    }

    // if (mousePos.y < halfHeight) {
    //     yFromCenter = mousePos.y / 2;
    //     Ypercentage = ((yFromCenter / halfHeight) * -1) / 2 + 2;
    // } else {
    //     yFromCenter = (mousePos.y - halfHeight) / 2;
    //     Ypercentage = yFromCenter / halfHeight / 2 + 1;
    // }

    console.log(finalPercentage);

    // if (finalPercentage < Ypercentage) {
    //     finalPercentage = (finalPercentage + Ypercentage) / 2;
    // }
    // if (finalPercentage > 1.25) {
    //     finalPercentage = 1.25;
    // }

    // console.log('Percentage', xPercentage);
    // console.log('Percentage-Y', yPercentage);

    // this.theta = Math.random() * Math.PI * 2;
    // this.radius = Math.random() * (canvas.width > canvas.height ? canvas.width : canvas.height) * 0.33 + 40;
    // this.maxRadius = Math.random() * (canvas.width > canvas.height ? canvas.width : canvas.height) * 0.45;

    // console.log(mousePos.x, mousePos.y);
    // let w = distanceFromCenter();
    // let h = distanceFromCenter();
    // this.x = canvas.width / 2 + Math.cos(this.theta) * this.radius * (distanceFromCenter() / this.maxRadius);
    // this.y = canvas.height / 2 + Math.sin(this.theta) * this.radius * (distanceFromCenter() / this.maxRadius);

    // ctx.restore();
    // console.log('halfW', halfWidth, 'halfH', halfHeight);
    // console.log('X', mousePos.x, 'Width', canvas.width, 'Y', mousePos.y, 'height', canvas.height);
    // ctx.transform(x / 2, y / 2);
    // ctx.translate(canvas.width / 2, canvas.height / 2);

    ctx.setTransform(finalPercentage, 0, 0, finalPercentage, 0, 0);

    // ctx.scale(1.02, 1.02);
};

function distanceFromCenter() {
    // console.log('distance');
    return Math.sqrt(Math.pow(mousePos.x - canvas.width / 2, 2) + Math.pow(mousePos.y - canvas.height / 2, 2));
}

// function updatePro() {
// Particle.prototype.update = function() {
//     console.log('updates');
//     this.theta += (this.speed / 750) * this.direction;
//     this.x = canvas.width / 2 + Math.cos(this.theta) * this.radius * (distanceFromCenter() / this.maxRadius);
//     this.y = canvas.height / 2 + Math.sin(this.theta) * this.radius * (distanceFromCenter() / this.maxRadius);
//     this.radius += this.radialChange;
//     if (Math.abs(this.radius) > this.maxRadius) {
//         this.radialChange *= -1;
//     }
// }

// function renderPro() {
// Particle.prototype.render = function() {
//     console.log('render');
//     ctx.save();
//     ctx.beginPath();
//     ctx.fillStyle = 'white';
//     ctx.strokeStyle = '#444';
//     ctx.globalAlpha = this.opacity;
//     ctx.arc(this.x, this.y, this.size / 2, 0, 2 * Math.PI, false);
//     ctx.fill();
//     ctx.stroke();
//     ctx.restore();
// }

var ball = {
        x: 0,
        y: 0,
        vx: 0,
        vy: 0,
        r: 0,
        alpha: 1,
        phase: 0
    },
    ball_color = {
        r: 207,
        g: 255,
        b: 4
    },
    R = 0.8,
    balls = [],
    alpha_f = 0.03,
    alpha_phase = 0,
    // Line
    link_line_width = 0.1,
    dis_limit = 100,
    add_mouse_point = true,
    mouse_in = false,
    mouse_ball = {
        x: 0,
        y: 0,
        vx: 0,
        vy: 0,
        r: 0,
        type: 'mouse'
    };

// Random speed
function getRandomSpeed(pos) {
    var min = -1,
        max = 0.5;
    switch (pos) {
        case 'top':
            return [randomNumFrom(min, max), randomNumFrom(0.1, max)];
            break;
        case 'right':
            return [randomNumFrom(min, -0.1), randomNumFrom(min, max)];
            break;
        case 'bottom':
            return [randomNumFrom(min, max), randomNumFrom(min, -0.1)];
            break;
        case 'left':
            return [randomNumFrom(0.1, max), randomNumFrom(min, max)];
            break;
        default:
            return;
            break;
    }
}
function randomArrayItem(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
}
function randomNumFrom(min, max) {
    return Math.random() * (max - min) + min;
}
console.log(randomNumFrom(0, 10));
// Random Ball
function getRandomBall() {
    var pos = randomArrayItem(['top', 'right', 'bottom', 'left']);
    switch (pos) {
        case 'top':
            return {
                x: randomSidePos(can_w),
                y: -R,
                vx: getRandomSpeed('top')[0],
                vy: getRandomSpeed('top')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 20)
            };
            break;
        case 'right':
            return {
                x: can_w + R,
                y: randomSidePos(can_h),
                vx: getRandomSpeed('right')[0],
                vy: getRandomSpeed('right')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 20)
            };
            break;
        case 'bottom':
            return {
                x: randomSidePos(can_w),
                y: can_h + R,
                vx: getRandomSpeed('bottom')[0],
                vy: getRandomSpeed('bottom')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 20)
            };
            break;
        case 'left':
            return {
                x: -R,
                y: randomSidePos(can_h),
                vx: getRandomSpeed('left')[0],
                vy: getRandomSpeed('left')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 20)
            };
            break;
    }
}
function randomSidePos(length) {
    return Math.ceil(Math.random() * length);
}

// Draw Ball
function renderBalls() {
    Array.prototype.forEach.call(balls, function(b) {
        if (!b.hasOwnProperty('type')) {
            ctx.fillStyle = 'rgba(' + ball_color.r + ',' + ball_color.g + ',' + ball_color.b + ',' + b.alpha + ')';
            ctx.beginPath();
            ctx.arc(b.x, b.y, R, 0, Math.PI * 2, true);
            ctx.closePath();
            ctx.fill();
        }
    });
}

// Update balls
function updateBalls() {
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b) {
        b.x += b.vx;
        b.y += b.vy;

        if (b.x > -50 && b.x < can_w + 50 && b.y > -50 && b.y < can_h + 50) {
            new_balls.push(b);
        }

        // alpha change
        b.phase += alpha_f;
        b.alpha = Math.abs(Math.cos(b.phase));
        // console.log(b.alpha);
    });

    balls = new_balls.slice(0);
}

// loop alpha
function loopAlphaInf() {}

// Draw lines
function renderLines() {
    var fraction, alpha;
    for (var i = 0; i < balls.length; i++) {
        for (var j = i + 1; j < balls.length; j++) {
            fraction = getDisOf(balls[i], balls[j]) / dis_limit;

            if (fraction < 1) {
                alpha = (1 - fraction).toString();

                ctx.strokeStyle = 'rgba(150,150,150,' + alpha + ')';
                ctx.lineWidth = link_line_width;

                ctx.beginPath();
                ctx.moveTo(balls[i].x, balls[i].y);
                ctx.lineTo(balls[j].x, balls[j].y);
                ctx.stroke();
                ctx.closePath();
            }
        }
    }
}

// calculate distance between two points
function getDisOf(b1, b2) {
    var delta_x = Math.abs(b1.x - b2.x),
        delta_y = Math.abs(b1.y - b2.y);

    return Math.sqrt(delta_x * delta_x + delta_y * delta_y);
}

// add balls if there a little balls
function addBallIfy() {
    if (balls.length < 160) {
        balls.push(getRandomBall());
    }
}

// Render
function render() {
    ctx.clearRect(0, 0, can_w, can_h);

    renderBalls();

    renderLines();

    updateBalls();

    addBallIfy();

    window.requestAnimationFrame(render);
}

// Init Balls
function initBalls(num) {
    for (var i = 1; i <= num; i++) {
        balls.push({
            x: randomSidePos(can_w),
            y: randomSidePos(can_h),
            vx: getRandomSpeed('top')[0],
            vy: getRandomSpeed('top')[1],
            r: R,
            alpha: 1,
            phase: randomNumFrom(0, 10)
        });
    }
}
// Init Canvas
function initCanvas() {
    canvas.setAttribute('width', window.innerWidth);
    canvas.setAttribute('height', window.innerHeight);

    can_w = parseInt(canvas.getAttribute('width'));
    can_h = parseInt(canvas.getAttribute('height'));
}
window.addEventListener('resize', function(e) {
    console.log('Window Resize...');
    initCanvas();
});

function goMovie() {
    initCanvas();
    initBalls(30);
    window.requestAnimationFrame(render);
}
goMovie();

// Mouse effect
canvas.addEventListener('mouseenter', function() {
    console.log('mouseenter');
    mouse_in = true;
    balls.push(mouse_ball);
});
canvas.addEventListener('mouseleave', function() {
    console.log('mouseleave');
    mouse_in = false;
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b) {
        if (!b.hasOwnProperty('type')) {
            new_balls.push(b);
        }
    });
    balls = new_balls.slice(0);
});
canvas.addEventListener('mousemove', function(e) {
    var e = e || window.event;
    mouse_ball.x = e.pageX;
    mouse_ball.y = e.pageY;
});

//awesome

// var mousePos = { x: 0, y: 0 };
// window.onmousemove = function(e) {
//     mousePos.x = e.clientX;
//     mousePos.y = e.clientY;
// };
// function distanceFromCenter() {
//     return Math.sqrt(Math.pow(mousePos.x - canvas.width / 2, 2) + Math.pow(mousePos.y - canvas.height / 2, 2));
// }

// function Particle() {
//     this.theta = Math.random() * Math.PI * 2;
//     this.radius = Math.random() * (canvas.width > canvas.height ? canvas.width : canvas.height) * 0.33 + 40;
//     this.maxRadius = Math.random() * (canvas.width > canvas.height ? canvas.width : canvas.height) * 0.45;
//     this.radialChange = Math.random() * 0.1 * (Math.random() > 0.5) ? 1 : -1;
//     this.opacity = Math.random();
//     this.size = Math.round(Math.random() * 6) + 4;
//     this.speed = Math.round(Math.random() * 4) + 1;
//     this.direction = Math.random() > 0.5 ? 1 : -1;
//     this.x = 0;
//     this.y = 0;
//     this.connected = Math.random() < 0.75;
// }
// Particle.prototype.update = function() {
//     this.theta += (this.speed / 750) * this.direction;
//     this.x = canvas.width / 2 + Math.cos(this.theta) * this.radius * (distanceFromCenter() / this.maxRadius);
//     this.y = canvas.height / 2 + Math.sin(this.theta) * this.radius * (distanceFromCenter() / this.maxRadius);
//     this.radius += this.radialChange;
//     if (Math.abs(this.radius) > this.maxRadius) {
//         this.radialChange *= -1;
//     }
// };
// Particle.prototype.render = function() {
//     ctx.save();
//     ctx.beginPath();
//     ctx.fillStyle = 'white';
//     ctx.strokeStyle = '#444';
//     ctx.globalAlpha = this.opacity;
//     ctx.arc(this.x, this.y, this.size / 2, 0, 2 * Math.PI, false);
//     ctx.fill();
//     ctx.stroke();
//     ctx.restore();
// };

// var particles = [];
// for (var i = 0; i < Math.random() * 50 + 100; i++) {
//     particles.push(new Particle());
// }
// requestAnimationFrame(
//     (demo = function() {
//         ctx.save();
//         ctx.fillStyle = '#242424';
//         ctx.fillRect(0, 0, canvas.width, canvas.height);
//         ctx.restore();

//         particles.forEach(function(particle, i) {
//             ctx.lineTo(particle.x, particle.y);
//             particle.update();
//             particle.render();
//             if (particle.connected) {
//                 var p2 = particles[i + 1];
//                 if (p2) {
//                     ctx.save();
//                     ctx.beginPath();
//                     ctx.strokeStyle = '#fff';
//                     ctx.globalAlpha = particle.opacity * 0.33;
//                     ctx.moveTo(particle.x, particle.y);
//                     ctx.lineTo(p2.x, p2.y);
//                     ctx.stroke();
//                     ctx.restore();
//                 }
//             }
//         });

//         requestAnimationFrame(demo);
//     })
// );



</script>