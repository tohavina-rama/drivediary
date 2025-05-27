
<div class="popup-overlay" id="popupOverlay" onclick="closePopupOnOverlay(event)">
    <div class="popup">
        <button class="close-btn" onclick="closePopup()">&times;</button>
        <h2>Ajouter un élément</h2>
        <form id="addForm" onsubmit="submitForm(event)">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone">
            </div>

            <div class="form-group">
                <label for="categorie">Catégorie :</label>
                <select id="categorie" name="categorie" required>
                    <option value="">Sélectionner une catégorie</option>
                    <option value="personnel">Personnel</option>
                    <option value="professionnel">Professionnel</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" placeholder="Décrivez brièvement..."></textarea>
            </div>

            <div class="form-buttons">
                <button type="submit" class="btn btn-submit">Ajouter</button>
                <button type="button" class="btn btn-cancel" onclick="closePopup()">Annuler</button>
            </div>
        </form>
    </div>
</div>