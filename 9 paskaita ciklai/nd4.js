console.log('online');
// 4uzd
// Susikurti masyva is skaiciu ir stringu ir boolean tipo 8 nariu ir:
// a. atspausdinti visu skaiciu suma,
// b. atspausdinti sakini is visu string nariu.
// c. sukurti nauja masyva ir i ji sudeti visus boolean tipo narius
          // 0                               .. 7    8
var arr8 = [7, "as", 13, "tu", 15, "ji", 25, true];

// a. atspausdinti visu skaiciu suma,

// psiaudo kodas
var suma4 = 0;
// paimti pirma masyvo nari
var temp = arr8[0];
// patikrinti ar tai yra skaicius
if (typeof temp === 'number') {
  // jei sk tai sudeti su suma
  suma4 += suma4 + temp;
}

console.log(suma4);

// jei ne skaicius, praleisti

// imti antra masyvo nari 

if (typeof arr8[1] === 'number') {
  suma4 += arr8[1];
}
// 3 
if (typeof arr8[2] === 'number') {
  suma4 += arr8[2];
}
// 4 
if (typeof arr8[4] === 'number') {
  suma4 += arr8[4];
}
console.log("4 nariu suma: " + suma4);


// b. atspausdinti sakini is visu string nariu.


var sakinys = '';

if (typeof arr8[0] === 'string') {
  sakinys = sakinys + arr8[0] + ', ';
}
if (typeof arr8[1] === 'string') {
  sakinys = sakinys + arr8[1] + ', ';
}
// 3 
if (typeof arr8[2] === 'string') {
  sakinys += arr8[2] + ', ';
}
// 4 
if (typeof arr8[3] === 'string') {
  sakinys += arr8[3] + '.';
}

console.log("4 string nariu saskinys: " + sakinys);

// c. sukurti nauja masyva ir i ji sudeti visus boolean tipo narius

// gauti paskutini masyvo nari
var ilgis = arr8.length;
console.log('ilgis reiksme: ' + ilgis);
var paskNarys = arr8[ilgis - 1];
console.log({paskNarys});

// patikrinti ar pask narys yra bool ir ideti i masyva jei taip
var boolArr = [];

if (typeof paskNarys === 'boolean') {
  // jei taip ta reiksme istumti i boolArr
  boolArr.push(paskNarys);
}

console.log(boolArr)

var str1 = 'labas';
var str2 = 'vakaras';

var rez = str1 + ' ' + str2 + '! valio'; 
// es2016
var rez = `${str1} ${str2}! valio asddasd asdasd a`;



console.log(rez);


// istraukti sakni 
var num1 = 144; 

var rez2 = Math.sqrt(num1);







// c. sukurti nauja masyva ir i ji sudeti visus boolean tipo narius

//var col = ['blue', 'green', 'red'];

//var ats = [];

// col[1] = ats;
//ats = col[1];
// push
// arr.push(<ka_push>);
//ats.push(col[1]);

//console.log(ats);






// 4 uzd
// Parašykite programą, kuri:
// » Paprašyti įvesti prisijungimo vardą ir slaptažodį
// » Jei vardas admin, slaptažodis turi būti “master”
// » Jei vardas ne admin - tai slaptažodis yra: vardas ir skaičius 11.
// Pvz.: username: andrius, psw: andrius11
// » “Sveiki, admin” arba “Neteisingas slaptažodis”
// » Jei neiįvedė nieko - “Viso gero!”


var tuscia = 0;

if ( tuscia === '' ) {

}
