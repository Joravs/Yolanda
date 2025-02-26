const username=document.getElementById("username");
const com=document.getElementById("nombresUsuarios").value;
const ayuda0=document.getElementById("passwordHelpInline0");
const validarUsuario=()=>{
    let co=com.split(",");
    co.forEach((c)=>{
        if(c==username.value){
            username.classList.add("is-invalid");
            console.log(username.value,c);
            ayuda0.classList.remove("d-none");
            exit;
        }else{
            username.classList.remove("is-invalid");
            username.classList.add("is-valid");
            ayuda0.classList.add("d-none");
        }
    });
}

const cargar=()=>{
    username.addEventListener("change", validarUsuario);
}
document.addEventListener("DOMContentLoaded", cargar);