const peopleArray = [{
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


// 3. atspauskinkite visus objektus html'e. kiekvienas objektas turetu buti kvadratas kuriame
//    yra vardas, po juo pavarde, po juo "amzius xx". turetu tilppti 4 kvadratai eiluteje.


const vienaObj = {
    name: 'Serbentautas',
    surname: 'Bordiūras',
    age: 31
}

// nusitaikyti i elementa kuriame atvaizduosime dalykus

const outputEl = document.getElementById("output");

outputEl.innerHTML = "<h1> Hello </h1>";

// atsapusdinam viena elementa
outputEl.innerHTML = `
        <article class="card">
            <h4>${vienaObj.name}</h4>
            <h4>${vienaObj.surname}</h4>
            <h4>${vienaObj.age}</h4>
        </article>
`;


// sukurti struktura ir atvaizduoti
let strinHtml = '';
peopleArray.forEach(function(person) {
    strinHtml += `
    <article class="card">
        <h4>${person.name}</h4>
        <h4>${person.surname}</h4>
        <h4>${person.age}</h4>
    </article>
`;

});

// isvedame sugeneruota html texta i output elementa

outputEl.innerHTML = strinHtml;