
const modal = document.getElementById('modal');
const closeModalBtn = document.querySelector('.close');

closeModalBtn.addEventListener('click', function() {
    window.location.href = 'connect.php'; // Redirection vers la page de connexion
});

var nam = document.getElementById("nom");
var span = document.getElementById("validernom");
// on a declaré une fonction a l'interieur de l'appel d'une autre fonction
// programmer le gain du focus
nam.addEventListener("focus", function () {
    span.textContent = "Veuillez saisir votre nom";
    span.style.color = "green";
});



// programmer la perte du focus avec blur
nam.addEventListener("blur", function () {
    if (nam.value == "") {
        span.textContent = "Erreur, le champ est obligatoire"
        span.style.color = "red";
    } else {
        span.textContent = "";
        nam.value = nam.value.toUpperCase();
    }

});


var prenom = document.getElementById("prenom");
var spr = document.getElementById("validerprenom");


prenom.addEventListener('focus', focusPn);
function focusPn() {
    spr.textContent = "Veuillez saisir votre prenom"
    spr.style.color = "green";
}


prenom.addEventListener("blur", blurPn);
function blurPn() {
    if (prenom.value == "") {
        spr.textContent = "Erreur, le champ est obligatoire";
        spr.style.color = "red";

    } else {
        spr.textContent = "";
        prenom.value = prenom.value.substring(0, 1).toUpperCase() + prenom.value.substring(1).toLowerCase();
    }
}

// validation du mot de passe
var mdpp = document.getElementById("mdp");
var spanm = document.getElementById("validermdp");

mdpp.addEventListener("input", function () {
    if (mdpp.value.length < 4) {
        spanm.textContent = "faible";
        spanm.style.color = "red";
        mdpp.style.color = "red"

    } else
        if (mdpp.value.length >= 4 && mdpp.value.length < 8) {
            spanm.textContent = "Moyen";
            spanm.style.color = "orange";
            mdpp.style.color = "orange"
        }
        else {
            spanm.textContent = "Bon";
            spanm.style.color = "green";
            mdpp.style.color = "green"
        }

});
// validation du l'email
var mail = document.getElementById("email");
var spp = document.getElementById("valideremail")

mail.addEventListener("input", function () {
    // indexof rechercher un caractere dans une chaine
    if (mail.value.indexOf('@') != -1) {
        spp.textContent = "Email valide";
        spp.style.color = "green"
    } else {
        spp.textContent = "Email invalide"
        spp.style.color = "red"
    }
})


const password = document.getElementById("mdp");
const confirmPassword = document.getElementById("cmdpp");
const passwordMatchMsg = document.getElementById("cmdp");

// Ajout d'un écouteur d'événement "input" pour le champ "Confirmer le mot de passe"
confirmPassword.addEventListener("input", function () {
    // Vérification si les mots de passe correspondent
    if (confirmPassword.value === password.value) {
        // Les mots de passe correspondent, afficher un message dans le span correspondant
        passwordMatchMsg.textContent = "Les mots de passe correspondent";
        passwordMatchMsg.style.color = "green";
    } else {
        // Les mots de passe ne correspondent pas, afficher un message dans le span correspondant
        passwordMatchMsg.textContent = "Les mots de passe ne correspondent pas";
        passwordMatchMsg.style.color = "red";
    }
});