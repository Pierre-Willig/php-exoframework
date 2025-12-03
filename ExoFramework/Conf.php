<?php
    class Conf {
    
    private static $databases = array(
        
        // serveur 
        'hostname' => 'localhost',
    
        // Nom de la bdd
        'database' => 'vehicules',
    
        // Utilisateur ('root' par défault)
        'login' => 'root',
        
        // Mot de passe
        'password' => ''
    );
    
    public static function getLogin() {

            return self::$databases['login'];
    }
   
    public static function getHostName(): string{
        return self::$databases['hostname'];
    }

    public static function getPassword(): string{
        return self::$databases['password'];
    }

    public static function getDatabase(): string{
        return self::$databases['database'];
    }
}
?>