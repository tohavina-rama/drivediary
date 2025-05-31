document.addEventListener("DOMContentLoaded", function () {
  function testForm() {
    //vérification de l'heure de départ et de l'heure d'arrivée
    const heureDepart = document.querySelector("#heure_depart").value;
    const heureArrivee = document.querySelector("#heure_arrivee").value;

    const dateDepart = heureDepart ? new Date(heureDepart) : null;
    const dateArrivee = heureArrivee ? new Date(heureArrivee) : null;

    if (dateDepart >= dateArrivee) {
      document.getElementById("resultat").innerHTML =
        "L'heure de départ doit être antérieure à l'heure d'arrivée.";
      document.getElementById("resultat").className = "resultat-erreur";
      return false;
    }

    //vérification
    document.getElementById("resultat").className = "resultat-hide";
    return true;
  }

  const form = document.querySelector("#addForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    /* let man = querySelector("#man");*/
    if (testForm()) {
      fetch("/includes/sendForm.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          console.log("Réponse reçue:", response);
          console.log("Status:", response.status);
          return response.text();
        })
        .then((data) => {
          console.log("Données PHP:", data);
          document.getElementById("resultat").innerHTML = data;
        })
        .catch((error) => {
          console.log("ERREUR:", error);
          document.getElementById("resultat").innerHTML = "ERREUR: " + error;
        });
    }
  });
});
