window.onload = function(){
    reloadAllSelect();
    reloadAllButtonEliminar();
    reloadAllCheckBox();
}

document.getElementById("btNovaPregunta").addEventListener("click", preguntaNueva);

//crea los eventos para todos los botones de eliminar
function reloadAllButtonEliminar(){
    var button = document.getElementsByName("eliminar");
    for(i = 0; i < button.length; i++){
        button[i].onclick = function(e){
            var table = e.target.parentNode.parentNode.parentNode.parentNode;
            var div = document.getElementById("tabla");
            div.removeChild(table.previousSibling);
            div.removeChild(table);
            orden_pregunta();
        };
    }
}

//crea los eventos para todos los selects, para cuando cambian
function reloadAllSelect(){
    var select = document.getElementsByTagName('select');
    console.log(select);
    for(i = 0; i < select.length; i++){
        select[i].onchange = function(e) {
          var select = e.target;
          var tbody = select.parentNode.parentNode.parentNode;
          tipoPregunta.check(tbody, select.value);
        }
    }
    for(i = 0; i < select.length; i++){
        var tbody = select[i].parentNode.parentNode.parentNode;
        tipoPregunta.check(tbody, select[i].value);
    }
}

var tipoPregunta = {
    simple: function(tbody){
        var child = tbody.getElementsByTagName("tr");
        for (i = 2; i < child.length; i++){
            if(i < 2){
                child[i].style.display = "";
            }else{
               child[i].style.display = "none"; 
            }
            
        };
    },
    llarga: function(tbody){
        var child = tbody.getElementsByTagName("tr");
        for (i = 2; i < child.length; i++){
            if(i < 2){
                child[i].style.display = "";
            }else{
               child[i].style.display = "none"; 
            }
        };
    },
    seleccio: function(tbody){
        var child = tbody.getElementsByTagName("tr");
        for (i = 2; i < child.length; i++){
            if(i < 3){
                child[i].style.display = "";
            }else{
               child[i].style.display = "none"; 
            }
            
        };
    },
    seleccioSimple: function(tbody){
        var child = tbody.getElementsByTagName("tr");
        for (i = 2; i < child.length; i++){
            child[i].style.display = "";
        };
    },
    seleccioMultiple: function(tbody){
        var child = tbody.getElementsByTagName("tr");
        for (i = 2; i < child.length; i++){
            child[i].style.display = "";
        };
    },
    check: function(tbody, tipo){
        console.log(tipo);
        switch(tipo){
          case "simple":
              tipoPregunta.simple(tbody);
              break;
          case "llarga":
              tipoPregunta.llarga(tbody);
              break;
          case "seleccio":
              tipoPregunta.seleccio(tbody);
              break;
          case "seleccioSimple":
              tipoPregunta.seleccioSimple(tbody);
              break;
          case "seleccioMultiple":
              tipoPregunta.seleccioMultiple(tbody);
              break;
        }
    }
};

function reloadAllCheckBox(){
    var table = document.getElementsByTagName("table");
}


var divTabla = document.getElementById("tabla");
function preguntaNueva(){    
    //variables
    var tbody;
    var texto;
    var table, td, tr;
    var input, select, option, label, p, button;
    
    //poner <br>
    divTabla.appendChild(document.createElement("br"));
    
    //Texto para diferenciar las preguntas
    texto = document.createTextNode("Pregunta ");
    p = document.createElement("p");
    p.appendChild(texto);
    
    table = document.createElement("table");
    table.setAttribute("class", "table card-table table-borderless");
    table.setAttribute("style", "border: 1px solid #037AFF;");
    tbody = document.createElement("tbody");
    
    //input para poner nombre pregunta
    tr = document.createElement("tr");
    td = document.createElement("td");
    divTabla.appendChild(p);
    
    button = document.createElement("button");
    texto = document.createTextNode("Eliminar");
    button.appendChild(texto);
    button.name = "eliminar";
    button.type = "button";
    td.appendChild(button);
    
    td.setAttribute("colspan", 2);
    input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("class", "form-control");
    input.setAttribute("placeholder", "Pregunta");
    td.appendChild(input);
    tr.appendChild(td);
    tbody.appendChild(tr);
    
    //seleccionar tipo de pregunta
    //falta un appendchild o algo, en html solo muestra el <select>
    tr = document.createElement("tr");
    td = document.createElement("td");
    td.setAttribute("colspan", 2);
    select = document.createElement("select");
    select.setAttribute("class", "form-select");
    select.setAttribute("name", "tipuspregunta");
    option = document.createElement("option");
    texto = document.createTextNode("Resposta Simple");
    option.appendChild(texto);
    option.value = "simple";
    select.appendChild(option);
    option = document.createElement("option");
    texto = document.createTextNode("Resposta Llarga");
    option.appendChild(texto);
    option.value = "llarga";
    select.appendChild(option);
    option = document.createElement("option");
    texto = document.createTextNode("Resposta Seleccio");
    option.appendChild(texto);
    option.value = "seleccio";
    select.appendChild(option);
    option = document.createElement("option");
    texto = document.createTextNode("Resposta Seleccio Simple");
    option.appendChild(texto);
    option.value = "seleccioSimple";
    select.appendChild(option);
    option = document.createElement("option");
    texto = document.createTextNode("Resposta Seleccio Multiple");
    option.appendChild(texto);
    option.value = "seleccioMultiple";
    select.appendChild(option);
    td.appendChild(select);
    tr.appendChild(td);
    
    tbody.appendChild(tr);

    //Respuestas select 1
    for (i = 1; i <= 4; i++){
        
        if(i == 1 || i == 3){
            tr = document.createElement("tr");
        }
        td = document.createElement("td");
        td.setAttribute("colspan", 1);

        input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("class", "form-control");
        input.setAttribute("placeholder", "Resposta " + i);
        input.setAttribute("name", "resposta" + i);
        td.appendChild(input);

        label = document.createElement("label");
        label.setAttribute("class", "form-check-label");
        label.setAttribute("for", "flexCheckDefault");
        text = document.createTextNode("Correcte");
        label.appendChild(text);
        td.appendChild(label);

        input = document.createElement("input");
        input.setAttribute("class", "form-check-input");
        input.setAttribute("type", "checkbox");
        input.setAttribute("value", "");
        input.checked = true;
        td.appendChild(input);
        tr.appendChild(td);
        if(i == 2 || i == 4){
            tbody.appendChild(tr);
        }
    }
    
    //añadir la table en el div
    //tbody.appendChild(table);
    table.appendChild(tbody);
    divTabla.appendChild(table);
    orden_pregunta();
    reloadAllSelect();
    reloadAllButtonEliminar();
    reloadAllCheckBox();
};

function orden_pregunta(){
    var p = document.getElementsByTagName("p");
    for(i = 0; i < p.length; i++){
        p[i].innerHTML = "Pregunta " + (i+1);
    }
};
