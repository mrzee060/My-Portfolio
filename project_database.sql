CREATE DATABASE IF NOT EXISTS project_database;

USE project_database;

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT
);


INSERT INTO projects (title, description) VALUES
('Word Puzzle Game', 'Created a fully functional Word Puzzle Game as part of the Programming Fundamental course.'),
('Student Management System', 'Utilized object-oriented programming principles to design and build a student management system in the Object-Oriented Programming course, showcasing the ability to create modular and maintainable code.'),
('Data Structures and Algorithms', 'Implemented efficient data structures and algorithms in various projects during the Data Structure Algorithm course, showcasing problem-solving skills and algorithmic thinking.'),
('Clinic Management System', 'Designed and implemented a Clinic management system as part of the Database course, gaining hands-on experience in database design, SQL querying, and data manipulation.'),
('Front End Websites', 'Designed Front End websites for practice.');
