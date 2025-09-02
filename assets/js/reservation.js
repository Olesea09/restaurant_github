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
var sp = document.getElementById("validerprenom");


prenom.addEventListener('focus', focusPn);
function focusPn() {
    sp.textContent = "veuillez saisir votre prenom"
    sp.style.color = "green";
}


prenom.addEventListener("blur", blurPn);
function blurPn() {
    if (prenom.value == "") {
        sp.textContent = "Erreur, le champ est obligatoire";
        sp.style.color = "red";

    } else {
        sp.textContent = "";
        prenom.value = prenom.value.substring(0, 1).toUpperCase() + prenom.value.substring(1).toLowerCase();
    }
}


//GESTION DE LA DATE ET DE LHEURE ( date et heur ne peuvent pas etre inferieur à la date et à l'heure actuelle)
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('date');
    var timeInput = document.getElementById('heure');

    // Obtenez la date actuelle au format YYYY-MM-DD
    var currentDate = new Date().toISOString().split('T')[0];

    // Obtenez la date actuelle pour la propriété max (année + 1)
    var nextYear = new Date();
    nextYear.setFullYear(nextYear.getFullYear() + 1);
    var nextYearDate = nextYear.toISOString().split('T')[0];

    // Définissez les propriétés min et max de l'élément input date
    dateInput.min = currentDate;
    dateInput.max = nextYearDate;

    // Ajoutez un écouteur d'événements sur le changement de l'heure
    timeInput.addEventListener('input', function () {
        // Obtenez la date actuelle au format YYYY-MM-DD
        var currentDate = new Date().toISOString().split('T')[0];

        // Obtenez l'heure actuelle au format HH:mm
        var currentTime = new Date().toLocaleTimeString('fr-FR', { hour12: false });

        // Obtenez la date et l'heure sélectionnées dans les éléments input
        var selectedDate = dateInput.value;
        var selectedTime = timeInput.value;

        // Concaténez la date et l'heure pour comparer avec la date et l'heure actuelles
        var selectedDateTime = selectedDate + 'T' + selectedTime;

        // Comparez la date et l'heure sélectionnées avec la date et l'heure actuelles
        if (selectedDate < currentDate) {
            // Si la date sélectionnée est inférieure à la date actuelle, affichez un message d'erreur
            dateInput.setCustomValidity('La date ne peut pas être inférieure à la date actuelle');
            timeInput.setCustomValidity('');
        } else if (selectedDateTime < currentDate + 'T' + currentTime) {
            // Si la date et l'heure sélectionnées sont inférieures à la date et à l'heure actuelles, affichez un message d'erreur
            dateInput.setCustomValidity('La date ne peut pas être inférieure à la date actuelle');
            timeInput.setCustomValidity('L\'heure ne peut pas être inférieure à l\'heure actuelle');
        } else {
            // Réinitialisez les validations personnalisées
            dateInput.setCustomValidity('');
            timeInput.setCustomValidity('');
        }
    });
});


var nb_heuresInput = document.getElementById("nb_heures");
var nb_heuresSpan = document.getElementById("valider_nb_heures");

nb_heuresInput.addEventListener("focus", function () {
    nb_heuresSpan.textContent = "Veuillez saisir le nombre d'heures (entre 1 et 4)";
    nb_heuresSpan.style.color = "green";
});

nb_heuresInput.addEventListener("blur", function () {
    var nb_heuresValue = nb_heuresInput.value;
    if (nb_heuresValue < 1 || nb_heuresValue > 4) {
        nb_heuresSpan.textContent = "Erreur, veuillez saisir un nombre entre 1 et 4";
        nb_heuresSpan.style.color = "red";
    } else {
        nb_heuresSpan.textContent = "";
    }
});



function confirmerAttente() {
    var confirme = confirm("La table est déjà réservée. Souhaitez-vous être ajouté à la liste d'attente ?");
    
    if (confirme) {
        // Utilisation d'AJAX pour soumettre le formulaire
        var formData = $('#form').serialize();

        $.ajax({
            type: 'POST',
            url: 'reservation.php',
            data: formData,
            success: function(response) {
                alert(response); // Afficher la réponse
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    } else {
        alert("Choisissez un autre créneau.");
    }
}