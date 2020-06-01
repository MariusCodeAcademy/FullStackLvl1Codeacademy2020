// perdaryti cosole.log() i funkcija say();

function say(WhatToSay) {
    console.log(WhatToSay)
}

const name = "bob";

say(name);


// greeting function
// local scope
function greet(myName) {
    console.log("hello " + myName + "!!!, how are you?");
}

// iskviesti funkcija
greet("John")
greet("Michael")
let i = 100
// Grazinti reiksme is funkcijos 
// aprasom funcija kuri grazina  3 sk vidurki 
function getVidurkis(x, y, z) {
    let sum = x + y + z;
    let vidurkis = sum / 3
    i++;
    return vidurkis;
}

// iskviesti funkcija 
const rezultatas = getVidurkis(7, 5, 3);

// say(getVidurkis(7, 5, 3))

console.log(rezultatas);
say(rezultatas);

say({i});


