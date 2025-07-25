CREATE DATABASE IF NOT EXISTS ismart;
USE ismart;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('projektuotojas', 'inzinierius', 'vadovas') NOT NULL
);