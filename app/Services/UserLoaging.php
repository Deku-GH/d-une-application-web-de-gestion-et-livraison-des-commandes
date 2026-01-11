<?php

namespace App\Services;
class  UserLoaging
{
    public static function byRole(array $user): void
    {
        // if (!isset($user['role'])) {
        //     self::toLogin();
        // }

        switch ($user['role']) {
            case 'CLIENT':
                header("Location: ../../views/dashboard-client.php");
                exit;

            case 'ADMIN':
                header("Location: ../../views/dashboard-admin.html");
                exit;

            case 'LIVREUR':
                header("Location: ../../views/dashboard-livreur.html");
                exit;

            default:
                echo "ROLE غير معروف";
                exit;
        }
    }

    public static function toLogin(): void
    {
        header("Location: ../../views/index.html");
        exit;
    }
}
