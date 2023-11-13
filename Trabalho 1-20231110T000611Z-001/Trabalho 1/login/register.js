firebase.auth().onAuthStateChanged(user =>{
    if(user){
        window.location.href = "./../Home/home.html";
    }
})

function onChangeEmail(){
    const email = form.email().value;
    form.emailRequiredError().style.display = email ? "none" : "block";

    form.emailInvalidError().style.display = validateEmail(email) ? "none" : "block";

    toggleRegisterButtonDisable();
}

function onChangePassword(){
    const password = form.password().value;
    form.passwordRequiredError().style.display = password ? "none" : "block";

    form.passwordMimLengthError().style.display = password.length >= 6 ? "none" : "block";

    validatePasswordMatch();
    toggleRegisterButtonDisable();
}

function onChangeConfirmPassword(){
    validatePasswordMatch();
    toggleRegisterButtonDisable();
}

function register(){
    showLoading();
    const email = form.email().value;
    const password = form.password().value;
    firebase.auth().createUserWithEmailAndPassword(email,password).then(() => {
        hideloading();
        window.location.href = "./../Home/index.html"
    }).catch(error => {
        hideloading();
        alert(getErrorMessage(error));
    })
}

function getErrorMessage(error){
    if(error.code == "auth/email-already-in-use"){
        return "Email já esta em uso";
    }
    return error.message;
}

function validatePasswordMatch(){
    const password = form.password().value;
    const confirmPassword = form.confirmPassword().value;

    form.confirmPasswordDoesntMatchError().style.display = password == confirmPassword ? "none" : "block";
}

function toggleRegisterButtonDisable(){
    form.registerButton().disabled = !isFormValid();
}

function isFormValid() {
    const email = form.email().value;
    if(!email || !validateEmail(email)){
        return false;
    }
    const password = form.password().value;
    if(!password || password.length < 6){
        return false;
    }
    const confirmPassword = form.confirmPassword().value;
    if(password != confirmPassword){
        return false;
    }
    return true;
}
function login(){
        window.location.href = "login.html";
        showLoading();

}

const form = {
    confirmPassword: () => document.getElementById('confirmarSenha'),
    confirmPasswordDoesntMatchError: () => document.getElementById('password-doesnt-match-error'),
    email: () => document.getElementById('email'),
    emailInvalidError: () => document.getElementById('email-invalid-error'),
    emailRequiredError: () => document.getElementById('email-required-error'),
    password: () => document.getElementById('senha'),
    passwordRequiredError: () => document.getElementById('password-required-error'),
    passwordMimLengthError: () => document.getElementById('password-min-length-error'),
    registerButton: () => document.getElementById('register-button'),
}