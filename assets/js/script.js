function openPopup() {
            const overlay = document.getElementById('popupOverlay');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Empêche le scroll du body
        }

        function closePopup() {
            const overlay = document.getElementById('popupOverlay');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto'; // Restaure le scroll du body
            
            // Réinitialise le formulaire
            document.getElementById('addForm').reset();
        }

        function closePopupOnOverlay(event) {
            // Ferme la pop-up seulement si on clique sur l'overlay, pas sur le contenu
            if (event.target === event.currentTarget) {
                closePopup();
            }
        }

        function submitForm(event) {
            event.preventDefault();
            
            // Récupère les données du formulaire
            const formData = new FormData(event.target);
            const data = {
                nom: formData.get('nom'),
                email: formData.get('email'),
                telephone: formData.get('telephone'),
                categorie: formData.get('categorie'),
                description: formData.get('description')
            };
            
            // Simule l'ajout des données (ici on pourrait envoyer à un serveur)
            console.log('Données ajoutées:', data);
            alert('Élément ajouté avec succès !');
            
            // Ferme la pop-up
            closePopup();
        }

        // Ferme la pop-up avec la touche Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closePopup();
            }
        });