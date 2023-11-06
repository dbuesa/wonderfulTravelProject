import {continents, preus, imatges} from "export.js";


document.getElementById("desti").addEventListener("change", carregarContinents);
document.getElementById("numPersones").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarImatge);


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