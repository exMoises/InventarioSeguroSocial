//función para ingresar solo letras en un input
function sololetras(e){
    key=e.keycode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    letras="abcdefghijklmnñopqrstuvwxyz";
    especiales="8-37-38-46-164";
    tecladoEspecial=false;
    for(var i in especiales){
        if (key==especiales[i]){
            tecladoEspecial=true;
            break;
        }
    }
    if(letras.indexOf(teclado)==-1 && !tecladoEspecial){
        return false;
    }
}
//función para ingresar solo números a un input
function solonumeros(e){
    key=e.keycode || e.which;
    teclado=String.fromCharCode(key);
    numeros="0123456789";
    especiales="8-37-38-46";
    teclado_especial=false;
    for(var i in especiales){
        if (key==especiales[i]){
            teclado_especial=true;
        }
    }
    if(numeros.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
}