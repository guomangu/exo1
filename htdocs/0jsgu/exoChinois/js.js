var a = document.getElementById("form");

var z = document.getElementById("yo");

// a.addEventListener(
//     "keyup",
//     function () { charge(); }
// );





function charge() {

    var jour = document.getElementById("uno1").value;
var mois = document.getElementById("uno2").value;
var annee = document.getElementById("uno3").value;
    // alert("lol");
    var tabSignes = ['rat', 'boeuf', 'tigre', 'lapin', 'dragon', 'serpent', 'cheval', 'chevre', 'singe', 'coq', 'chien', 'cochon'];


    var tabglobal = Array();
    k = 0;
    for (let j = 1900; j < 2101; j++) {
        if (k == 12) {
            k = 0;
        }



        let tabElement = [];
        tabElement[0] = j;
        tabElement[1] = tabSignes[k];
        tabglobal.push(tabElement);
        k = k + 1;
        // console.log(j);





    }
    console.log(tabglobal);

    // let mois = [];
    // let annees = [];
    // let signes = [];


    if ((annee % 4 == 0) && ((annee % 100 != 0) || (annee % 400 == 0))) {
        bissextile = "vrai";
       // alert(bissextile);
     //  console.log(annee);
        if (mois > 2 && jour > 5) {
            for (let i = 0; i < tabglobal.length; i++) {
                if (tabglobal[i][0] == annee) {
                    // alert(tabglobal[i][1]);

                    document.getElementById("yo").innerHTML = "<h1>" + tabglobal[i][1] + "</h1>";
                }

            }
        }
        else {
           // console.log(annee);
            for (let i = 0; i < tabglobal.length; i++) {
                if (tabglobal[i][0] == annee) {
                    // alert(tabglobal[i - 1][1]);
                    document.getElementById("yo").innerHTML = "<h1>" + tabglobal[i - 1][1] + "</h1>";
                }

            }


        }

    }
    else
    {
        bissextile = "faux";
        // alert(bissextile);
      // console.log(annee);
        if (mois > 2 && jour > 4) {
            for (let i = 0; i < tabglobal.length; i++) {
                if (tabglobal[i][0] == annee) {
                    // console.log(tabglobal[i][1]);
                    document.getElementById("yo").innerHTML = "<h1>" + tabglobal[i][1] + "</h1>";
                }

            }
        }
        else {
            // console.log(annee);
            for (let i = 0; i < tabglobal.length; i++) {
                
                if (tabglobal[i][0] == annee) {
                    // console.log(tabglobal[i - 1][1]);
                    document.getElementById("yo").innerHTML = "";
                    document.getElementById("yo").innerHTML = "<h1>" + tabglobal[i - 1][1] + "</h1>";
                }

            }


        }


    }

}
var recherche=document.getElementById("form");
recherche.addEventListener(
    "keyup",
    function () { charge(); }
);