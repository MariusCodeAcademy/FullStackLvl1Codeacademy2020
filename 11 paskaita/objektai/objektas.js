//         index 0,    1       2   
const myArray = [5, "Domas", true, ];

// let luckyNr= 5;

const myObj = {
    luckyNr: 5,
    name: "Domas",
    adult: true
}

// console.log(myArray[1]);



// console.log(myObj["name"]);

myObj.name = "Jonas";

// console.log(myObj.name);


//  pobjekto pavyzdys ================================================

const customer = {
    name: "John",
    surname: "Brown",
    age: 24,
    about: function() {
        const text = this.name + " " + this.surname + ", " + this.age + " years old";
        return text
    }
}

// vardas pavarde xx metu amziaus

// gauti customer pavarde
console.log(customer.surname);

// pakeisti amziu i 28

customer.age = 28;

// gauti prisistatyma, ivykdyti objekto metoda

console.log(customer.about())

// pridesime papildoma savybe, email

customer.email = "john@brown.com"

// atspausdinti visa obj

console.log(customer)


// masyvas su objektais

const arrayOfObjects = [
    { name: "blue", id: 10 }, // index 0
    { name: "green", id: 11}  // index 1
] 

// gauti antro objekto varda

const rez = arrayOfObjects[1].name;

console.log(rez);



// extra masyvu uzduotis ir metodu grandine

// atspausdinti sakini is kitos puses
const sakinys = "As moku programuoti js";
console.log({sakinys});

// // darom masyva
// let masyvas = sakinys.split(" ");
// console.log(masyvas);

// // sukeiciam eiles tvarka
// let masyvasAntraip = masyvas.reverse();
// console.log(masyvasAntraip);

// let rezultatas = masyvasAntraip.join(" ");
// console.log({rezultatas});


let rezultatas = sakinys
    .split(" ")
    .reverse()
    .join(" ");

console.log({rezultatas});


