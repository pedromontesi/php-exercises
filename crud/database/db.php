<?php

class Database
{
    private $host = '127.0.0.1'; // Caso não funcione, tente trocar por "localhost".
    private $db_name = 'product_management';
    private $username = 'root';
    private $password = '';
    private $conn;


    public function __construct()
    {
        $this->connect();
        $this->databaseVerify();
        $this->tableVerify();
    }


    private function connect()
    {
        try {
            $this->conn = new PDO(
                dsn: "mysql:host={$this->host}",
                username: $this->username,
                password: $this->password,
                options: [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"

                ]
            );
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());


        }

    }


    private function databaseVerify(){
        try {
            $sql = "CREATE DATABASE IF NOT EXISTS `{$this->db_name}` 
                    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
            $this->conn->exec($sql);
            
            $this->conn->exec("USE `{$this->db_name}`");
            
        } catch(PDOException $e) {
            die("Erro ao criar banco de dados: " . $e->getMessage());
        }
    }

       private function tableVerify() {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS `products` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `sku` VARCHAR(100) NOT NULL,
                `description` TEXT DEFAULT NULL,
                `price` DECIMAL(10,2) DEFAULT 0.00,
                `supplier` VARCHAR(255) DEFAULT NULL,
                `category` VARCHAR(100) DEFAULT NULL,
                `stock_quantity` INT(11) DEFAULT 0,
                `image` VARCHAR(255) DEFAULT NULL,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`),
                UNIQUE KEY `sku_unique` (`sku`),
                KEY `idx_name` (`name`),
                KEY `idx_category` (`category`),
                KEY `idx_supplier` (`supplier`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
            
            $this->conn->exec($sql);
            
            
        } catch(PDOException $e) {
            die("Erro ao criar tabelas: " . $e->getMessage());
        }
    }
}

?>