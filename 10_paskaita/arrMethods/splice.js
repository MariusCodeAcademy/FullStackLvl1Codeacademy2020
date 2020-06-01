console.log("Splice");

// splice
// arr.splice(<nuo kur pradedam(index)>, <kiek istrinam>, <ka idedam1> ...)

const fruits = ["Banana", "Orange", "Apple", "Mango"];
console.log(fruits);

// istrinti Apple
// splice(index, 1)

// fruits.splice(2, 1)


// pridesim 2 elemetus tarp Banana ir Orange

fruits.splice(1, 0, "Tomato", "Grapes");


console.log(fruits);


