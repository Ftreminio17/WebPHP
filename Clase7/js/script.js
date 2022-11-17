document.write("javaScript Externo");

function saludar() {
    let nombre1 = document.getElementById("nombre").value;
    let edad1 = document.getElementById("edad").value;

    let edadNueva = Number(edad1);
    edad1 = Number(edad1);

    console.log(nombre1);
    console.log(edad1);

    let divRespuesta = document.getElementById("resp");
    divRespuesta.innerHTML = "<h2> Hola " + nombre1 + " y tu edad es " + edad1 + " Años" + " En 5 años tendras " + (edadNueva + 5) + " Años " + "</h2><br>";

    divRespuesta.innerHTML = "<h2> Hola " + nombre1 + " y tu edad es " + edad1 + " Años" + " En 5 años tendras " + (edad1 + 5) + " Años " + "</h2><br>";

}

document.write("Fin");