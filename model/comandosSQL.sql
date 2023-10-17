CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE contas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    data_criacao DATE NOT NULL,
    tipo_assinatura VARCHAR(50) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE perfis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    conta_id INT,
    nome VARCHAR(50) NOT NULL,
    avatar VARCHAR(255),
    FOREIGN KEY (conta_id) REFERENCES contas(id)
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE filmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    ano_lancamento YEAR,
    duracao INT,  -- em minutos
    thumbnail VARCHAR(255)
);

CREATE TABLE filme_categoria (
    filme_id INT,
    categoria_id INT,
    PRIMARY KEY (filme_id, categoria_id),
    FOREIGN KEY (filme_id) REFERENCES filmes(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

CREATE TABLE perfil_filmes_assistidos (
    perfil_id INT,
    filme_id INT,
    data_assistido DATE NOT NULL,
    progresso INT,  -- porcentagem assistida
    PRIMARY KEY (perfil_id, filme_id),
    FOREIGN KEY (perfil_id) REFERENCES perfis(id),
    FOREIGN KEY (filme_id) REFERENCES filmes(id)
)