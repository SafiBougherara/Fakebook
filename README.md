first blog project 

![image](https://github.com/user-attachments/assets/08a45abf-17af-443c-aa1e-4a3ea473507f)

![image](https://github.com/user-attachments/assets/dd122c2f-bbcb-4c33-a041-050d40a0fe21)

![image](https://github.com/user-attachments/assets/a61f9dda-6181-465b-97f5-48bc76961776)

and first database : (rudimentary)

CREATE DATABASE IF NOT EXISTS Fakebook CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Fakebook;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(255) UNIQUE NOT NULL,
    pass VARCHAR(255) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL
);

