// Page de profil

document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.getElementById('profileForm');
    const dashboardSelector = document.getElementById('dashboardSelector');
    
    if (profileForm) {
        profileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(profileForm);
            const data = Object.fromEntries(formData);
            
            // Simulation - À remplacer par un appel API
            console.log('Mise à jour du profil:', data);
            alert('Profil mis à jour avec succès !');
        });
    }
    
    // Sélecteur de dashboard
    if (dashboardSelector) {
        dashboardSelector.addEventListener('change', function() {
            const selectedDashboard = this.value;
            
            switch(selectedDashboard) {
                case 'client':
                    window.location.href = 'dashboard-client.html';
                    break;
                case 'livreur':
                    window.location.href = 'dashboard-livreur.html';
                    break;
                case 'admin':
                    window.location.href = 'dashboard-admin.html';
                    break;
            }
        });
    }
});

