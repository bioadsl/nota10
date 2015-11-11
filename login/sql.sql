CREATE TABLE usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    login VARCHAR(10) NOT NULL,
    senha VARCHAR(100) NOT NULL
);

//senha 12345
INSERT INTO usuarios(nome,email,login,senha) VALUES('Rodrigo','flechapartida@gmail.com','rodrigo','827ccb0eea8a706c4c34a16891f84e7b');
