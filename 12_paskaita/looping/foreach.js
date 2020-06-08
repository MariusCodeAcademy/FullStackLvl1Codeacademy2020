"use strict";
const numberWithStrings = [2, 3, '5', 6, '8']

// for 
console.log("for");

for (let i = 0; i < numberWithStrings.length; i++) {
    console.log("index: " + i + " - " + numberWithStrings[i]);
}

// ForEach
console.log("foreach");

numberWithStrings.forEach(function(nr, indexas) {
    console.log("index: " + indexas + " - " + nr);
})

// for of 
console.log("for of");
let item
for (item of numberWithStrings) {
    console.log(item);
}