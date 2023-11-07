import { imatges } from "./export.js";
import { preus } from "./export.js";
import { continents } from "./export.js";

const descompte = 0.15;

document.getElementById("desti").addEventListener("change", carregarContinents);
document.getElementById("numPersones").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarImatge);
document.getElementById("descompte").addEventListener("click", aplicarDescompte);

function carregarContinents(){
    let continent = document.getElementById("desti").value;
    let ciutats = continents[continent];
    mostrarCiutats(ciutats);
    carregarImatge();
}

function mostrarCiutats(ciutats) {
    let ciutatsSelect = document.getElementById("ciutat");
    ciutatsSelect.innerHTML = "";
    for (let i = 0; i < ciutats.length; i++) {
        let option = document.createElement("option");
        option.text = ciutats[i];
        ciutatsSelect.add(option);
    }
    carregarPreu();
}

function carregarPreu(){
    let ciutat = document.getElementById("ciutat").value;
    let numPersones = document.getElementById("numPersones").value;
    let preuTotal = preus[ciutat] * numPersones;
    let pt = parseFloat(preuTotal).toFixed(2);
    if(pt !== "NaN"){
    document.getElementById("preu").value = pt + " €";
    }
}

function carregarImatge(){
    let ciutat = document.getElementById("ciutat").value;
    let imatge = imatges[ciutat];
    document.getElementById("imatge").src = imatge;
}

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