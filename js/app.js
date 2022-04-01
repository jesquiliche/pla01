// Comprueba si es un DNI correcto (entre 5 y 8 letras seguidas de la letra que corresponda).


var form = document.getElementById("formulario");
var nif = document.getElementById("nif");
var nifError = document.getElementById("nifError");
var emailErro = document.getElementById("emailError");
var email = document.getElementById("email");
var btnEnviar = document.getElementById("btnEnviar");

//Validación de formulario
form.addEventListener("submit", function (evt) {
    evt.preventDefault();
    var validado = true;
    var validaDNI = validateDNI(nif.value, nifError);

    var validaEmail = validateEmail(email.value, emailError);

    if (validaEmail && validaDNI) {
        alert("Su petición ha sido procesada sadisfactoriamente")
        this.submit();
    } else {
        alert("Su formulario contiene datos incorrectos.")
        return false;
    }
});