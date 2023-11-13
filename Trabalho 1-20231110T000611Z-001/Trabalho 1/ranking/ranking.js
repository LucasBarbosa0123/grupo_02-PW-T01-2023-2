const nome = "";
const pontuacao = 0;


window.onload = function(){
const item = document.createElement("p");
item.innerText = `Nome: ${nome}, Pontuação: ${pontuacao}`;
document.getElementById('lista').appendChild(item);
}