const ag = document.getElementById('ataqueglucemia');
const hiperAG = document.getElementById('hiperAG');
const hipoper1 = document.getElementById("hipoper1");
const hipoper2 = document.getElementById("hipoper2");
const quitarRadio = document.getElementById("quitarRadio");

function mostrarHipoper(){
    if(hipoper1.checked || hipoper2.checked){
        quitarRadio.classList.remove('d-none');
        ag.classList.remove('d-none');
        if(hipoper2.checked){
            hiperAG.classList.remove('d-none');
        }else{
            hiperAG.classList.add('d-none');
        }
    }else{
        quitarRadio.classList.add('d-none');   
        ag.classList.add('d-none');
    }
}

const cargarEventos=()=>{
    hipoper1.addEventListener("change", mostrarHipoper);
    hipoper2.addEventListener("change", mostrarHipoper);
    quitarRadio.addEventListener("change", mostrarHipoper);
}
document.addEventListener("DOMContentLoaded", cargarEventos);