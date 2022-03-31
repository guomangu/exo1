
var valid=document.getElementById("dep");
valid.addEventListener(
    "change",
    function () {
        charge();
    }
);
var valid=document.getElementById("nbre");
valid.addEventListener(
    "change",
    function () {
        charge();
    }
);

// function loc(response){
//     var powa3 = document.getElementById("sup");
//           console.log(response);
//     powa3.innerHTML=response;
// }

// function charge(){
//     min=document.getElementById("dep").value;

//     fetch("php.php?min="+min,{method:"GET"})
//     .then(response => response)
//     .then(response => loc(response))
//     .catch(error => alert("Erreur : " + error));
// }

function charge(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.length == 0) {
                return;
            }

            var powa3 = document.getElementById("sup");
            powa3.innerHTML = this.responseText;
            // console.log(this.responseText);
            // var powa4 = document.getElementById ("suq2");
            // powa4.innerHTML = this.responseText;
        }
    };
    // alert(inputRecherche);
    min=document.getElementById("dep").value;
    swo=document.getElementById("nbre").value;
    xhttp.open("GET", "php.php?min="+min+"&swo="+swo, true);
    // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(null);
}