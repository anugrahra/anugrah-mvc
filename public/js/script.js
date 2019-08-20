var app = document.getElementById('typewriter');

var typewriter = new Typewriter(app, {
    loop: true,
    cursor: '_',
    delay: 300
});

typewriter
    .typeString('anugrah')
    .pauseFor(250000)
    .start();