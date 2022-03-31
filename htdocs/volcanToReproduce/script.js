var demo = document.querySelector('#demo');
var xhr = new XMLHttpRequest();


xhr.onreadystatechange = function(){

    if(this.readyState == 4 && this.status == 200){

    }
}

xhr.open("GET", "texte.txt", true);
xhr.send();