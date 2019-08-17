var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true,
    cursor: '_',
    delay: 300
});

typewriter
    .typeString('anugrah r')
    .pauseFor(250000)
    .start();