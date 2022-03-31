console.log(document.cookie);
lol=document.cookie.split(";");

lol2=lol[0].split("=");
lol3=lol[1].split("=");

document.getElementById("final").innerHTML="Mister "+lol2[1]+"<br>";
document.getElementById("final").innerHTML+="a qui il reste "+lol3[1]+" jours a vivre.";

function recupCookie(_cleCoo){
    let chaineCookie=document.cookie;
    let tabCookies=chaineCookie.split(";");
    //alert("lol");
    let result="non trouvé"
    for (let i = 0; i < tabCookies.length; i++) {
        let paireCleValeur=tabCookies[i];
        let tabChaine=paireCleValeur.split("=");
        if (tabChaine[0]==_cleCoo) {
            result=tabChaine[1];
        }
    }
    return result;
}
//alert(recupCookie("pseudo"));