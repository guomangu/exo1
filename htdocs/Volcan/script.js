    
// function loadJS(){

//     var req = new XMLHttpRequest();
//     var doc = "";

//     var min = document.getElementById('first').value;
//     var max = document.getElementById('last').value;

    
//     var message = '?min=' + min + '&max=' + max;
    
    
//     req.open("GET", "add.php" + message, true);
    
//     req.send();
    
//     req.onreadystatechange = function(){
        
//         if(req.readyState == 4 && req.status == 200){

//             doc = JSON.parse(req.responseText);
//             var add = document.getElementById('images');

//             add.innerHTML = "";

//             add.innerHTML += "<div class='carousel-item active'><figure><legend>"+ doc[0].legend +"</legend><img class='d-block w-100' " +
//             doc[0].source + " alt='" + doc[0].alt + "' class = 'img-responsive'></figure>";   

//             for(var i = 1; i < doc.length; i++){
//                 add.innerHTML += "<div class='carousel-item'><figure><legend>"+ doc[i].legend +"</legend><img class='d-block w-100' " +
//                 doc[i].source + " alt='" + doc[i].alt + "' class = 'img-responsive'></figure>";
//             }
            
//         }
//     }
    
// }

// var monObj = document.getElementById('btn');
// monObj.addEventListener('click', function() { loadJS() } );

function loadJS(){

    var req = new XMLHttpRequest();
    var doc = "";

    var min = document.getElementById('first').value;
    var max = document.getElementById('last').value;

    
    var message = 'min=' + min + '&max=' + max;
    
    
    req.open("POST", "add.php", true);
    
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    req.send(message);
    
    req.onreadystatechange = function(){
        
        if(req.readyState == 4 && req.status == 200){

            doc = JSON.parse(req.response);
            var add = document.getElementById('images');

            add.innerHTML = "";

            add.innerHTML += "<div class='carousel-item active'><figure><legend>"+ doc[0].legend +"</legend><img class='d-block w-100' " +
            doc[0].source + " alt='" + doc[0].alt + "' class = 'img-responsive'></figure>";   

            for(var i = 1; i < doc.length; i++){
                add.innerHTML += "<div class='carousel-item'><figure><legend>"+ doc[i].legend +"</legend><img class='d-block w-100' " +
                doc[i].source + " alt='" + doc[i].alt + "' class = 'img-responsive'></figure>";
            }
            
        }
    }
    
}

var monObj = document.getElementById('btn');
monObj.addEventListener('click', function() { loadJS() } );