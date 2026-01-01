# Application de Livraison - Frontend

Frontend de l'application web de livraison de commandes développé avec **HTML5**, **Tailwind CSS** et **JavaScript ES6+**.

## 📋 Description

Ce projet est le frontend d'une application de livraison permettant de mettre en relation des **clients**, des **livreurs** et un **administrateur**. L'application gère le cycle de vie complet d'une commande, depuis sa création jusqu'à sa livraison et validation finale.

## 🎯 Fonctionnalités

### Authentification
- ✅ Page de connexion (`index.html`)
- ✅ Page d'inscription (`register.html`)
- ✅ Gestion des rôles (Client, Livreur, Admin)

### Client
- ✅ Dashboard client avec sidebar (`dashboard-client.html`)
- ✅ Création de commandes
- ✅ Consultation des commandes
- ✅ Détail d'une commande (`commande-detail.html`)
- ✅ Gestion des offres reçues
- ✅ Notifications
- ✅ Historique des notifications (`historique-notifications.html`)
- ✅ Validation de livraison
- ✅ Page de profil (`profil.html`)
- ✅ Chat avec livreur (`chat.html` - bonus)

### Livreur
- ✅ Dashboard livreur avec sidebar (`dashboard-livreur.html`)
- ✅ Consultation des commandes disponibles
- ✅ Détail d'une commande (`commande-livreur-detail.html`)
- ✅ Envoi d'offres de livraison
- ✅ Gestion des commandes en cours (`commandes-en-cours-livreur.html`)
- ✅ Notifications
- ✅ Historique des notifications
- ✅ Page de profil
- ✅ Chat avec client (bonus)

### Administrateur
- ✅ Dashboard admin avec sidebar (`dashboard-admin.html`)
- ✅ Gestion des utilisateurs
- ✅ Statistiques globales
- ✅ Supervision de l'activité
- ✅ Page de profil

## 🛠️ Technologies utilisées

- **HTML5** - Structure des pages
- **Tailwind CSS** - Framework CSS utilitaire (via CDN)
- **CSS3** - Styles personnalisés (`assets/css/style.css`)
- **JavaScript ES6+** - Interactivité et gestion des événements
- **Font Awesome** - Icônes (via CDN)

## 📁 Structure du projet

```
templateforbreif/
│
├── index.html                          # Page de connexion
├── register.html                       # Page d'inscription
│
├── dashboard-client.html              # Dashboard client (avec sidebar)
├── commande-detail.html               # Détail commande (client)
├── profil.html                         # Page de profil utilisateur
├── historique-notifications.html      # Historique des notifications
├── chat.html                          # Chat client ↔ livreur (bonus)
│
├── dashboard-livreur.html             # Dashboard livreur (avec sidebar)
├── commande-livreur-detail.html       # Détail commande (livreur)
├── commandes-en-cours-livreur.html    # Commandes en cours (livreur)
│
├── dashboard-admin.html                # Dashboard administrateur (avec sidebar)
│
└── assets/
    ├── css/
    │   └── style.css                  # Styles personnalisés
    └── js/
        ├── auth.js                    # Gestion authentification
        ├── dashboard-selector.js     # Sélecteur de dashboard
        ├── dashboard-client.js         # Logique dashboard client
        ├── commande-detail.js         # Logique détail commande (client)
        ├── dashboard-livreur.js       # Logique dashboard livreur
        ├── commande-livreur-detail.js # Logique détail commande (livreur)
        ├── commandes-en-cours-livreur.js # Logique commandes en cours
        ├── dashboard-admin.js         # Logique dashboard admin
        ├── profil.js                 # Logique page profil
        ├── historique-notifications.js # Logique historique notifications
        └── chat.js                   # Logique chat
```

## 🚀 Utilisation

### Installation

Aucune installation n'est nécessaire. Le projet utilise Tailwind CSS via CDN.

### Démarrage

1. Ouvrez `index.html` dans votre navigateur
2. Ou utilisez un serveur local :
   ```bash
   # Avec Python
   python -m http.server 8000
   
   # Avec PHP
   php -S localhost:8000
   
   # Avec Node.js (http-server)
   npx http-server
   ```

3. Accédez à `http://localhost:8000`

## 📝 Notes importantes

### Intégration avec le backend

Les fichiers JavaScript contiennent des **simulations** d'appels API. Pour intégrer avec votre backend PHP :

1. Remplacez les `console.log()` et `alert()` par de vrais appels API (fetch, axios, etc.)
2. Adaptez les URLs des endpoints selon votre architecture backend
3. Gérez les réponses API et mettez à jour l'interface en conséquence

### Exemple d'intégration API

```javascript
// Au lieu de :
console.log('Connexion:', { email, password });

// Utilisez :
fetch('api/login.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({ email, password })
})
.then(response => response.json())
.then(data => {
    // Gérer la réponse
    if (data.success) {
        localStorage.setItem('token', data.token);
        window.location.href = `dashboard-${data.role}.html`;
    }
});
```

## 🆕 Nouvelles fonctionnalités

### Navigation améliorée
- ✅ **Sidebar** dans tous les dashboards avec navigation rapide
- ✅ **Sélecteur de dashboard** en haut à droite pour basculer entre les rôles
- ✅ Navigation cohérente entre toutes les pages
- ✅ Liens vers le profil depuis le nom d'utilisateur

### Pages supplémentaires
- ✅ **Page de profil** (`profil.html`) - Gestion du profil utilisateur
- ✅ **Historique des notifications** (`historique-notifications.html`) - Consultation de toutes les notifications
- ✅ **Chat** (`chat.html`) - Communication client ↔ livreur (bonus)

### Améliorations UX
- ✅ Sidebar fixe avec navigation claire
- ✅ Menu actif mis en évidence
- ✅ Responsive design pour mobile
- ✅ Transitions fluides

## 🎨 Personnalisation

### Couleurs

Les couleurs principales sont définies via Tailwind CSS. Pour les modifier, vous pouvez :
- Utiliser les classes Tailwind personnalisées
- Modifier `assets/css/style.css` pour des styles spécifiques

### Thème

Le thème utilise principalement :
- **Indigo** pour les actions principales
- **Gris** pour les éléments neutres
- **Vert/Rouge/Jaune** pour les statuts

## 📱 Responsive Design

Le frontend est entièrement responsive grâce à Tailwind CSS :
- Mobile-first approach
- Breakpoints : `sm:`, `md:`, `lg:`, `xl:`
- Grilles adaptatives

## 🔒 Sécurité

⚠️ **Important** : Ce frontend est une maquette. Pour la production :
- Implémentez une gestion de session/tokens
- Validez toutes les données côté serveur
- Utilisez HTTPS
- Protégez contre les attaques XSS et CSRF

## 📚 États des commandes

Les commandes peuvent avoir les statuts suivants :
- **Créée** - Commande créée par le client
- **En attente d'offres** - En attente d'offres de livreurs
- **En cours de traitement** - Offre acceptée, livraison en cours
- **Expédiée** - Commande expédiée par le livreur
- **Terminée** - Livraison validée par le client
- **Annulée** - Commande annulée

## 👥 Rôles

- **Client** : Crée des commandes, accepte des offres, valide les livraisons
- **Livreur** : Consulte les commandes, envoie des offres, gère les livraisons
- **Admin** : Gère les utilisateurs, consulte les statistiques

## 📄 Licence

Ce projet est fourni comme template pour les apprenants.

## 🤝 Contribution

Ce frontend est prêt à être intégré avec votre backend PHP POO. N'hésitez pas à l'adapter selon vos besoins spécifiques.

---

**Développé pour le brief projet PHP POO - Application de Livraison**

