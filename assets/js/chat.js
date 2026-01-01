// Chat - Gestion des messages

document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chatForm');
    const messageInput = document.getElementById('messageInput');
    const dashboardSelector = document.getElementById('dashboardSelector');
    
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
    
    // Envoi de message
    if (chatForm) {
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const message = messageInput.value.trim();
            if (!message) return;
            
            // Simulation - À remplacer par un appel API
            console.log('Message envoyé:', message);
            
            // Ajouter le message à l'interface (simulation)
            const messagesContainer = document.querySelector('.space-y-4');
            if (messagesContainer) {
                const messageDiv = document.createElement('div');
                messageDiv.className = 'flex items-start space-x-2 justify-end';
                messageDiv.innerHTML = `
                    <div class="flex-1 flex justify-end">
                        <div>
                            <div class="bg-indigo-600 text-white rounded-lg p-3 shadow-sm">
                                <p class="text-sm">${message}</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1 text-right">${new Date().toLocaleTimeString('fr-FR', {hour: '2-digit', minute: '2-digit'})}</p>
                        </div>
                    </div>
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user text-gray-600 text-xs"></i>
                    </div>
                `;
                messagesContainer.appendChild(messageDiv);
                
                // Scroll vers le bas
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }
            
            messageInput.value = '';
        });
    }
});

