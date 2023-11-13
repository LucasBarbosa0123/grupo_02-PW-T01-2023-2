firebase.auth().onAuthStateChanged(user =>{
    if(user){
        window.location.href = "./../Home/home.html";
        console.log("passei por aqui");
    }
})
function onChangeEmail(){
    toggleButtonsDisable();
    toggleEmailErrors();
}
function onChangePassword(){
    toggleButtonsDisable();
    togglePasswordErrors();
}
function login() {
    showLoading();
    firebase.auth().signInWithEmailAndPassword(form.email().value,form.password().value).then(response => {
        console.log("success", response);
        window.location.href = "./../Home/home.html";
    }).catch(error => {
        console.log("error", error);
        alert(getErrorMessage(error));
    });
}
function getErrorMessage(error){
    if(error.code == "auth/user-not-found"){
        return "Usuário não encontrado"
    }
    if(error.code == "auth/wrong-password"){
        return "Senha inválida";
    }
    return error.message;
}
function register() {
    window.location.href = "register.html";
    showLoading();
}
function recoverPassword(){
    showLoading();
    firebase.auth().sendPasswordResetEmail(form.email().value).then(() => {
        hideloading();
        alert("Email enviado com sucesso");
    }).catch(error => {
        hideloading();
        alert(getErrorMessage(error));
    });
}
function isEmailValid(){
    const email = form.email().value;
    console.log(`${email}`);
    if(!email){
        return false
    }
    return validateEmail(email);
}
function toggleEmailErrors(){
    const email = form.email().value;
    form.emailRequiredError().style.display = email ? "none" : "block";
    form.emailInvalidError().style.display = validateEmail(email) ? "none" : "block";
}
function togglePasswordErrors(){
    const password = form.password().value;
    form.passwordRequiredError().style.display = password ? "none" : " block";
}
function toggleButtonsDisable(){
    const emailValid = isEmailValid();
    form.recoverPassword().disabled = !emailValid;

    const passwordValid = isPasswordValid();
    form.loginButton().disabled = !emailValid || !passwordValid;
}
function isPasswordValid(){
    const password = form.password().value;
    if(!password){
        return false;
    }
    return true;
}
const form = {
    email: () => document.getElementById('email'),
    emailInvalidError: () => document.getElementById('email-invalid-error'),
    emailRequiredError: () => document.getElementById('email-required-error'),
    loginButton: () => document.getElementById('login-button'),
    password: () => document.getElementById('password'),
    passwordRequiredError: () => document.getElementById('password-required-error'),
    recoverPassword: () => document.getElementById('recover-password-button')
}