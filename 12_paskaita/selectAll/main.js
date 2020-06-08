// tikslas
// prideti kiekvienam li el, title su pavadinimu

// nusitaikyti i li el

// jei darytume vienam el

const liEl = document.querySelector("li");

liEl.title = "something";






// visiems li el

const visiLiEl = document.querySelectorAll('li');

console.log(visiLiEl);

// prasukti for of cikla ir prideti title kaip ir padarem su vienu el
let vienasLiEl
for (vienasLiEl of visiLiEl) {
    vienasLiEl.title = "some random title";
}




// event target 
const mainListEl = document.body
mainListEl.addEventListener('click', function(event) {
    console.log(event.target);
    event.target.style.backgroundColor = "black";
    event.target.style.color = "white";

})