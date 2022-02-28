function hangman(lives) {
    var canvas = document.getElementById("canvas");
    var canvas = canvas.getContext("2d");
    gallows(canvas);
    if(lives<=5){head(canvas)};
    if(lives<=4){body(canvas)};
    if(lives<=3){leftArm(canvas)};
    if(lives<=2){rightArm(canvas)};
    if(lives<=1){leftLeg(canvas)};
    if(lives<=0){rightLeg(canvas)};
    stroke(canvas);
}

function gallows(canvas) {
    canvas.beginPath();
    canvas.moveTo(100, 250);
    canvas.lineTo(100, 50); //vertical post
    canvas.lineTo(250, 50); //top horizontal post
    canvas.lineTo(250, 75); //rope
    canvas.moveTo(100, 100); //move to diagonal brace
    canvas.lineTo(150, 50); //diagonal brace
    canvas.moveTo(50, 250);
    canvas.lineTo(300, 250); //horizontal base
}

function head(canvas) {
    canvas.moveTo(275, 100);
    canvas.arc(250, 100, 25, 0, 2 * Math.PI);//(x, y, radius, startAngle, endAngle)
}

function body(canvas) {
    canvas.moveTo(250, 125);
    canvas.lineTo(250, 175);
}

function leftArm(canvas) {
    canvas.moveTo(250, 125);
    canvas.lineTo(220, 150);
}

function rightArm(canvas) {
    canvas.moveTo(250, 125);
    canvas.lineTo(280, 150);
}

function leftLeg(canvas) {
    canvas.moveTo(250, 175);
    canvas.lineTo(220, 200);
}

function rightLeg(canvas) {
    canvas.moveTo(250, 175);
    canvas.lineTo(280, 200);
}

function stroke(canvas) {
    canvas.strokeStyle = "purple";
    canvas.lineWidth = 4;
    canvas.stroke();
}