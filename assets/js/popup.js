function openPopup() {
  const overlay = document.getElementById("popupOverlay");
  overlay.classList.add("active");
  document.body.style.overflow = "hidden"; // Empêche le scroll du body
}

function closePopup() {
  const overlay = document.getElementById("popupOverlay");
  overlay.classList.remove("active");
  document.body.style.overflow = "auto"; // Restaure le scroll du body

  // Réinitialise le formulaire
  document.getElementById("addForm").reset();
}

function closePopupOnOverlay(event) {
  // Ferme la pop-up seulement si on clique sur l'overlay, pas sur le contenu
  if (event.target === event.currentTarget) {
    closePopup();
  }
}

