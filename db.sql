CREATE DATABASE IF NOT EXISTS db_name;

USE db_name;

CREATE TABLE course (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

INSERT INTO course (name, description)
VALUES 
('PHP', 'O curso da pascoa');

INSERT INTO course (name, description)
VALUES 
('NextJS', 'O novo PHP');

-- docker-compose exec mysql bash
-- mysql -u user -ppassword
