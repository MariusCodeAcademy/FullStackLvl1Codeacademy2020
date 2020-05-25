//1 susikurti masyva is 5 spalvu
var spalvos = ['melyna', 'zalia', 'raudona', 'geltona', 'juoda'];
// atspausdinti vidurine splava
console.log(spalvos[2]);
// atspausdinti pirma ir paskutine spalva per kableli 
console.log(spalvos[0] + ', ' + spalvos[4]);


//2 susikurti 3 kintamuosius
var x = 8, y = 5, z = 12;
// isvesti ju vidurki
var vidurkis = (x + y + z) / 3;
console.log({vidurkis})
//2.1 extra. susikurti masyva is 5 skaiciu ir gauti jo vidurki ir suma arr.legth 


//3 susikurti masyva bet kokiu skaiciu nuo -10 iki 10. masyvo ilgis 5

var randomDigits =  [-10, -8, -3, 2, 4];

// patikrtinti su if ar kiekvienas masyvo narys yra teigiamas ir atspausdinti atitinkamai

if (randomDigits[0] > 0){
    console.log(randomDigits[0] + " yra teigiamas skaicius")
} else {
    console.log(randomDigits[0] + " yra neigiamas skaicius")
}

if (randomDigits[1] > 0){
    console.log(randomDigits[1] + " yra teigiamas skaicius")
} else {
    console.log(randomDigits[1] + " yra neigiamas skaicius")
}

if (randomDigits[2] > 0){
    console.log(randomDigits[2] + " yra teigiamas skaicius")
} else {
    console.log(randomDigits[2] + " yra neigiamas skaicius")
}

if (randomDigits[3] > 0){
    console.log(randomDigits[3] + " yra teigiamas skaicius")
} else {
    console.log(randomDigits[3] + " yra neigiamas skaicius")
}

if (randomDigits[4] > 0){
    console.log(randomDigits[4] + " yra teigiamas skaicius")
} else {
    console.log(randomDigits[4] + " yra neigiamas skaicius")
}

//2.1 extra. susikurti masyva is 5 skaiciu ir gauti jo vidurki ir suma arr.legth 

var suma21 = 0;

suma21 += randomDigits[0];
suma21 += randomDigits[1];
suma21 += randomDigits[2];
suma21 += randomDigits[3];
suma21 += randomDigits[4];

var vidurkis = suma21 / randomDigits.length

console.log({suma21})