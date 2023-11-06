function generarContinents(){
    const continents = ["Africa", "America", "Asia", "Europa", "Oceania"];
    let html = "";
    for (let i = 0; i < continents.length; i++) {
        html += `<option value="${continents[i]}">${continents[i]}</option>`;
    }
    return html;
}


function mostrarCiutats(){
    const continent = document.getElementById("continent").value;
    const ciutats = ciutatsPerContinents[continent];
    let html = "";
    for (let i = 0; i < ciutats.length; i++) {
        html += `<option value="${ciutats[i]}">${ciutats[i]}</option>`;
    }
    document.getElementById("ciutats").innerHTML = html;
}