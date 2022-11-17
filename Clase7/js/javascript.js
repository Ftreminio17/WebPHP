//IF
let div_respuesta = document.getElementById("respuesta");

function evaluar(){
    const edad_usuario = document.getElementById("edad").value;
    
    if(edad_usuario >= 18)
    {
       div_respuesta.innerHTML = "<h3>Es mayor de edad, puede ingresar</h3>"
    }
    else
    {
        div_respuesta.innerHTML = "<h3>No es mayor de edad, no puede ingresar</h3>"
    }
}

function comprobar(){
    let req1 = document.form1.req1.checked;
    let req2 = document.form1.req2.checked;

    if(req1 & !req2){
        div_respuesta.innerHTML = "<h3>Falta el requisito #2</h3>"
    }

    if(!req1 & req2){
        div_respuesta.innerHTML = "<h3>Falta el requisito #1</h3>"
    }

    if(req1 & req2){
        div_respuesta.innerHTML = "<h3>Si puede matricular</h3>"
    }

}

function evaluarSwitch(){
    let edad = document.getElementById("edadtxt").value;
    switch(edad)
    {
        case "15":
            div_respuesta.innerHTML = "Es menor de edad, no puede ingresar";
            break;
        case "18":
            div_respuesta.innerHTML = "Es mayor de edad, puede ingresar";
            break;
        case "40":
            div_respuesta.innerHTML = "Es un poco mayorsito para esto!";
            break;
        default:
            div_respuesta.innerHTML = "Para probar este ejemplo digite 15, 18 0 40";
            break;
    }
}

function evaluarMes(){
    let mes = document.getElementById("mes").value;
    //febrero tiene 28/29 dias

    //abril, julio, setiembre, noviembre tiene 30 dias

    //el resto de los meses 31 dias.
    switch(mes)
    {
        case "2":
            div_respuesta.innerHTML = " Febrero tiene 28/29 dias";
            break;
        case "4":
            div_respuesta.innerHTML = "Abril tiene 30 dias";
            break;
        case "7":
            div_respuesta.innerHTML = "Julio tiene 30 dias";
            break;
        case "9":
            div_respuesta.innerHTML = "Setiembre tiene 30 dias";
            break;
        case "11":
            div_respuesta.innerHTML = "Noviembre tiene 30 dias";
            break;
        default:
            div_respuesta.innerHTML = "Ese mes tiene 31 dias";
            break;
    }
}

//Ciclo For
let divCiclos = document.getElementById("ciclos");
divCiclos.innerHTML = "<h3>Numeros con el ciclo for</h3>";
for(con = 1; cont < 5; cont++)
{
    divCiclos.innerHTML += cont + "(for)<br>"
}

function tabla(){
    let numero = document.getElementById("num").value;

    div_respuesta.innerHTML = "<h3>tabla del "+ numero + "</h3>";

    for(let i = 0; i <= 12; i++){
        div_respuesta.innerHTML += numero + " x " + i + " = " + (numero * i) + "<br>";
    }
}

//Ciclo While
divCiclos.innerHTML += "<br><h3>Numeros con el ciclo while</h3>"

let j = 1;

while(j <= 5)
{
    divCiclos.innerHTML += j + "(While)<br>";
    j++;
}

//Arreglos
let divArreglos = document.getElementById("arreglos");

let listaAvengers = ["Ironman","Thor","Hulk","Ant-Man"];

divArreglos.innerHTML = listaAvengers;"<br>"

divArreglos.innerHTML = listaAvengers[3] + "<br>";

divArreglos.innerHTML += listaAvengers.length;

listaAvengers.push("La viuda negra") + "<br>";
