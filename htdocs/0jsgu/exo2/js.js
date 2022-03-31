var bu_date = document.getElementById( "bu_date" );
var bu_heure = document.getElementById( "bu_heure" );

bu_date.addEventListener(
    "click",
    function () { affichedate();affichedatelol();}
);
bu_heure.addEventListener(
    "click",
    function () { afficheheure();afficheheurelol();}
);

function affichedate(){
    var input_date = document.getElementById("uno");
    
    var obj = new Date;

    let jour= (obj.getDate()<10)?"0"+obj.getDate():obj.getDate();
    let mois= (obj.getMonth()<10)?"0"+obj.getMonth():obj.getMonth();
    input_date.value = "date : "+jour+" / "+(mois+1)+" / "+obj.getFullYear();
}
function afficheheure(){
    var input_heure = document.getElementById("dos");
    var obj = new Date;
    input_heure.value = "heure : "+obj.getHours()+"h - "+obj.getMinutes()+"min - "+obj.getSeconds()+"sec";
}

// ----

function affichedatelol(){
    // document.getElementsByClassName("pepito").textContent(txtinsidehtml);
    var obj = new Date;
    document.getElementById("pepito1").innerHTML="<h1>"+obj.getDate()+"</h1>";
    document.getElementById("pepito2").innerHTML="<h1>"+obj.getDate()+"</h1>";
    document.getElementById("pepito3").innerHTML="<h1>"+obj.getDate()+"</h1>";
    document.getElementById("pepito4").innerHTML="<h1>"+obj.getDate()+"</h1>";
}
function afficheheurelol(){
    // document.getElementsByClassName("pepito").textContent(txtinsidehtml);
    var obj = new Date;
    document.getElementById("pepito1").innerHTML="<h1>"+obj.getHours()+"</h1>";
    document.getElementById("pepito2").innerHTML="<h1>"+obj.getHours()+"</h1>";
    document.getElementById("pepito3").innerHTML="<h1>"+obj.getHours()+"</h1>";
    document.getElementById("pepito4").innerHTML="<h1>"+obj.getHours()+"</h1>";
}