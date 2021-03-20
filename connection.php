<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new mysqli("db", "root", $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE_NAME"]);
                // self::$instance = new PDO('mysql:host=localhost:8082;dbname=$_ENV["DATABASE_NAME"]', 'root', $_ENV["DATABASE_PASSWORD"]);
                // self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
    public static function closeConnection() {
        self::$instance->close();
    }
}