import { imatges } from "./export.js";
import { preus } from "./export.js";
import { continents } from "./export.js";


const descompte = 0.15;

document.getElementById("desti").addEventListener("change", carregarContinents);
document.getElementById("numPersones").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarImatge);
document.getElementById("descompte").addEventListener("click", aplicarDescompte);

/**
 * carrerarContinents() - Carrega els continents al select de continents.
 * 
 * @return void
 */
function carregarContinents(){
    let continent = document.getElementById("desti").value;
    let ciutats = continents[continent];
    mostrarCiutats(ciutats);
    carregarImatge();
}
/**
 * mostrarCiutats() - Mostra les ciutats al select de ciutats a partir dels continents seleccionats 
 * @param {*} ciutats ciutats dels continents seleccionats
 * return void
 */
function mostrarCiutats(ciutats) {
    let ciutatsSelect = document.getElementById("ciutat");
    ciutatsSelect.innerHTML = "";
    for (let i = 0; i < ciutats.length; ++i) {
        let option = document.createElement("option");
        option.text = ciutats[i];
        ciutatsSelect.add(option);
    }
    carregarPreu();
}
/**
 * carregarPreu() - Carrega el preu total a partir de la ciutat i el nombre de persones seleccionades.
 * 
 * return void
 */
function carregarPreu(){
    let ciutat = document.getElementById("ciutat").value;
    let numPersones = document.getElementById("numPersones").value;
    let preuTotal = preus[ciutat] * numPersones;
    let pt = parseFloat(preuTotal).toFixed(2);
    if(pt !== "NaN"){
    document.getElementById("preu").value = pt + " €";
    }
}

/**
 * carrerarImatge() - Carrega la imatge de la ciutat seleccionada.
 * return void
 */
function carregarImatge(){
    let ciutat = document.getElementById("ciutat").value;
    let imatge = imatges[ciutat];
    document.getElementById("imatge").src = imatge;
}

/**
 * aplicarDescompte() - Aplica el descompte del 15% a partir de 3 persones.
 * return void
 */
function aplicarDescompte(){
    let numPersones = document.getElementById("numPersones").value;
    if(numPersones >= 3){
        let ciutat = document.getElementById("ciutat").value;
        let preuTotal = preus[ciutat] * numPersones;
        let preuFinal = preuTotal - (preuTotal * descompte);
        let pf = parseFloat(preuFinal).toFixed(2);
        if(pf !== "NaN"){
            document.getElementById("preu").value = pf + " €";
            alert("Descompte aplicat: " + descompte * 100 + "% " + ". Preu final: " + pf + " €. T'has estalviat: " + (preuTotal - preuFinal).toFixed(2) + " €" );
        }
    }else alert("El descompte només s'aplica a partir de 3 persones");
}