
function charge(){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "test.json", true);
    xhr.responseType = "json";
    xhr.send();
    xhr.onload = function() {
        if (xhr.status != 200) {
            //...On affiche le statut et le message correspondant
            alert("Erreur " + xhr.status + " : " + xhr.statusText);
            //Si le statut HTTP est 200, on affiche le nombre d'octets téléchargés et la réponse
        } else {
            let tabdata = xhr.response;
            console.log(tabdata);
            //generer_diapo(tabdata);
            generer_diapo2(tabdata);
        }
    };
}
//
//charge();




function generer_diapo(mesdata) {
    for (let i = -1; i < mesdata.length; i++) {
        let obj = mesdata[i];
        if (i == 0) {
            //console.log(obj.src);
            let mondiv = document.createElement("div");
            mondiv.setAttribute("class", "carousel-item active");
            let monimg = document.createElement("img");
            monimg.setAttribute("src", obj.src);
            monimg.setAttribute("alt", obj.alt);
            mondiv.appendChild(monimg);
            let legend = document.createElement("div");
            legend.setAttribute("class", "carousel-caption d-none d-md-block");
            mondiv.appendChild(legend);
            let titrelegende = document.createElement("h5");
            titrelegende.innerText = obj.title;
            legend.appendChild(titrelegende);
            document.querySelector(".carousel-inner").appendChild(mondiv);
        } else {
            //console.log(obj.src);
            let mondiv = document.createElement("div");
            mondiv.setAttribute("class", "carousel-item ");
            let monimg = document.createElement("img");
            monimg.setAttribute("src", obj.src);
            monimg.setAttribute("alt", obj.alt);
            mondiv.appendChild(monimg);
            let legend = document.createElement("div");
            legend.setAttribute("class", "carousel-caption d-none d-md-block");
            mondiv.appendChild(legend);
            let titrelegende = document.createElement("h5");
            titrelegende.innerText = obj.title;
            legend.appendChild(titrelegende);
            document.querySelector(".carousel-inner").appendChild(mondiv);
        }
    }
}

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


//en travaux 3eme v
var sworl=1;
function generer_diapo3(mesdata,nb) {
    var obj = mesdata[sworl];
    if (nb==+1) {
        console.log(sworl+" $1");
        sworl=sworl+1;
        console.log(sworl+" $2");
        if (sworl==24) {
            sworl=1;
        }
        obj = mesdata[sworl];
        console.log("uno");
    }else if (nb==-1) {
        
        sworl=sworl-1
        if (sworl==0) {
            sworl=23;
        }
        obj = mesdata[sworl];
    }
    console.log(sworl);
    
    document.getElementById( "carousel-inner" ).innerHTML=
    '<div class="carousel-item active"><img src="'+obj.src+'" class="d-block w-100" alt="'+obj.alt+'"><div class="carousel-caption d-none d-md-block"><h5>'+obj.title+'</h5></div></div>';
}

var valid=document.getElementById("next");
valid.addEventListener(
    "click",
    function () {
        charge2(+1);
    }
);

var valid=document.getElementById("prev");
valid.addEventListener(
    "click",
    function () {
        charge2(-1);
    }
);


// =====



$=false;
var valid=document.getElementById("form");
valid.addEventListener(
    "click",
    function () {
        if ($==false) {
            // charge();
            charge2(+1);
        $=true;
        }
    }
);


function charge2(nb){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "test.json", true);
    xhr.responseType = "json";
    xhr.send();
    xhr.onload = function() {
        if (xhr.status != 200) {
            //...On affiche le statut et le message correspondant
            alert("Erreur " + xhr.status + " : " + xhr.statusText);
            //Si le statut HTTP est 200, on affiche le nombre d'octets téléchargés et la réponse
        } else {
            let tabdata = xhr.response;
            //console.log(tabdata);

            //generer_diapo2(tabdata);
            generer_diapo3(tabdata,nb);
        }
    };
}
