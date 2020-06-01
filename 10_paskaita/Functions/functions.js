"use strict"
console.log("functions");

// atliekame veiksmus is viraus i apacia proceduriniu budu 
const num1 = 5;
const num2 = 7;

const sum = num1 + num2;

console.log(sum);


// dabar norius sudeti 8 ir 12 

const num3 = 8;
const num4 = 12;

const sum1 = num3 + num4;

console.log(sum1);



// mes galim sukurti funkcija kuri bus pernaudjama
// funkcijos sukurimas arba aprasymas 
function doSum(a, b) {
    // function body
    // local scope 
    const sum = a + b
    console.log(sum);
}
// global scope


// funkcijos iskvietimas
doSum(6, 18);
doSum(18, 48);
doSum(7, 2);
doSum(6, 18);
doSum(6, 18);




