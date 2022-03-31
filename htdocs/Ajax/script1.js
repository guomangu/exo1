function ajax(){
    var xhr = new XMLHttpRequest();
    var url = "transform.php";
    xhr.open('GET', url);

    var parametres = "name=";
    xmlHttp.onreadystatechange = function(){
        document.querySelector('#result').innerHTML = xhr.responseText;
    }

}