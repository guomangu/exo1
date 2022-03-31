var a = document.getElementById( "form" );

a.addEventListener(
    "keyup",
    function () { calcul();}
);


function calcul(){
    var uno1 = document.getElementById( "uno1" );
    var uno2 = document.getElementById( "uno2" );
    var uno3 = document.getElementById( "uno3" );
    var dos1 = document.getElementById( "dos1" );
    var dos2 = document.getElementById( "dos2" );
    var dos3 = document.getElementById( "dos3" );
    var tres = document.getElementById( "tres" );


    // alert(uno1.value);
    uno3.value = uno1.value * uno2.value;
    dos3.value = dos1.value * dos2.value;
    tres.value = parseInt(uno3.value) + parseInt(dos3.value) + " $$$";
}