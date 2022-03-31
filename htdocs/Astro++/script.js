function loadInscription() {

    document.querySelector('#validBTN').disabled = true;
    let myReset = document.querySelector('#resetBTN');
    myReset.addEventListener('click', function() { disableSubmit() });

    if(getCookieByName('Kpseudo') != null){

        document.querySelector('#prenomBox').style.display = 'none';
        document.querySelector('#nomBox').style.display = 'none';
        document.querySelector('#villeBox').style.display = 'none';
        document.querySelector('#jour').style.display = 'none';
        document.querySelector('#mois').style.display = 'none';
        document.querySelector('#annee').style.display = 'none';
        document.querySelector('#pseudoBox').style.display = 'none';
        document.querySelector('#mdpBox').style.display = 'none';
        document.querySelector('#telBox').style.display = 'none';
        document.querySelector('#generer').style.display = 'none';
        document.querySelector('#messageBox').style.display = 'none';
        document.querySelector('#resetBTN').style.display = 'none';
        document.querySelector('#validBTN').style.display = 'none';
        document.querySelector('#field').style.display = 'none';
        document.querySelector('#h2Inscription').innerHTML = 'Déja connecté(e)';
        document.querySelector('#h2Inscription').style = 'font-size:30px; top:10vh';
        document.querySelector('#h2Inscription').style.display = 'block';
    }
    let monbouton = document.querySelector('#generer');
    monbouton.addEventListener("click",  pseudo);
    let monForm = document.querySelector('#regForm');
    monForm.addEventListener('submit', function () { okList(); });

    compte();
    loadMainDisconnect();
    loadMainRegister();

    afficherJour();
    afficherMois();
    afficherAnnee();
}

function loadIndex() {

    compte();
    loadMainDisconnect();
    loadMainRegister();
}

function loadMonCompte() {

    update();
    loadMainDisconnect();
    loadMainRegister();
}

function loadMainDisconnect() {

    let myDisconnect = document.querySelector('#mainDisconnect');
    myDisconnect.addEventListener('click', function () { disconnect1() });
}

function loadMainRegister() {

    let myRegister = document.querySelector('#mainInscription');
    myRegister.addEventListener('click', function () { insc() });
}

function disableSubmit(){
    let mySubmit = document.querySelector('#validBTN');
    mySubmit.disabled = true;
}

function afficherJour(){

    let uneOption = document.createElement('Option');
    uneOption.setAttribute('value', '');
    uneOption.text = 'Jour';

    document.querySelector('#jour').options[0] = uneOption;


    for(let i = 1; i < 32; i++){

        var monOption = new Option();
        monOption.text = i;
        monOption.value = i;
        document.querySelector('#jour').options[i] = monOption;
    }
}

function afficherMois(){

    var months = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];

    let uneOption = document.createElement('Option');
    uneOption.setAttribute('value', '');
    uneOption.text = 'Mois';

    document.querySelector('#mois').options[0] = uneOption;

    for(let i = 0; i < 12; i++){

        var monOption = new Option();
        monOption.text = months[i];
        monOption.value = i+1;
        document.querySelector('#mois').options[i+1] = monOption;
    }
}

function afficherAnnee(){

    let uneOption = document.createElement('Option');
    uneOption.setAttribute('value', '');
    uneOption.text = 'Année';

    document.querySelector('#annee').options[0] = uneOption;

    var j = 1;

    for(let i = 2010; i >= 1910; i--){

        var monOption = new Option();
        monOption.text = i;
        monOption.value = i;
        document.querySelector('#annee').options[j] = monOption;
        j++;
    }
}

function okList() {

    alert('Inscription réussie !');
    var nom = document.getElementById('nomBox').value;
    var prenom = document.getElementById('prenomBox').value;
    var date = document.getElementById('annee').value + '-' + document.getElementById('mois').value + '-' + document.getElementById('jour').value;
    var pseudo = document.getElementById('pseudoBox').value;
    var ville = document.getElementById('villeBox').value;
    var tel = document.getElementById('telBox').value;
    var mdp = document.getElementById('mdpBox').value;

    newCookie('Knom', nom);
    newCookie('Kprenom', prenom);
    newCookie('Kdate', date);
    newCookie('Kpseudo', pseudo);
    newCookie('Kville', ville);
    newCookie('Ktel', tel);
    newCookie('Kmdp', mdp);
}

function newCookie(key, valeur){

    let dateJour = new Date();

    var duree = dateJour.getTime();

    duree += 24 * 60 * 60 * 1000;

    dateJour.setTime(duree);

    document.cookie = key + '=' + valeur + '; expires=' + dateJour.toGMTString();
}

function getCookieByName(name){

    var cookiesArray = document.cookie.split('; ');

    for(var i = 0; i < cookiesArray.length; i++){

        var tabKey = cookiesArray[i].split('=');
        if(tabKey[0] == name){

            return tabKey[1];
        }
    }
}

function formOk(){

    var verif = false;

    if (document.querySelector('#nomBox').value != "" && document.querySelector('#prenomBox').value != "" && document.getElementById('annee').value != ""
    && document.getElementById('mois').value != "" && document.getElementById('jour').value != "") {
        verif = true;
    }

    return verif;

}

function pseudo() {

    if (formOk()) {

        document.querySelector('#validBTN').disabled = false;

        var nom = document.getElementById('nomBox').value;
        var prenom = document.getElementById('prenomBox').value;

        var month =document.getElementById('mois').value;

        var months = ["Verseau", "Poisson", "Belier", "Taureau", "Gémeaux", "Cancer", "Lion", "Vierge", "Balance", "Scorpion", "Capricorne", "Verseau"];

        var chaine = nom + prenom;
        chaine = chaine.toUpperCase();
        var numChaine = 0;

        for (var i = 0; i < chaine.length; i++) {

            numChaine += (chaine.charCodeAt(i) - 64);
        }

        var signe = months[month-1];
        document.getElementById('pseudoBox').value = signe + numChaine;
    }
}

function update() {

    compteMycompte();

    if(getCookieByName('Kpseudo') != null){

        document.getElementById('firstname').innerHTML = getCookieByName('Kprenom');
        document.getElementById('surname').innerHTML = getCookieByName('Knom');
        document.getElementById('ville').innerHTML = getCookieByName('Kville');
        
        document.getElementById('pseudo').innerHTML = getCookieByName('Kpseudo');
        document.getElementById('titleCompte').innerHTML = ('Bienvenue sur votre compte ' + getCookieByName('Kprenom') + ' !');
        document.getElementById('telp').innerHTML = getCookieByName('Ktel');
        

        let dateNaissance = getCookieByName('Kdate').split('-');

        document.getElementById('datenaissance').innerHTML = dateNaissance[2] + '/' + dateNaissance[1] + '/' + dateNaissance[0];

        nbJoursAnniv();
    }

    else{

        document.getElementById('firstname').innerHTML = 'Non connecté(e)';
        document.getElementById('surname').innerHTML = 'Non connecté(e)';
        document.getElementById('ville').innerHTML = 'Non connecté(e)';

        document.querySelector('#formulaire').style.display = 'none';
        document.querySelector('#titleCompte').style = 'font-size:30px; top:10vh; position:relative';
        
        document.getElementById('pseudo').innerHTML = 'Non connecté(e)';
        document.getElementById('titleCompte').innerHTML = 'Non connecté(e)';
        document.getElementById('telp').innerHTML = 'Non connecté(e)';
        document.getElementById('anniversaire').innerHTML = 'Non connecté(e)';
        document.getElementById('datenaissance').innerHTML = 'Non connecté(e)';
    }
}

function nbJoursAnniv() {

    var datedujour = new Date();

    var dateCookie = getCookieByName('Kdate');

    var dateString = dateCookie.substr(5, 9);

    var dateFinale = datedujour.getFullYear() + '-' + dateString;

    var dateAnniversaire = new Date(dateFinale);

    var diff = (datedujour - dateAnniversaire);

    var diff_jour = (diff / (86400000));

    diff_jour = Math.floor(diff_jour);

    if (diff_jour > 0) {

        diff_jour = -diff_jour + 366;
    }
    else{

        diff_jour = - diff_jour;
    }

    document.getElementById('anniversaire').innerHTML = diff_jour + ' jours restants';
}

function killCookie(name){

    let dateJour = new Date();

    var duree = dateJour.getTime();

    duree -= 24 * 60 * 60 * 1000;

    dateJour.setTime(duree);

    document.cookie = name + '=' + "" + '; expires=' + dateJour.toGMTString();
}

function disconnect() {

    killCookie('Kprenom');
    killCookie('Knom');
    killCookie('Kpseudo');
    killCookie('Kmdp');
    killCookie('Ktel');
    killCookie('Kville');
    killCookie('Kdate');
    alert('Déconnexion réussie');
    update();
}

function disconnect1(){

    killCookie('Kprenom');
    killCookie('Knom');
    killCookie('Kpseudo');
    killCookie('Kmdp');
    killCookie('Ktel');
    killCookie('Kville');
    killCookie('Kdate');
    alert('Déconnexion réussie');
    document.location.href = 'Accueil.php';
}

function compte() {

    let pseudo = getCookieByName('Kpseudo');

    if (pseudo == null) {

        login.innerHTML = 'Non connecté(e)';
        mainDisconnect.style.display = 'none';
        login.style.animation = 'blink 2s infinite';
        mainInscription.style.display = 'inline-block';
    }
    else {

        login.innerHTML = pseudo;
        mainDisconnect.style.display = 'inline-block';
        mainInscription.style.display = 'none';
    }
}

function compteMycompte() {

    compte();
    var pseudo = getCookieByName('Kpseudo');
    let disconnect = document.getElementById('disconnect');
    if (pseudo == null) {
        
        disconnect.style.display = 'none';
    }
    else {

        disconnect.style.display = 'block';
    }
}

function insc() {

    document.location.href = 'InscriptionList.php';
}