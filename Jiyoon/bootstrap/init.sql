CREATE TABLE members (
    id int NOT NULL PRIMARY KEY AUTO,
    OrderNumber int NOT NULL,
    PersonID int,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
);

CREATE DATABASE team01;
CREATE TABLE Members (
    personid  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    age int,
    gender varchar(10),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (personid)
);
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);