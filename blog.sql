CREATE DATABASE blog;

CREATE TABLE article
(
id int(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT,
titre varchar(100),
nom   varchar(100),
prenom varchar(100),
contenu text,
);


