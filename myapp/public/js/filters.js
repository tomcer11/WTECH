// filters.js
function filterProducts(checkbox) {
    var form = checkbox.form; // Získanie formulára, kde je checkbox
    var formData = new FormData(form); // Vytvorenie dát pre odoslanie na server
    formData.append('bar', 'true'); // Pridanie dodatočného parametra
    var url = form.action; // Získanie URL adresy formulára
    
    // AJAX požiadavka na server
    fetch(url, {
        method: 'GET',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Vloženie HTML obsahu zo servera na stránku
        document.querySelector('.container-fluid').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}
