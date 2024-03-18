-- Tworzenie bazy danych
CREATE DATABASE IF NOT EXISTS moja_baza_danych;

-- Używanie utworzonej bazy danych
USE moja_baza_danych;

-- Tworzenie tabeli użytkowników
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
