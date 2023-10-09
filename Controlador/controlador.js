// Retorna un missatge especial si és un any de traspàs
//    i 1 de gener o 29 de febrer a les 8:00h
function anyTraspas(ara) {
    let any = ara.getFullYear();
    let mes = ara.getMonth() + 1;
    let dia = ara.getDate();
    let hora = ara.getHours();
    let minut = ara.getMinutes();
   
    if (any % 4 == 0 && any % 100 != 0 || any % 400 == 0) {
        if (hora == 8 && minut == 0) {
            if (mes == 1 && dia == 1) return "<br>Bon dia. Aquest serà un any especial.";
            else if (mes == 2 && dia == 29) return "<br>Bon dia. Avui és un dia especial.";
        }
    }
    return "";
}

// Retorna un text HTML amb la data, hora i un missatge en dates i hores especials
function rellotge(ara) {
    //const DIES = ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte"];
    let html;
    let ampm = "AM";
    let dia = ara.getDate();
    let mes = ara.getMonth();
    let hora = ara.getHours();
    let minut = ara.getMinutes();
    let segon = ara.getSeconds();
    let missatge = "";
   
    // Hora
    if (minut == 0) {
        if (hora == 12) missatge = "<br>Són les 12 del migdia. Tens una hora per anar a dinar.";
        else if (hora == 0) {
            if (dia == 1 && mes == 0) missatge = "<br>Bon any !!!";
            else if (dia == 25 && mes == 11) missatge = "<br>Bon Nadal !!!";
            else missatge = "<br>És mitjanit. No hauries d'estar dormint?";
        }
    }
    if (hora >= 12) {
        ampm = "PM";
        if (hora > 12) hora -= 12;
    }
    if (hora < 10) hora = "0" + hora;
    if (minut < 10) minut = "0" + minut;
    if (segon < 10) segon = "0" + segon;
    html = hora + ":" + minut + ":" + segon + " " + ampm;
   
    // Data
    //html += "<br>" + DIES[ara.getDay()] + "<br>" + ara.getDate() + " / " + (ara.getMonth()+1) + " / " + ara.getFullYear();

    // Mostrarà el dia en l'idioma del navegador
    //var ds = ara.toLocaleDateString(navigator.language, { weekday: 'long' });
   
    // Mostrarà el dia en català
    let ds = ara.toLocaleDateString("ca", { weekday: 'long' });
    ds = ds.charAt(0).toUpperCase() + ds.substring(1);
    html += "<br>" + ds + "<br>" + ara.getDate() + " / " + (ara.getMonth()+1) + " / " + ara.getFullYear();
   
    // Missatges
    html += missatge;
    html += anyTraspas(ara);
   
    return html;
}