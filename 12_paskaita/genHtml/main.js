colors = ["Blue ", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow "];


// sukuri rikiuota sarasa is masyvo el.

// sukuriam rikiuoto saraso el
const olEl = document.createElement("ol");

// Class 

olEl.className = 'my-list'
olEl.classList.add('extra-class');


// sukurti saraso eleementus ir prideti prie saraso el

for (color of colors) {
    // sukurti li 
    let tempLi = document.createElement("li");
    // sukuriame text el
    let tempText = document.createTextNode(color);
    // pridedame texta is masyvo
    tempLi.appendChild(tempText);
    // ikeliam naujai sukurta el i sarasa
    olEl.appendChild(tempLi);
}





// prideti el i html
//nusitaikom i el
const appEl = document.getElementById("app");

//ikeliam naujai sukurta el

appEl.appendChild(olEl);