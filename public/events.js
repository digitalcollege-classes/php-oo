// Estruturado
let alunos = [
    'Maria',
    'Chiquinha',
    'Liduina',
];


function addNoCorpoDoHTML(nome) {
    document.body.innerHTML += nome; 
}

for (let i = 0; i < alunos.length; i++) {
    addNoCorpoDoHTML(alunos[i]);
}
