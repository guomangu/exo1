// window.onload = function(){

    
//     var httpRequest;
//     document.getElementById('ajaxButton').addEventListener('click', makerequest());
    
    
//     function makerequest(){
//         httpRequest = new XMLHttpRequest();

//         httpRequest.onreadystatechange = alertContents;
//         httpRequest.open('GET', 'accueil.html');
//         httpRequest.send();
//     }

//     function alertContents(){

//         if(httpRequest.readyState === XMLHttpRequest.DONE){

//             if(httpRequest.status === 200){
//                 alert(httpRequest.reponseText);
//             }
//         }
//     }
// }


document.getElementById('ajaxButton').addEventListener('click', makeRequest);

function makeRequest(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = alert('ok'); 
    req.open('GET', 'accueil.html');
    req.send();
}

function alertContent

