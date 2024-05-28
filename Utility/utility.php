<?php
class Utility
{
    private static $db_host = '127.0.0.1';
    private static $db_name = 'nama_database';
    private static $db_user = 'root'; //gausah di ubah kalo gapernah di set
    private static $db_password = ''; //ini juga

    private static function getConnection()
    {
        try {
            $pdo = new PDO("mysql:host=" . self::$db_host . ";dbname=" . self::$db_name, self::$db_user, self::$db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            error_log("Koneksi database gagal: " . $e->getMessage());
            die("Koneksi database gagal: " . $e->getMessage());
        }
    }
    public static function login($username, $password)
    {
        try {
            $pdo = new PDO("mysql:host=" . self::$db_host . ";dbname=" . self::$db_name, self::$db_user, self::$db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            error_log("Koneksi database gagal: " . $e->getMessage());
            die("Koneksi database gagal: " . $e->getMessage());
        }
    }
}
