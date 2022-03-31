function generer_diapo2(mesdata) {
    for (let i = 0; i < mesdata.length; i++) {
        let obj = mesdata[i];
        if (i == 0) {
            document.getElementById( "carousel-inner" ).innerHTML=
            '<div class="carousel-item active"><img src="'+obj.src+'" class="d-block w-100" alt="'+obj.alt+'"><div class="carousel-caption d-none d-md-block"><h5>'+obj.title+'</h5></div></div>';
        }else{
            document.getElementById( "carousel-inner" ).innerHTML+=
            '<div class="carousel-item"><img src="'+obj.src+'" class="d-block w-100" alt="'+obj.alt+'"><div class="carousel-caption d-none d-md-block"><h5>'+obj.title+'</h5></div></div>';
        }
    }
}



$=false;
var valid=document.getElementById("form");
valid.addEventListener(
    "click",
    function () {
        if ($==false) {
            // charge();
            charge();
        $=true;
        }
    }
);

function charge(){
    min=document.getElementById("min").value;
    max=document.getElementById("max").value;

    fetch("php.php?min="+min+"&max="+max,{method:"GET"})
    .then(response => response.json())
    .then(response => generer_diapo2(response))
    .catch(error => alert("Erreur : " + error));
}