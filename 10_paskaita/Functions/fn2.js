// sukurti funckija kuri atspauzdinti kas antra skaiciu nuo 5 iki 56;



// for (let i=5; i<56; i++ ) {
//     if ( i % 2 !== 0) {
//         console.log(i);
//     }
// }

function printEverySecondNr(min, max) {

    for (let i=min; i<max; i++ ) {
        if ( i % 2 !== 0) {
            console.log(i);
        }
    }

}

// printEverySecondNr(5, 15);
// printEverySecondNr(100, 131);





// sukurti funkcija kuri pasako paseisveikinima;

// labas vakaras

function sveikinimas() {
    console.log('labas vakaras');
}
// iskviesti 
sveikinimas();


// sukurti funkcija kuri, paima 2 reiksmes atima is vienos kita ir grazina rezultata. ta rezultata atspauzdinti

function atimk(num1, num2) {
    return num1 - num2;
}
// iskvieciam
console.log(  atimk(15, 5)  );



// sukurti funkcija kuri paima masyva ir grazina patrigubintas reiksmes kitame masyve. 
const myNumber = [ 5, 0, 15, -45, 12, -15, 11 ]; 



function x3(arr) {
    const naujasMasyvas = [];

    // psiaudo kodas venai reiksmei. 

    let laikinas = arr[i] * 3
    naujasMasyvas.push(laikinas)

}




























// iterpti 3 papildomas reiksmes i masyva nuo 4 elemento. splice()





// sukurti funkcija, kuri grazina apskritimo plota, paduodant jai apskritimo spinduli kaip argumenta;
// apskPlotas(15)
// 3.14 padauginta is spindulio kvadratu
// atspausintu: "jusu uzduotas spindulys yra <>.Tokio spindulio plotas yra <>" 


function apskPlotas(spindulys) {
    return 3.14 * spindulys * spindulys;
}






// sunkesne uzduotis 
// parasyti funkcija kuri paima stringa
// "With variables, we use the assignment statement, so this would be the natural tendency -- but it is wrong"
// duota sakini, atspausdinti atvirkscia tvarka, kas antra zodi, ir iterpti palildoma sakini "it is cool"
// po 5to nario.