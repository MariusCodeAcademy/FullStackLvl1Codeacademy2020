console.log("<li>item 1</li>");
// sukuriame html el is string
let liElement = "<li>item 100</li>";

console.log(liElement);

// gauname saraso ul el paga jo id
document.getElementById('saras').innerHTML = liElement;

let vienasIlgasStringas = '';
for(let i=1; i<=100; i++) {
  vienasIlgasStringas += '<li>item ' + i + '</li>';
}

console.log(vienasIlgasStringas);

document.getElementById('saras').innerHTML = vienasIlgasStringas;

// const vardai = ['jonas', 'onute']