console.log("lets for");


// atspausdinti "item 1" iki "item 10"
//                 step
for (let i=1; i<=10; i++) {
// loop body
  //console.log('item ' + i);
}


const arr = [7, "as", 13, "tu", 15, "ji", 25, true];
const arr2 = [  2, "labas", false, "rytas", true, 3];

console.log(arr);


// console.log(arr[0]);
// console.log(arr[1]);
// console.log(arr[2]);
// console.log(arr[3]);
// console.log(arr[4]);
// masvo ilgi arba nariu sk arr.length

let ilgis = arr.length

// for (let i=0; i<ilgis; i++) {
//   console.log(arr[i]);
// }

let text = '';
let suma = 0;
// vieno nario apskaiciavimas
// if (typeof arr[0] === 'number') {
//   suma += arr[0];
// }

// visu nariu apskaiciavimas
for(let i=0; i<arr.length; i = i + 1) {

  // patikriname ar masyvo narys yra skaicius
  if (typeof arr[i] === 'number') {
    suma += arr[i];
    console.log({suma});

    // kitu atveju, patikriname ar masyvo narys yra tekstas
  } else if (typeof arr[i] === 'string') {
    text += arr[i] + ', ';
  }

} // end for 

console.log(suma);
console.log(text);


