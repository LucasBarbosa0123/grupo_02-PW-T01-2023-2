console.log("passei por aqui 0000");
firebase.auth().onAuthStateChanged(user => {
    if(!user){
        window.location.href = "./../login/login.html";
        console.log("passei por aqui");
    }
})
function logout(){
    firebase.auth().signOut().then(() => {
        window.location.href = "./../login/login.html"
    }).catch(() => {
        alert('Erro ao fazer logout');
    })
}