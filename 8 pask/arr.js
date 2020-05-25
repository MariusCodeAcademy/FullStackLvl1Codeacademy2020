"use strict"

// deklaruoju nauja tuscia masyva;
var myFirstArray = []

// index        0  1  2  3   4      5      6
myFirstArray = [5, 7, 9, 15, 17, "labas", true];


// noriu gauti 9
console.log(myFirstArray[2]);
var x = 0;

var suma3 = myFirstArray[x] + myFirstArray[1] + myFirstArray[2];

console.log(suma3)


var pushArr = [ 7 , 1 , 2 , 3 , 4 , 5];

console.log("masyvas orginaliai")
console.log(pushArr);
// pridadame nauja masyvo nari masyvo pabaigoje
pushArr.push(9);

console.log("masyvas po push");
console.log(pushArr);

// shift nuima pirma masyvo nari
var nukirptasEl = pushArr.shift();
console.log("masyvas po shift");
console.log(pushArr);




