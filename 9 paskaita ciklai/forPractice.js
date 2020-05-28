console.log('practice');

const numbersArr = [ 2, 4, 16, 9, 32, 0, 17, 8 ];
console.log(numbersArr);


// padauginti visus masyvo nariu is 2 ir console.log
// extra sudeti i masyva numberX2

// psiaudo kodas

//ver 1
// 1.paimu pirma masyvo nari
//let temp = numbersArr[0];
// 2.padauginu is 2
//let x2 = temp * 2;
// 3.console.log ka gavau. 
//console.log(x2);

//ver 2
// 1.paimu pirma masyvo nari
// 2.padauginu is 2
// 3.console.log ka gavau. 


// for(let i=0; i<numbersArr.length; i++) {

//   console.log(numbersArr[i] * 2);

// }

// atspausdinti viso masyvo numbersArr nariu suma 

// susikurti kintamaji sum = 0
let sum = 0;

// kiekviena nari prideti prie sum ir prilyginti sum
// gauti viena nari
// sudeti su sum


for(let i=0; i<numbersArr.length; i++) {
   sum += numbersArr[i];
}
console.log({sum});


  


