console.log('hello');

const todos = [
    { name: 'do stuff', done: true, edit: false },
    { name: 'Learn Html', done: false, edit: false },
    { name: 'Style with Css', done: true, edit: false },
    { name: 'Act with JS', done: false, edit: false },
];

// nusitaikom i elementus su kuriais dirbsime
const listElement = document.getElementById("list");
const inputElement = document.getElementById("input");
const addBtnElement = document.getElementById('add-todo-btn')

const CHECK = 'fa-check-circle';
const UNCHECK = 'fa-circle-thin';
const LINE_THROUGH = 'line-through';


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
        listElement.innerHTML = `<p class="no-todo-text">There are no todos, Please add some</p>`;
        return;
    }






    let toDoId = 0;
    // paimame name reikskmes is todos masyvo ir sukuriam li HTML text
    // ikeliam sukurta struktura i html
    todos.forEach(function(todo) {

        // pasitikriname kokia yra done reiksme ir atitinkamai priskiriame klase
        //                  if         true     false 
        let classCheck = todo.done ? CHECK : UNCHECK;
        let textChecked = todo.done ? LINE_THROUGH : '';

        listElement.innerHTML += `
                                <li class="item" data-todo-id=${toDoId} >
                                    <i class="fa ${classCheck} complete" aria-hidden="true"></i>
                                    <span class="text ${textChecked}">${todo.name}</span>
                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    <i class="fa fa-trash-o delete" aria-hidden="true"></i>
                                </li>
                                `;
        toDoId++;
    });
}

render();

// prideti nauja todo i masyva ir sugeneruoti 
function addTodo(todoText) {
    todos.push({ name: todoText, done: false, edit: false });
    render();
}

// enter mygtuko funkcionalumas
inputElement.addEventListener('keyup', function(event) {
    // console.log(event);
    // pasitikrinam ar buvo paspaustas enter
    if (event.keyCode === 13) {
        // paspaustas enter
        let inputVal = inputElement.value;
        // suurti nauja objekta is reiksmes 
        addTodo(inputVal)
        inputElement.value = '';
    }
})

// Prideti ivykiu pasiklausyma mygtukui
addBtnElement.addEventListener('click', function() {
    // issisaugome ivesta reiksme
    // paimti reiksme is ivesties lauko
    let inputVal = inputElement.value;
    addTodo(inputVal)
    inputElement.value = '';
})

// istrynimas is masyvo 
function deleteTodo(id) {
    todos.splice(id, 1);
    render();
}



// uzdesim event listeneri ant viso saraso ir atsirinksim ka paspaudem
// =======================================================================
// =======================================================================

listElement.addEventListener('click', function(event) {
    //console.log(event.target);
    //event.target.style.backgroundColor = 'black';

    // elemento istrynimas 
    // pasitikrinam ar paspaudem ant siusklines item
    if (event.target.classList.contains('fa-trash-o')) {
        // console.log(event.target);
        // gauti li elem id ant kurio buvo paspausta siukslinyte
        let todoIdValueFromAttr = event.target.parentElement.getAttribute('data-todo-id');
        // console.log(todoIdValueFromAttr);
        deleteTodo(todoIdValueFromAttr);
    }

})