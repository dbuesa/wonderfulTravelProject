document.getElementById("desti").addEventListener("change", continents);

function continents(){
    let continents = {
        "Europa": ["Praga", "Madrid", "Amsterdam", "Atenas"],
        "Àfrica": ['Kampala', 'Abuja', 'Brazzaville', 'Algeria'],
        "Amèrica": ['Rio de Janeiro', 'Buenos Aires', 'Bogotà', 'Cusco'],
        "Oceania": ['Sydney', 'Wellington', 'Wagga Wagga', 'Hobart'],
        "Àsia": ['Dacca', 'Hong Kong', 'Jakarta', 'Canton']
    }
    let continent = document.getElementById("desti").value;
    let ciutats = continents[continent];
    mostrarCiutats(ciutats);
}


function mostrarCiutats(ciutats){
    let select = document.getElementById("ciutat");
    for(let i=0; i<ciutats.length; i++){
        let option = document.createElement("option");
        option.innerHTML = ciutats[i];
        select.appendChild(option);
    }
}