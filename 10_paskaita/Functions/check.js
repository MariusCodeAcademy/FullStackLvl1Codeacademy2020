const numberArray = [0, 0, 1, -2, -5, -8, -7, -9, 5, 1, 2, 3, 6, 44, 5];   
"use strict"
// numberCopy = [];
// i = 0;
// while (i < numberArray.length) {
//   numberCopy[i] = numberArray[i];
//     i++;
// }
// console.log(numberCopy);

// // // 2. Sukurkite ciklą, kuris nukopijuotų 'numberArray' narius į naują masyvą atvirkščia tvarka. Atspausdinkite.
let numberRev = [];
i = -1;
while (++i < numberArray.length) {
    console.log('check');
    
  numberRev[i] = numberArray[i];
}
console.log(numberRev);

