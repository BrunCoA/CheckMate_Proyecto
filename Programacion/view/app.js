function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (checkboxes.classList.contains("hide")) {
        checkboxes.classList.remove("hide");
    } else {
        checkboxes.classList.add("hide");
    }
}
function showRegistro() {
    var register = document.getElementById("register");
    var form = document.getElementById("form");
    var fAlumno = document.getElementById("formAlumno")
    var fDocente = document.getElementById("formDocente")
    var qReg = document.getElementById("qm-registro")
    if (register.classList.contains("hide")) {
        register.classList.remove("hide");
        form.classList.add("hide");
        fAlumno.classList.add("hide");
        fDocente.classList.add("hide");
        qReg.classList.remove("hide");
    }else{
        register.classList.add("hide");
    }
}
function showLogin() {
    var register = document.getElementById("register");
    var form = document.getElementById("form");
    if (form.classList.contains("hide")) {
        register.classList.add("hide");
        form.classList.remove("hide");
    }
}

function showRegAlumno() {
    var fAlumno = document.getElementById("formAlumno")
    var qReg = document.getElementById("qm-registro")
    if (fAlumno.classList.contains("hide")) {
        fAlumno.classList.remove("hide");
        qReg.classList.add("hide");
    }
}

function showRegDocente() {
    var fDocente = document.getElementById("formDocente")
    var qReg = document.getElementById("qm-registro")
    if (fDocente.classList.contains("hide")) {
        fDocente.classList.remove("hide");
        qReg.classList.add("hide");
    }
}
