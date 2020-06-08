// padaryti kad ivestas textas i ivesties lauka
// atsidurtu ideleje dezuteje

// nusitaikyti i reikiamus elementus

// nusitaika i ivesties lauka
const inputEl = document.querySelector(".input-main");
// nusitaikyti i ten kur irasysim texta
const outputEl = document.querySelector(".large > h1");
// nusitaikyti i mygtuka.
const btn = document.querySelector(".btn");


// mygtukui ivykiu pasiklausymas
btn.addEventListener("click", function() {

    // inpute ivesta reiksme
    const inputText = inputEl.value;

    // perkeliame ivesta texta i isvesties el
    outputEl.innerHTML = inputText
})