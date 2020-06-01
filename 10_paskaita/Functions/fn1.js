// parasyti funkcija kuri grazina paduoto masyvo vidurki. 

const myNumber = [ 5, 0,15, -45, 12, -15, 11 ]
console.log(myNumber);


function arrayAverage(myArr) {

    // gaunam kiek yra lementu
    const kiekEl = myArr.length;
    let suma = 0;
    // for ciklas gauti sumai
    for (let i=0; i<kiekEl; i++) {
        suma += myArr[i]
    }
    console.log({suma}, {kiekEl});
    
    // apskaiciuti vidurki 
    return suma / kiekEl

}



let rez = arrayAverage(myNumber);

console.log(rez);
