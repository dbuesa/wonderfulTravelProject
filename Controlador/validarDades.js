"use strict";

let errors = []; // Declarar la variable en el ámbito global

function validarDNI(dni) {
    let regex = /^\d{8}[a-zA-Z]$/;
    if (regex.test(dni)) {
        let numero = dni.substr(0, dni.length - 1);
        let lletra = dni.substr(dni.length - 1, 1);
        numero = numero % 23;
        let lletres = 'TRWAGMYFPDXBNJZSQVHLCKET';
        lletra = lletres.substring(numero, numero + 1);
        if (lletra != lletra.toUpperCase()) {
            return false;
        }
        else {
            return true;
        }
    }
}

function validarNom(nom) {
    let regex = /^[a-zA-ZÀ-ÿ\s]{2,40}$/;
    return regex.test(nom);
}

function validarCP(cp) {
    let regex = /^\d{5}$/;
    return regex.test(cp);
}

function validarCorreu(correu) {
    let regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    return regex.test(correu);
}

function validarDesti(desti)
{
    if(desti == "continent"){
        return false;
    }else{
        return true;
    }
}
function validarSexe(sexe)
{
    if(sexe == "Helicoptero"){
        return false;
    }else{
        return true;
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        errors = [];

        const dni = document.getElementById("dni").value;
        const nom = document.getElementById("nom").value;
        const cp = document.getElementById("cp").value;
        const correu = document.getElementById("correu").value;
        const desti = document.getElementById("desti").value;
        const sexe = document.getElementById("sexe").value;

        if (!validarDNI(dni)) {
            errors.push("Format de DNI incorrecte");
        }
        if (!validarNom(nom)) {
            errors.push("Nom incorrecte");
        }
        if (!validarCP(cp)) {
            errors.push("Codi Postal incorrecte");
        }
        if (!validarCorreu(correu)) {
            errors.push("Correu electrònic incorrecte");
        }
        if(!validarDesti(desti)){
            errors.push("Has de seleccionar un continent");
        }
        if(!validarSexe(sexe)){
            errors.push("Indica el teu sexe, si us plau");
        }
        if (errors.length > 0) {
            mostrarErrors();
        }
        else {
            form.submit();
        }
    });
});

function mostrarErrors() {
    let html = "";
    for (let error of errors) {
        html += `<li style="font-size: medium; color: red;">${error}</li>`;
    }
    document.getElementById("error-container").innerHTML = html;
}
