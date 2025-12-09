CREATE DATABASE IF NOT EXISTS pilatesDB;

USE pilatesDB;

CREATE TABLE IF NOT EXISTS signups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    surname VARCHAR(50),
    email VARCHAR(100),
    classType VARCHAR(50),
    equipmentNeeded TINYINT(1),
    mats INT,
    blocks INT
);
