CREATE DATABASE IF NOT EXISTS garage_v_parrot;

CREATE TABLE IF NOT EXISTS v_parrot
(
    name VARCHAR(50),
    adress VARCHAR(50),
    location VARCHAR(50),
    telephone INT
);

CREATE TABLE IF NOT EXISTS roles
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    surname VARCHAR(50),
    password VARCHAR(60),
    email VARCHAR(50),
    id_role INT NOT NULL,
    FOREIGN KEY(id_role) REFERENCES roles(id)
);

CREATE TABLE IF NOT EXISTS services
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS opening_time
(
    id INT PRIMARY KEY,
    days VARCHAR(20),
    hours_start INT,
    hours_end INT,
    is_closed boolean
);

CREATE TABLE IF NOT EXISTS review
(
    name VARCHAR(50),
    message VARCHAR(150),
    score INT
);

CREATE TABLE IF NOT EXISTS cars
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    référence INT,
    title VARCHAR(50) NOT NULL,
    picture VARCHAR(50),
    years INT,
    price DECIMAL(5, 2),
    mileage INT,
    description TEXT(20000) NOT NULL,
    publication_date DATETIME DEFAULT NOW()
);