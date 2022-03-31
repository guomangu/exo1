body=document.getElementById("body");
body.setAttribute("style","background-image:url('img/agent.webp');background-size:cover;");

function display1(){
    body.style.backgroundImage = 'url("img/agent.webp")';
    setTimeout(display2(),667);
}

display1();