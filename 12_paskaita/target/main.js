// padaryti kad ivestas textas i ivesties lauka
// atsidurtu ideleje dezuteje

// nusitaikyti i reikiamus elementus

// nusitaika i ivesties lauka
const inputEl = document.querySelector(".input-main");
// nusitaikyti i ten kur irasysim texta
const outputEl = document.querySelector(".large > h1");
// nusitaikyti i mygtuka.
const btn = document.querySelector(".btn");
// nusitaikyti i klaidos elementa
const errEl = document.querySelector(".error")


// mygtukui ivykiu pasiklausymas
btn.addEventListener("click", function() {

    // inpute ivesta reiksme
    const inputText = inputEl.value;

    // perkeliame ivesta texta i isvesties el
    outputEl.innerHTML = inputText

    // error handle 
    if (!checkLength(inputText)) {
        errEl.style.display = 'block';
    } else {
        errEl.style.display = 'none';
    }
})

// elementas.innerHTML = "textas";


// sukuriam funkcija kuri priima texta kaip argumenta,
// ir jei jis trumpesnis nei 3 simboliai grazina false,
// kitu atveju true

function checkLength(text) {
    if (text.length > 3) {
        return true;
    } else {
        return false;
    }
}

console.log(checkLength('1234'));
console.log(checkLength('12'));