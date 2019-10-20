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

    if (mousePos.y < halfHeight) {
        yFromCenter = mousePos.y / 2;
        Ypercentage = ((yFromCenter / halfHeight) * -1) / 2 + 2;
    } else {
        yFromCenter = (mousePos.y - halfHeight) / 2;
        Ypercentage = yFromCenter / halfHeight / 2 + 1;
    }

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
