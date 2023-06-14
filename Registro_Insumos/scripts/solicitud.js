//Lista de insumos
ListaInsumos = [];
area = "";//variable global
//vista dao
//vista modelo controlador
function Registro(id, nombre, unidad, pedida, entrega) {
  this.id = id;
  this.nombre = nombre;
  this.unidad = unidad;
  this.pedida = pedida;
  this.entrega = entrega;

  this.getId = function () {
    return this.id;
  };

  this.getNombre = function () {
    return this.nombre;
  };

  this.getUnidad = function () {
    return this.unidad;
  };

  this.getPedida = function () {
    return this.pedida;
  };

  this.getEntrega = function () {
    return this.entrega;
  };

  this.actualizar = function () {
    document.getElementById("ListaDeInsumos").innerHTML +=
      "<tbody><td>" +
      this.insumo +
      "</td><td>" +
      this.unidad +
      "</td><td>" +
      this.pedida +
      "</td><td>" +
      this.entrega +
      "</td></tbody>";
  };

  this.registrarBD = function (entrega, fecha, id) {
    if (area == 'covid'){
      $.post(
        "php/insert_covid.php",
        { ENT: entrega, FECH: fecha, ID: id },
        function (data) {
          if (data == null) {
            alert("Datos no enviados");
          }
        }
      );
    }//covid

    if(area == 'laboratorio'){
      $.post(
        "php/insert_laboratorio.php",
        { ENT: entrega, FECH: fecha, ID: id },
        function (data) {
          if (data == null) {
            alert("Datos no enviados");
          }
        }
      );
    }//laborratorio

    if(area == 'limpieza'){
      $.post(
        "php/insert_limpieza.php",
        { ENT: entrega, FECH: fecha, ID: id },
        function (data) {
          if (data == null) {
            alert("Datos no enviados");
          }
        }
      );
    }//limpieza

    if (area == 'oficina'){
      $.post(
        "php/insert_oficina.php",
        { ENT: entrega, FECH: fecha, ID: id },
        function (data) {
          if (data == null) {
            alert("Datos no enviados");
          }
        }
      );
    }//oficina
    
    if (area == 'urgencia'){
      $.post(
        "php/insert_urgencia.php",
        { ENT: entrega, FECH: fecha, ID: id },
        function (data) {
          if (data == null) {
            alert("Datos no enviados");
          }
        }
      );
    }

  };
}

function ListarInsumos() {
  var existe = false;
  var i = 0;
  var espacio = Listarticulos[index].indexOf(" ");
  var id = Listarticulos[index].substring(0, espacio);
  var articulo = document.getElementById("articulo").value;
  var unidad = document.getElementById("unidad").value;
  var pedida = document.getElementById("entregada").value;
  var entrega = document.getElementById("pedida").value;
  
  while (i < ListaInsumos.length){
    if (id == ListaInsumos[i].getId()){
      existe = true;
    }
    i++; 
  }

  document.getElementById("articulo").value = "";
  document.getElementById("unidad").value = "";
  document.getElementById("pedida").value = "";
  document.getElementById("entregada").value = "";
   
  if(existe == false){
    let Insumo = new Registro(id, articulo, unidad, pedida, entrega);
  ListaInsumos.push(Insumo);
  console.log(ListaInsumos);
  document.getElementById("ListaDeInsumos").innerHTML +=
    "<tbody><td>" +
    Insumo.getNombre() +
    "</td><td>" +
    Insumo.getUnidad() +
    "</td><td>" +
    Insumo.getPedida() +
    "</td><td>" +
    Insumo.getEntrega() +
    "</td></tbody>";

  }else{
    alert('El insumo ya existe en la lista de reporte');
  }
  console.log('la area es: ', area)
}

function procesarREG() {
  var i = 0;
  //var id = 'ar_4';
  //var entrega = '6';
  var fecha = getfecha();
  console.log (fecha);
  //var encargado = 'ecg1_AR';
  let Insumo = new Registro(); //instancia de obj
  //Insumo.registrarBD(entrega, fecha, encargado, id);

  while (i < ListaInsumos.length) {
    id = ListaInsumos[i].getId();
    entrega = ListaInsumos[i].getEntrega();
    console.log(id);
    console.log (fecha);
    //entrega = ListaInsumos[i].getEntrega();
    Insumo.registrarBD(entrega, fecha, id);
    i++;
  }
  generarPDF();
  alert('Registro realizado');
}
//console.log(ListaInsumos);

function registros(){
  document.getElementById("ListaRegistros").innerHTML +=
  "<tbody><td>" +
  Insumo.getNombre() +
  "</td><td>" +
  Insumo.getUnidad() +
  "</td><td>" +
  Insumo.getPedida() +
  "</td><td>" +
  Insumo.getEntrega() +
  "</td></tbody>";
}

