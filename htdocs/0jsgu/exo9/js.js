var a = document.getElementById( "form" );
var dos1 = document.getElementById( "dos1" );
var dos2 = document.getElementById( "dos2" );
var dos3 = document.getElementById( "dos3" );
var z = document.getElementById( "form" );

a.addEventListener(
    "keyup",
    function () { changeColor();}
);

dos1.addEventListener(
    "click",
    function () { changeColor1();}
);
dos2.addEventListener(
    "click",
    function () { changeColor2();}
);
dos3.addEventListener(
    "click",
    function () { changeColor3();}
);



function changeColor1(){
    z.style.backgroundColor="#ff00006b";
}
function changeColor2(){
    z.style.backgroundColor="#0080006b";
}
function changeColor3(){
    z.style.backgroundColor="#0000ff6b";
}

function changeColor(){
    var uno1 = document.getElementById( "uno1" );
    var uno2 = document.getElementById( "uno2" );
    var uno3 = document.getElementById( "uno3" );

    z.style.backgroundColor="#"+uno1.value+""+uno2.value+""+uno3.value+"6b";
}