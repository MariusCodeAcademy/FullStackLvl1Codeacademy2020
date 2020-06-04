
const peopleArray = [
  {
    name: 'Serbentautas',
    surname: 'Bordiūras',
    age: 31
  },
  {
    name: 'Monitorė',
    surname: 'Vaizdinienė',
    age: 28
  },
  {
    name: 'Sandra',
    surname: 'Barantaitė',
    age: 32
  },
  {
    name: 'Velinas',
    surname: 'Dviratis',
    age: 25
  },
  {
    name: 'Vajetauskas',
    surname: 'Ištiktenis',
    age: 11
  },
  {
    name: 'Kęstas',
    surname: 'Paskęstas',
    age: 12
  },
  {
    name: 'Marytė',
    surname: 'Grėblytė',
    age: 44
  },
];


// FOR ciklas


// 1. Atrinkite naują žmonių masyvą, kuriame būtų tik jaunesni nei 30 metų žmonės. Atspausdinkite.
// 2. Suskaičiuokite visų žmonių esančių 'peopleArray' amžiaus vidurkį. Atspausdinkite.
// 3. atspauskinkite visus objektus html'e. kiekvienas objektas turetu buti kvadratas kuriame
//    yra vardas, po juo pavarde, po juo "amzius xx". turetu tilppti 4 kvadratai eiluteje.
//    (extra) sumazinus ekrana turetu tilpti tik 2 kvadratai per eilute. 
// 4. sukurkite html input elementus vardui, pavardei, ir amziui. pridekite mygtuka kuri paspaudus
//    sukuriamas objektas su ivestomis reiksmemis ir pridedamas prie masyvo. 
//    isitikinkite kad veikia.
// 5. Sukurkite mygtuka kuri paspaudus body spalva tampa "black" o texto "white". 
// 6. Sukurkite 5 ar daugiau spalvu masyva. sukurtike mygtuka "color change". Padarykite kad paspaudus
//    mygtuka butu paimama pirma spalva ir ta spalva nudazomas html <body> elementas. paspaudus antra karta
//    imama kita spalva. jei tai paskutine spalva viskas prasideda is naujo. 
//    (extra) atspausdinkite didelem raidem spalvos pavadinimas ekrano viduryje 






// atspausdinti visus masyvo vardus peopleArray

for (let i=0; i<peopleArray.length; i++){
    console.log(peopleArray[i].name);
}