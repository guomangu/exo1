// function generer_diapo(mesdata) {
//     console.log(mesdata);
//     console.log(mesdata[0]);
//     console.log(mesdata[0]["armor"]);

//     mesdata.forEach(element => {

//         //element=element.toString();
//         document.getElementById( "form" ).innerHTML
//         +="<tr><td>"+element["armor"]+"</td>"+"<td>"+element["damage"]+"</td>"+"<td>"+element["defeat"]+"</td>"+"<td>"+element["draw"]+"</td>"+"<td>"+element["id"]+"</td>"+"<td>"+element["level"]+"</td>"+"<td>"+element["mitigation"]+"</td>"+"<td>"+element["name"]+"</td>"+"<td>"+element["played"]+"</td>"+"<td>"+element["power"]+"</td>"+"<td>"+element["victory"]+"</td></tr>"
        
//     });
// }
function afficherMax(response){
    console.log(response);
    max=response[0].attack;
    i=0;
    for (let index = 0; index < response.length; index++) {
        if (max<response[index].attack) {
            i=index;
            max=response[index].attack;
        }
    }
    
    document.getElementById( "susulol11" ).innerHTML=response[i].id;
    document.getElementById( "susulol12" ).innerHTML=response[i].name;
    document.getElementById( "susulol13" ).innerHTML="Played : "+response[i].played+"  |  Victories : "+response[i].victory;
    div=document.getElementById( "sulol2" );
    div.classList.add("img");
    document.getElementById( "susulol31" ).innerHTML="Power<br>"+response[i].power;
    document.getElementById( "susulol32" ).innerHTML="Attack<br>"+response[i].attack;
    document.getElementById( "susulol33" ).innerHTML="Defense<br>"+response[i].armor;
}
function afficherMaxArmor(response){
    max=response[0].armor;
    i=0;
    for (let index = 0; index < response.length; index++) {
        if (max<response[index].armor) {
            i=index;
            max=response[index].armor;
        }
    }
    
    document.getElementById( "susulol211" ).innerHTML=response[i].id;
    document.getElementById( "susulol212" ).innerHTML=response[i].name;
    document.getElementById( "susulol213" ).innerHTML="Played : "+response[i].played+"  |  Victories : "+response[i].victory;
    div=document.getElementById( "sulol22" );
    div.classList.add("img");
    document.getElementById( "susulol231" ).innerHTML="Power<br>"+response[i].power;
    document.getElementById( "susulol232" ).innerHTML="Attack<br>"+response[i].attack;
    document.getElementById( "susulol233" ).innerHTML="Defense<br>"+response[i].armor;
}
function afficherMaxParty(response){
    max=response[0].played;
    i=0;
    for (let index = 0; index < response.length; index++) {
        if (max<response[index].played) {
            i=index;
            max=response[index].played;
        }
    }
    
    document.getElementById( "susulol311" ).innerHTML=response[i].id;
    document.getElementById( "susulol312" ).innerHTML=response[i].name;
    document.getElementById( "susulol313" ).innerHTML="Played : "+response[i].played+"  |  Victories : "+response[i].victory;
    div=document.getElementById( "sulol32" );
    div.classList.add("img");
    document.getElementById( "susulol331" ).innerHTML="Power<br>"+response[i].power;
    document.getElementById( "susulol332" ).innerHTML="Attack<br>"+response[i].attack;
    document.getElementById( "susulol333" ).innerHTML="Defense<br>"+response[i].armor;
}
function afficherMaxVictory(response){
    max=response[0].victory;
    i=0;
    for (let index = 0; index < response.length; index++) {
        if (max<response[index].victory) {
            i=index;
            max=response[index].victory;
        }
    }
    
    document.getElementById( "susulol411" ).innerHTML=response[i].id;
    document.getElementById( "susulol412" ).innerHTML=response[i].name;
    document.getElementById( "susulol413" ).innerHTML="Played : "+response[i].played+"  |  Victories : "+response[i].victory;
    div=document.getElementById( "sulol42" );
    div.classList.add("img");
    document.getElementById( "susulol431" ).innerHTML="Power<br>"+response[i].power;
    document.getElementById( "susulol432" ).innerHTML="Attack<br>"+response[i].attack;
    document.getElementById( "susulol433" ).innerHTML="Defense<br>"+response[i].armor;
}




function addCell(tr, text) {
    var td = tr.insertCell();
    td.textContent = text;
    return td;
}
function titleCell(row, text) {
    var cell = document.createElement("th");
    cell.textContent = text;
    row.appendChild(cell);
}
function createCells(row, obj) {
    for (var key in obj) {
        addCell(row, obj[key]);
    }
}
function fillTable(result) {
    var table = document.getElementById("Table");
    // create header 
    var thead = table.createTHead();
    var headerRow = thead.insertRow();
    for (var key in result[0]) {
        titleCell(headerRow, key);
    }
    var Body = table.createTBody();
    for (let i = 0; i < result.length; i++) {
        var BodyRow = Body.insertRow();
        createCells(BodyRow, result[i]);
    }



    afficherMax(result);
    afficherMaxArmor(result);
    afficherMaxVictory(result)
    afficherMaxParty(result)
}





function charge(){
    fetch("jeux_de_roles.json",{method:"GET"})
    .then(response => response.json())
    .then(response => fillTable(response))

    .catch(error => alert("Erreur : " + error));
}
$=false;
var valid=document.getElementById("body");
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

