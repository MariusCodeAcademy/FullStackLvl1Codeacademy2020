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

// enter mygtuko funkcionalumas
inputElement.addEventListener('keyup', function(event) {
    // console.log(event);
    // pasitikrinam ar buvo paspaustas enter
    if (event.keyCode === 13) {
        // paspaustas enter
        let inputVal = inputElement.value;
        // suurti nauja objekta is reiksmes 
        todos.push({ name: inputVal, done: false, edit: false })
        render();
        inputElement.value = '';
    }
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

//  ikelti ji i dom 
function addElToList(el) {
    listElement.innerHTML = el;
}

// pagrindine generavimo funkcija sugeneruoti li el is masyvo
function render() {
    listElement.innerHTML = '';

    // jei nera nei vieno todo
    if (todos.length === 0) {
        listElement.innerHtml = `<p class="no-todo-text">There are no todos, Please add some</p>`;
    }



    let toDoId = 0;
    // paimame name reikskmes is todos masyvo ir sukuriam li HTML text
    // ikeliam sukurta struktura i html
    todos.forEach(function(todo) {
        listElement.innerHTML += `
                                <li class="item">
                                    <i class="fa fa-circle-thin complete" aria-hidden="true"></i>
                                    <span class="text">${todo.name}</span>
                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                                </li>
                                `;
    });


}

render();