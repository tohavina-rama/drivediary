form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const donnees = Object.fromEntries(formData);
    console.log(donnees);
});