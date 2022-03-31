

function generer_diapo2(mesdata) {
    for (let i = 0; i < mesdata.length; i++) {
        let obj = mesdata[i];
        if (i == 0) {
            document.getElementById( "carousel-inner" ).innerHTML=
            '<div class="carousel-item active"><img src="'+obj.src+'" class="d-block w-100" alt="'+obj.alt+'"><div class="carousel-caption d-none d-md-block"><h5>'+obj.titre+'</h5></div></div>';
        }else{
            document.getElementById( "carousel-inner" ).innerHTML+=
            '<div class="carousel-item"><img src="'+obj.src+'" class="d-block w-100" alt="'+obj.alt+'"><div class="carousel-caption d-none d-md-block"><h5>'+obj.titre+'</h5></div></div>';
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
            charge2();
        $=true;
        }
    }
);


function charge2(){
    min=document.getElementById("min").value;
    max=document.getElementById("max").value;


    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php.php?min="+min+"&max="+max, true);
    xhr.responseType = "json";
    xhr.send();
    xhr.onload = function() {
        if (xhr.status != 200) {
            alert("Erreur " + xhr.status + " : " + xhr.statusText);
        } else {
            let tabdata = xhr.response;
            //console.log(tabdata);

            generer_diapo2(tabdata);
        }
    };
}

