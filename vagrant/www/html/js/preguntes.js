//Los elementos necesarios de preguntas.html
var elements = {
    //botones de siguiente y anterior
    bAnterior: document.getElementById("btAnteriorP"),
    bSiguiente: document.getElementById("btSiguienteP"),

    //elemento para de la numeracion de página
    vActual: document.getElementById("vActual"),
    vMax: document.getElementById("vMax"),
    
    //Para los tipo de preguntas
    divPreguntas: document.getElementById("preguntes"),
    enunciat: document.getElementById("enunciat"),
    pSimple: document.getElementById("pSimple"),
    pLlarga: document.getElementById("pLlarga"),
    pSeleccio: document.getElementById("pSeleccio"),
    pSeleccioNoSimple: document.getElementById("pSeleccioNoSimple"),
    pSeleccionMultiple: document.getElementById("pSeleccionMultiple"),
}

var elementoBoton = [
        //botones de pregunta de seleccion
        document.getElementById("psr1"),
        document.getElementById("psr2"),
        document.getElementById("psr3"),
        document.getElementById("psr4")
];

var vPagina = {
    vActual: 1,
    vMax: 25
}

//Botones para cambiar de preguntas
function siguiente(){
    vPagina.vActual++;
    
    if(vPagina.vActual > vPagina.vMax){
        vPagina.vActual = 1
    }
    
    elements.vActual.innerHTML = vPagina.vActual;
}
function anterior(){
    vPagina.vActual--;
    
    if(vPagina.vActual <= 0){
        vPagina.vActual = vPagina.vMax;
    }
    
    elements.vActual.innerHTML = vPagina.vActual;
}

//botones
//  anterior siguiente
elements.bAnterior.addEventListener("click", anterior);
elements.bSiguiente.addEventListener("click", siguiente);

elementoBoton[0].addEventListener("click", function(){selectPSSimple(0);});
elementoBoton[1].addEventListener("click", function(){selectPSSimple(1);});
elementoBoton[2].addEventListener("click", function(){selectPSSimple(2);});
elementoBoton[3].addEventListener("click", function(){selectPSSimple(3);});

//  
function selectPSSimple(num){
    defaultButtonColor();
    for (i = 0; i < 4; i++){
        if(i == num){
            elementoBoton[i].setAttribute("value", true);
            elementoBoton[i].style.background = "#72bb53";
        }else{
            elementoBoton[i].setAttribute("value", false);
        }
    }
    for (i = 0; i < elementoBoton.length; i++){
        console.log(i + ": " + elementoBoton[i].getAttribute("value"));
    }
}
//Pone los colores de los botones que estan por defecto
function defaultButtonColor(){
    elementoBoton[0].style.background= "grey";
    elementoBoton[1].style.background= "grey";
    elementoBoton[2].style.background= "grey";
    elementoBoton[3].style.background= "grey";
}

//funcion de mostrar y esconder para cada tipo de preguntas
//Para Preguntas simples
function mPSimple(){
    elements.pSimple.style.display = "block";
    elements.pLlarga.style.display = "none";
    elements.pSeleccio.style.display = "none";
    elements.pSeleccioNoSimple.style.display = "none";
    elements.pSeleccionMultiple.style.display = "none";
}
//Para preguntas largas
function mPLlarga(){
    elements.pSimple.style.display = "none";
    elements.pLlarga.style.display = "block";
    elements.pSeleccio.style.display = "none";
    elements.pSeleccioNoSimple.style.display = "none";
    elements.pSeleccionMultiple.style.display = "none";
}
//Para preguntas de seleccion de solo 2 respuestas
function mPSSimple(){
    elements.pSimple.style.display = "none";
    elements.pLlarga.style.display = "none";
    elements.pSeleccio.style.display = "block";
    elements.pSeleccioNoSimple.style.display = "none";
    elements.pSeleccionMultiple.style.display = "none";
}
//Para preguntas de seleccion
function mPSNoSimple(){
    elements.pSimple.style.display = "none";
    elements.pLlarga.style.display = "none";
    elements.pSeleccio.style.display = "block";
    elements.pSeleccioNoSimple.style.display = "block";
    elements.pSeleccionMultiple.style.display = "none";
}
//Para preguntas de Seleccion multiple
function mPSMultiple(){
    elements.pSimple.style.display = "none";
    elements.pLlarga.style.display = "none";
    elements.pSeleccio.style.display = "none";
    elements.pSeleccioNoSimple.style.display = "none";
    elements.pSeleccionMultiple.style.display = "block";
}

//TEST
//Para marcar las casillas
//document.getElementById("psm1").checked = true;