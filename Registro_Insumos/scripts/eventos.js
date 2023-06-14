// funcion para Cargar Provincias al campo <select>
function Lista(articulos) {
  // array.sort - Ordena el Array Alfabeticamente, es muy facil ;)):
  addOptions("articulo", articulos);
}

// Rutina para agregar opciones a un <select>
function addOptions(domElement, array) {
  var select = document.getElementsByName(domElement)[0];
  for (value in array) {
    var option = document.createElement("option");
    option.text = array[value];
    select.add(option);
  }
}

function Lista_Areas(departamentos) {
  // array.sort - Ordena el Array Alfabeticamente, es muy facil ;)):
  addOptions2("areas", departamentos);
}

// Rutina para agregar opciones a un <select>
function addOptions2(domElement, array) {
  var select = document.getElementsByName(domElement)[0];
  for (value in array) {
    var option = document.createElement("option");
    option.text = array[value];
    select.add(option);
  }
}


//capturar el indice de lo que seleccionamos en un select
function capturarindex() {
  document.querySelector("select").addEventListener("click", function (e) {
    index = e.target.selectedIndex - 1;
    console.info("El índice de la opción seleccionada es %s", index);
  });
}

//Evento para cambiar de foco al presionar enter en los campos de texto
function nextFocus(inputF, inputS) {
  document.getElementById(inputF).addEventListener("keydown", function (event) {
    if (event.keyCode == 13) {
      document.getElementById(inputS).focus();
    }
  });
}


function getfecha(){
  let date = new Date()
  let day = date.getDate()
  let month = date.getMonth() + 1
  let year = date.getFullYear()

  if (day < 10){
    day = "0" + day;
  }
  if(month < 10){
    month = "0" + month;
  }
  var fecha = year + "-" + month + "-" + day;
  return fecha;  
}


