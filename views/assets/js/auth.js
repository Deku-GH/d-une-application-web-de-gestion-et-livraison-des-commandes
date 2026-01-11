// Gestion de l'authentification

document.addEventListener('DOMContentLoaded', function() {
    // Formulaire de connexion
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            //  e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Simulation de connexion - À remplacer par un appel API
            console.log('Connexion:', { email, password });
            
            // Redirection selon le rôle (simulation)
            // En production, cela viendrait de la réponse API
            const role = 'client'; // ou 'livreur' ou 'admin'
            
            switch(role) {
                case 'client':
                    window.location.href = 'dashboard-client.html';
                    break;
                case 'livreur':
                    window.location.href = 'dashboard-livreur.html';
                    break;
                case 'admin':
                    window.location.href = 'dashboard-admin.html';
                    break;
                default:
                    alert('Erreur de connexion');
            }
        });
    }
    
    // Formulaire d'inscription
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            //    e.preventDefault();
            
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('password_confirm').value;
            
            // Vérification des mots de passe
            if (password !== passwordConfirm) {
                alert('Les mots de passe ne correspondent pas');
                return;
            }
            
            // Vérification de la longueur du mot de passe
            if (password.length < 8) {
                alert('Le mot de passe doit contenir au moins 8 caractères');
                return;
            }
            
            const formData = {
                nom: document.getElementById('nom').value,
                email: document.getElementById('email').value,
                telephone: document.getElementById('telephone').value,
                role: document.getElementById('role').value,
                password: password
            };
            
            // Simulation d'inscription - À remplacer par un appel API
            console.log('Inscription:', formData);
            
            // Redirection vers la page de connexion
            alert('Inscription réussie ! Vous pouvez maintenant vous connecter.');
            window.location.href = 'index.html';
        });
    }
});

