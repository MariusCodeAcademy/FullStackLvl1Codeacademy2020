"use strict"
console.log("nd9");

const numberArray = [0, 0, 1, -2, -5, -8, -7, -9, 5, 1, 2, 3, 6, 44, 5];
console.log(numberArray);

// 5. Sudarykite naują masyvą, kuriame būtų 'numberArray' kvadratai(el**2). Atspausdinkite.
// 6. Sudarykite naują masyvą, kuriame būtų tik teigiamos 'numberArray' reikšmės. Atspausdinkite.

const squares = [];

let vienasKvadratas = numberArray[0] * numberArray[0];

// sukuriame standartini cikla prasukti viso masyvo reiksmems

for (let i=0; i<numberArray.length; i++) {
    // loop body 
    // i yra inddexas
    // numberArray[i] reiksme
    vienasKvadratas = numberArray[i] * numberArray[i];
    // ideti kvadrato reiksme i squares masyva
    squares.push(vienasKvadratas);

}// loop body end
// console.log({i});


console.log(squares);


