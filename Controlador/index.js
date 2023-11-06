document.getElementById("desti").addEventListener("change", continents);

function continents(){
    const continents = {
        "Europa": ["Praga", "Madrid", "Amsterdam", "Atenas"],
        "Àfrica": ['Kampala', 'Abuja', 'Brazzaville', 'Algeria'],
        "Amèrica": ['Rio de Janeiro', 'Buenos Aires', 'Bogotà', 'Cusco'],
        "Oceania": ['Sydney', 'Wellington', 'Wagga Wagga', 'Hobart'],
        "Àsia": ['Dacca', 'Hong Kong', 'Jakarta', 'Canton']
    }
    let continent = document.getElementById("desti").value;
    let ciutats = continents[continent];
    carregarCiutats(ciutats);
}


function carregarCiutats(ciutats){
    let select = document.getElementById("ciutat");
    select.innerHTML = "";
    for (let i = 0; i < ciutats.length; i++) {
        let option = document.createElement("option");
        option.value = ciutats[i];
        option.innerHTML = ciutats[i];
        select.appendChild(option);
    }
}