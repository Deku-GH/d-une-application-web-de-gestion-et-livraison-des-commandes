<?php
namespace Views;

require __DIR__ . '/../vendor/autoload.php';
use App\Services\Cruduser;
use App\Services\UserLoaging;





if($_POST){
    $crud = new Cruduser();
$user = $crud->checkaccount($_POST['email'], $_POST['password']);

    if ($user) {
    UserLoaging::byRole($user);
} else {
    UserLoaging::toLogin();
}

}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de Livraison - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Application de Livraison</h1>
                <p class="text-gray-600">Connectez-vous à votre compte</p>
            </div>

            <form   action="#" method="post" id="loginForm" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                           placeholder="votre@email.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">Mot de passe oublié ?</a>
                </div>

                <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition shadow-lg hover:shadow-xl">
                    Se connecter
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">Pas encore de compte ? 
                    <a href="register.html" class="text-indigo-600 font-semibold hover:text-indigo-800">S'inscrire</a>
                </p>
            </div>
        </div>
    </div>

    <script src="assets/js/auth.js"></script>
</body>
</html>

