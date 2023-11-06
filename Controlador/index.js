const preus = {
    "Praga": 199.99,
    "Madrid": 299.99,
    "Amsterdam": 499.99,
    "Atenas": 449.99,
    "Kampala": 9999.99,
    "Abuja": 999.99,
    "Brazzaville": 399.99,
    "Algeria": 299.99,
    "Rio de Janeiro": 2999.99,
    "Buenos Aires": 1999.99,
    "Bogotà": 1499.99,
    "Cusco": 2499.99,
    "Sydney": 1499.99,
    "Wellington": 1400.99,
    "Wagga Wagga": 3499.99,
    "Hobart": 1999.99,
    "Dacca": 2199.99,
    "Hong Kong": 3999.99,
    "Jakarta": 2499.99,
    "Canton": 1999.99
}

const continents = {
    "europa": ["Praga", "Madrid", "Amsterdam", "Atenas"],
    "africa": ['Kampala', 'Abuja', 'Brazzaville', 'Algeria'],
    "america": ['Rio de Janeiro', 'Buenos Aires', 'Bogotà', 'Cusco'],
    "oceania": ['Sydney', 'Wellington', 'Wagga Wagga', 'Hobart'],
    "asia": ['Dacca', 'Hong Kong', 'Jakarta', 'Canton']
}

document.getElementById("desti").addEventListener("change", carregarContinents);
document.getElementById("numPersones").addEventListener("change", carregarPreu);
document.getElementById("ciutat").addEventListener("change", carregarPreu);


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
    carregarPreu();
}

function carregarPreu(){
    let ciutat = document.getElementById("ciutat").value;
    let numPersones = document.getElementById("numPersones").value;
    let preuTotal = preus[ciutat] * numPersones;
    let pt = parseFloat(preuTotal).toFixed(2);
    document.getElementById("preu").value = pt + " €";
}
