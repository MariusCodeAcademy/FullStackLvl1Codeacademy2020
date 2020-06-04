
// DOM manipuliacija

// pakeisti title

// pasirinkti(select) elementa kuriam norim atlikit veiksma
const antraste = document.getElementById("title");

// atlikti veiksma
antraste.innerText = "<h5>title was Changed </h5>";
antraste.innerHTML = "<h5>title was Changed </h5>";

antraste.style.backgroundColor = "yellow";





// sukurti nauja h3 elementa ir ikelti ji i documenta

// sukuriam tuscia elementa
const newTitle = document.createElement("h3");
// pridedam texta i elementa;
newTitle.innerText = "New generated Title";

//ikelti elementa i .container div elementa;
// gauname .container el
const konteineris = document.querySelector(".container");
// ikeliam naujai sukurta el i dom
konteineris.appendChild(newTitle);




let count = 0;
//  kuriame funkcija prideti li el 
function addLi() {
    // console.log("it works");

    // gauti reiksme is input el
    let inputVal = document.getElementById("input").value
    console.log(inputVal);
    
    // suskurti el
    let liEl = document.createElement("li");
    // prideti text noda
    liEl.innerText = inputVal + " " + count;
    // ikelti ta el i ul
    document.getElementById('ul').appendChild(liEl);
    // padidinti count
    count++;

    // isvalyti input el
    document.getElementById("input").value = "";
}



// texto isvedimo funkcija

function textOut() {
    // console.log('it works');
    // gauti ivesta texta ir ji atvaizduoti resultBox elemente
    let inputVal = document.getElementById("input").value;
    document.getElementById("resultBox").innerText = inputVal;

    // atspausdinti kiek simboliu ivesta
    let ilgis = inputVal.length;
    console.log(ilgis);

    // atspausdinti "per trumpas" jei texta yra trumpesnis uz 6
    if(ilgis < 6) {
        document.getElementById("resultBox").innerText = "per trumpas slaptazodis"
    } else {
        document.getElementById("resultBox").innerText = "Viskas ok"
    }

    
}







