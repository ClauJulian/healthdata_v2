console.log("connecting... JS");
console.log("connecting... viewData");

/** VARIABLES Y OBJETOS */
let sendNewData = document.getElementById("senNewData");
let displayNewData = document.getElementById("displayNewData");
let displayChangeData = document.getElementById("displayChangeData");
// let print_btn;
// print_btn= document.getElementById("cj-print-btn");

// print_btn.addEventListener('click', printArea);

/** FUNCIONES UTILES */
function innerHTML(id,texto){
    document.getElementById(id).innerHTML= texto;
};

function valueHTML(id){
    return value = document.getElementById(id).value;
};

function styleCSS(id,atributo,especificacion){
    document.getElementById(id).style[atributo] = especificacion;
}

/** FUNCIONES ESPECIFICAS */

function printArea() {
    console.log("imprimir");
    // window.print(); 
}

function displayForm(){
    styleCSS('cj-formAddDisease','display','flex');
}

function displayNoneForm(){
    styleCSS('cj-formAddDisease','display','none');
}

/** DESARROLLO HEALTHDATA */
displayNewData.addEventListener('click', displayForm);

sendNewData.addEventListener('click', displayNoneForm);
