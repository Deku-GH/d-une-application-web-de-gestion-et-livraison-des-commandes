// Détail de la commande - Livreur

document.addEventListener('DOMContentLoaded', function() {
    // Formulaire d'offre
    const offerForm = document.getElementById('offerForm');
    
    if (offerForm) {
        offerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(offerForm);
            const data = {
                prix: parseFloat(formData.get('prix')),
                duree: formData.get('duree'),
                vehicule: formData.get('vehicule'),
                options: formData.getAll('options[]')
            };
            
            // Validation
            if (data.prix <= 0) {
                alert('Le prix doit être supérieur à 0');
                return;
            }
            
            if (!data.duree || !data.vehicule) {
                alert('Veuillez remplir tous les champs obligatoires');
                return;
            }
            
            // Simulation - À remplacer par un appel API
            console.log('Offre envoyée:', data);
            
            alert('Offre envoyée avec succès !');
            offerForm.reset();
            
            // Recharger la page pour afficher l'offre
            // window.location.reload();
        });
    }
    
    // Changer l'état de la commande à "Expédiée" (si la commande est en cours)
    const expedierButtons = document.querySelectorAll('button');
    expedierButtons.forEach(button => {
        if (button.textContent.includes('Expédiée') || button.textContent.includes('Marquer comme expédiée')) {
            button.addEventListener('click', function() {
                if (confirm('Marquer cette commande comme expédiée ?')) {
                    // Simulation - À remplacer par un appel API
                    console.log('Commande marquée comme expédiée');
                    alert('Commande marquée comme expédiée');
                    // Recharger la page
                    // window.location.reload();
                }
            });
        }
    });
});

