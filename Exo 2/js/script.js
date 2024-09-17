
const inputTask = document.querySelector('.inputTask');
const submitButton = document.getElementById('btn');
const todoCards = document.getElementById('todoCards');
const todoCard = document.querySelector('.todoCard');
const addBtn = document.getElementById('btn');
const taskContainer = document.getElementById('btn');
const delBtn = document.querySelector('.delBtn');

let nBTask = 0; // Nombre inital de taskCard
count.innerHTML = nBTask;

addBtn.addEventListener('click', addTask);

function addTask(){

    addCount();

    var task = document.createElement('div'); //Création d'une nouvelle balise div

    task.classList.toggle("todoCard"); // Elle aura comme class "todoCard"

    todoCards.appendChild(task); // On l'implante directement dans le html, dans la div "todoCards"

    var taskText = document.createElement('p'); // création d'une nouvelle balise p 

    taskText.textContent = inputTask.value; // Le texte contenu dans la balise p sera égale aux textes contenu dans l'input

    task.appendChild(taskText); // Implantation de la balise p dans la div ciblé "todoCard"

    var newDelBtn = document.createElement('button'); // Création d'une balise button

    newDelBtn.classList.toggle("delBtn"); // Elle aura comme class "delBtn"

    newDelBtn.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>'; // On insère dans la balise une ligne de code HTML qui sera l'icone de suppression

    task.appendChild(newDelBtn); // On implante le tout dans le html, dans la div "todoCards"

    newDelBtn.addEventListener('click', function() {
        deleteTask(task);
        delCount();
    });
    task.addEventListener('click', function() {
        completTask(task);
    });
}

delBtn.addEventListener('click', function() {
    deleteTask(todoCard);
    delCount();
});

function deleteTask(task){
    task.remove();
}

function addCount() {
    nBTask = nBTask + 1;
    count.innerHTML = nBTask;
}
function delCount() {
    nBTask = nBTask - 1;
    count.innerHTML = nBTask;
}

function completTask(task) {
    task.classList.toggle("todoCardComplet"); //
};
