const continents = {
    "europa": ["Praga", "Madrid", "Amsterdam", "Atenas"],
    "africa": ['Kampala', 'Abuja', 'Brazzaville', 'Algeria'],
    "america": ['Rio de Janeiro', 'Buenos Aires', 'Bogotà', 'Cusco'],
    "oceania": ['Sydney', 'Wellington', 'Wagga Wagga', 'Hobart'],
    "asia": ['Dacca', 'Hong Kong', 'Jakarta', 'Canton']
}

document.getElementById("desti").addEventListener("change", carregarContinents);


function carregarContinents(){
    let continent = document.getElementById("desti").value;
    let ciutats = continents[continent];
    mostrarCiutats(ciutats);
}


function mostrarCiutats(ciutats) {
    let ciutatsSelect = document.getElementById("ciutat");
    ciutatsSelect.innerHTML = "";
    for (let i = 0; i < ciutats.length; i++) {
        let option = document.createElement("option");
        option.text = ciutats[i];
        ciutatsSelect.add(option);
    }
}
