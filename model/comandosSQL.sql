CREATE DATABASE netflix;
USE netflix;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE subperfis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    avatar VARCHAR(255), 
    FOREIGN KEY (user_id) REFERENCES usuarios(id)
);
CREATE TABLE Categorias (
    CategoriaID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50)
);

INSERT INTO Categorias (Nome) VALUES 
    ('Ação'),
    ('Comédia'),
    ('Drama');

CREATE TABLE Filmes (
    FilmeID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    CategoriaID INT,
    ImagemURL VARCHAR(255),
    FOREIGN KEY (CategoriaID) REFERENCES Categorias(CategoriaID)
);

INSERT INTO Filmes (Nome, CategoriaID, ImagemURL) VALUES 
    ('Filme 1', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 2', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 3', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 4', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 5', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 6', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg');

    INSERT INTO Filmes (Nome, CategoriaID, ImagemURL) VALUES 
    ('Filme 1', 1, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 2', 1, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 3', 1, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 4', 1, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 5', 1, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 6', 1, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg');

        INSERT INTO Filmes (Nome, CategoriaID, ImagemURL) VALUES 
    ('Filme 1', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 2', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 3', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 4', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 5', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg'),
    ('Filme 6', 3, 'https://thumbs.dreamstime.com/b/soldado-com-arma-guerreiro-for%C3%A7as-especiais-108456278.jpg');