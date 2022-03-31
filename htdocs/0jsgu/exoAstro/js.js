function complete(){
    var jour = document.getElementById( "jour" );
    var mois = document.getElementById( "mois" );
    var annee = document.getElementById( "annee" );

    var obj = new Date;
    for (let index = 1966; index < obj.getFullYear(); index++) {
        annee.innerHTML+="<option>"+index+"</option>";
        
    }
    for (let index = 1; index < 13; index++) {
        mois.innerHTML+="<option>"+index+"</option>";
        
    }
    for (let index = 1; index < 32; index++) {
        jour.innerHTML+="<option>"+index+"</option>";
        
    }
}
complete();

// =====================

function valNum(){
    var nom = document.getElementById( "nom" ).value;
    var prenom = document.getElementById( "prenom" ).value;

    str=nom+prenom;
    str=str.toUpperCase();
    // alert(str);

    // alert(str.charCodeAt(0)-64);
    tabNum=[];
    val=0;
    for (let index = 0; index < str.length; index++) {
        val+=str.charCodeAt(index)-64;
        //console.log(val);
        //val+=tabNum[index];

    }
    // console.log(tabNum);
    // console.log(val);

    document.getElementById( "pseudo" ).value+=val;
}

// =====================

function calculerSigne(){
    tabSigne=["Verseau","Poisson","Belier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire","Capricorne"];
    var mois = document.getElementById( "mois" ).value;
    var h1 = document.getElementById( "h1" );

    h1.innerHTML=tabSigne[mois-1];
    // console.log(tabSigne[mois-1]);

    document.getElementById( "pseudo" ).value=tabSigne[mois-1];
}

// ======================

function formOK(){
    var jour = document.getElementById( "jour" ).value;
    var mois = document.getElementById( "mois" ).value;
    var annee = document.getElementById( "annee" ).value;
    var nom = document.getElementById( "nom" ).value;
    var prenom = document.getElementById( "prenom" ).value;

    error="";
    gg=true+" : <br>tout est bien rempli bogoss.";
    if (jour=="jour") {
        error+="le jour n'est pas rempli, <br>";
        gg=false+" : <br>";
    }if(mois=="mois"){
        error+="le mois n'est pas rempli, <br>";
        gg=false+" : <br>";
    }if(annee=="annee"){
        error+="l'annee n'est pas rempli, <br>";
        gg=false+" : <br>";
    }if(nom==""){
        error+="le nom n'est pas rempli, <br>";
        gg=false+" : <br>";
    }if(prenom==""){
        error+="le prenom n'est pas rempli, ";
        gg=false+" : <br>";
    }

    document.getElementById( "p" ).innerHTML=gg+error;

    return gg;
}

// ======================

function nbJoursAnniv(){
    madate=new Date(); 
    dateAnniv=new Date(madate.getFullYear(),(document.getElementById( "mois" ).value-1),document.getElementById( "jour" ).value);
    console.log();

    if (dateAnniv<madate) {
        dateAnniv=new Date(madate.getFullYear()+1,(document.getElementById( "mois" ).value-1),document.getElementById( "jour" ).value);
    }

    m=(Math.floor((madate-dateAnniv) / (1000*60*60*24)))*(-1);

    document.getElementById( "anniv" ).innerHTML="<br>Votre anniversaire est dans "+m.toString()+" jours.";
    return m.toString();
}

// ======================

function final(){
    if (formOK()=="true : <br>tout est bien rempli bogoss.") {
        //alert("true");
        document.getElementById( "final" ).innerHTML="<a href='final.html'><input type='button' value='ultimate' id='ultimate'></a>";

        madate=new Date(); 
        datecookie=new Date(madate.getFullYear(),madate.getMonth(),madate.getDate()+1);

        document.cookie="pseudo="+document.getElementById("pseudo").value+"; expires="+datecookie.toGMTString()+";SameSite=Strict;Secure;";
        document.cookie="j-Anniv="+nbJoursAnniv()+"; expires="+datecookie.toGMTString()+";SameSite=Strict;Secure;";
    }
}

// ======================

var valid=document.getElementById("valid");
valid.addEventListener(
    "click",
    function () {
        document.getElementById( "pseudo" ).value="";

        if (document.getElementById( "mois" ).value!="mois") {
            calculerSigne(); 
        }

        if (document.getElementById( "nom" ).value != "" && document.getElementById( "prenom").value != "") {
            valNum();
        }

        formOK();

        nbJoursAnniv();

        final();
    }
);

// =====================

// var a = document.getElementById( "form" );
// var dos1 = document.getElementById( "dos1" );
// var dos2 = document.getElementById( "dos2" );
// var dos3 = document.getElementById( "dos3" );
// var z = document.getElementById( "form" );

// a.addEventListener(
//     "keyup",
//     function () { charge();}
// );