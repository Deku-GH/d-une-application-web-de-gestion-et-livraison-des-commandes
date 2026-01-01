// Commandes en cours - Livreur

document.addEventListener('DOMContentLoaded', function() {
    // Marquer une commande comme expédiée
    const expedierButtons = document.querySelectorAll('button[class*="bg-green-600"]');
    expedierButtons.forEach(button => {
        button.addEventListener('click', function() {
            const commandeCard = this.closest('.bg-white');
            const commandeId = commandeCard.querySelector('h3').textContent;
            
            if (confirm(`Marquer la ${commandeId} comme expédiée ?`)) {
                // Simulation - À remplacer par un appel API
                console.log('Commande marquée comme expédiée:', commandeId);
                alert('Commande marquée comme expédiée ! Le client sera notifié.');
                
                // Mettre à jour l'interface
                const statusBadge = commandeCard.querySelector('.bg-indigo-100');
                if (statusBadge) {
                    statusBadge.textContent = 'Expédiée';
                    statusBadge.className = 'px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold';
                }
                
                // Changer le bouton
                this.innerHTML = '<i class="fas fa-check mr-2"></i>Expédiée';
                this.className = 'px-4 py-2 bg-gray-100 text-gray-600 rounded-lg cursor-default';
                this.disabled = true;
            }
        });
    });
});

