CREATE DATABASE IF NOT EXISTS personality_test;
USE personality_test;

CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    personality VARCHAR(4),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);