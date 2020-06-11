console.log('hello');

const todos = [
    { name: 'do stuff', done: false, edit: false },
    { name: 'Learn Html', done: false, edit: false },
    { name: 'Style with Css', done: false, edit: false },
    { name: 'Act with JS', done: false, edit: false },
];

// nusitaikom i elementus su kuriais dirbsime
const listElement = document.getElementById("list");
const inputElement = document.getElementById("input");
const addBtnElement = document.getElementById('add-todo-btn')


// Prideti ivykiu pasiklausyma mygtukui
addBtnElement.addEventListener('click', function() {
    // issisaugome ivesta reiksme
    // paimti reiksme is ivesties lauko
    let inputVal = inputElement.value;
    console.log({ inputVal });
    // suurti nauja objekta is reiksmes 
    todos.push({ name: inputVal, done: false, edit: false })
    render();
    inputElement.value = '';
})



// suformuoti li elementa ir

function textToLi(text) {
    let result = `
    <li class="item">
        <i class="fa fa-circle-thin complete" aria-hidden="true"></i>
        <span class="text">${text}</span>
        <i class="fa fa-trash-o delete" aria-hidden="true"></i>
    </li>
    `;
    return result
}



// console.log(textToLi("Go for a Walk"));

//  ikelti ji i dom 
function addElToList(el) {
    listElement.innerHTML = el;
}


function render() {
    listElement.innerHTML = '';
    let output = ''
        // paimame name reikskmes is todos masyvo ir sukuriam li HTML text
    todos.forEach(function(todo) {
        output += textToLi(todo.name)
    });
    // ikeliam sukurta struktura i html
    addElToList(output);
}

render();