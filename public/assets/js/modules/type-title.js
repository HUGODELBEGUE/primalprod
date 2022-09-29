const titleEffect = document.getElementById('effect_title');

/* Effet du titre */
let tw1 = new Typewriter(titleEffect, {
    wrapperClassName: 'wrapper',
    cursorClassName: 'cursor',
    delay: 75,
    loop: true,
});
tw1
    .pauseFor(750)
    .typeString('<span class="wrapper" style="color: #202124">freelance</span>')
    .pauseFor(1500)
    .deleteChars(9)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #4b47a1">WordPress</span>')
    .pauseFor(1500)
    .deleteChars(9)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #f2c744">JavaScript</span>')
    .pauseFor(1500)
    .deleteChars(10)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #8791be">php</span>')
    .pauseFor(1500)
    .deleteChars(3)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #f16524">HTML</span>')
    .pauseFor(300)
    .typeString('&nbsp;&&nbsp;' + '<span class="wrapper" style="color: #01a3e0">CSS</span>')
    .pauseFor(1500)
    .deleteChars(10)
    .pauseFor(1000)
    .start();