ajax();

const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];



productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

function ajax(){
    let http = new XMLHttpRequest();
    http.open("POST", "php/productos.php");
    http.send(null);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            let data = JSON.parse(this.responseText);
            cargarProductos(data);
        }
    }
}

function cargarProductos(productos) {
    productos.forEach(producto => {
        const img = producto.img;
        const nombre = producto.nombre;
        const precio = producto.precio;
    
        const imgProducto = document.createElement("img");
        imgProducto.src = "img/productos/" + img;
        imgProducto.alt = "Producto";
    
        const nombreProducto = document.createElement("h3");
        nombreProducto.textContent = nombre;
    
        const precioProducto = document.createElement("p");
        precioProducto.innerHTML = `₡ ${precio}`;
    
        const productoDiv = document.createElement("div");
        productoDiv.classList.add("producto");
        productoDiv.onclick = seleccionarProducto;
        productoDiv.appendChild(imgProducto);
        productoDiv.appendChild(nombreProducto);
        productoDiv.appendChild(precioProducto);
    
        document.querySelector("#productos").appendChild(productoDiv);
    });
}

function seleccionarProducto(e) {

    let producto;

    if (e.target.tagName === "DIV") {
        producto = e.target;
    } else {
        producto = e.target.parentElement;
    }

    if (producto.classList.contains("seleccionado")) {
        producto.classList.remove('seleccionado')
    }else{
        producto.classList.add('seleccionado')
    }

}

function eliminar() {
    const productosSeleccionados = document.querySelectorAll(".seleccionado")

    productosSeleccionados.forEach(productoSelec => {
        productoSelec.remove();
        // productoSelec.style.borderColor = "red";
    });
}

document.querySelector("#eliminar").onclick = eliminar;