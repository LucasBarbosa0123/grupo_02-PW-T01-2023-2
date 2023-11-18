  firebase.auth().onAuthStateChanged(user => {
    if (user) {
        emailUsuario = user.email;

        // Usando AJAX para enviar dados para o PHP
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "ranking.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
        // Enviando dados como parâmetros POST
        var data = "email=" + encodeURIComponent(emailUsuario);
        xhr.send(data);
        console.log("Email do usuário:", emailUsuario);
    } else {
        console.log("Usuário não autenticado");
    }
});