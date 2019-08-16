CREATE TABLE usuario (
  idUsuario INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL
);

CREATE TABLE post (
  idPost INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(100) NOT NULL,
  texto TEXT(100) NOT NULL COMMENT,
  autor VARCHAR(100) NOT NULL,
  data DATETIME NOT NULL,
  imagem VARCHAR(45) NULL,
  usuario_id INTEGER NOT NULL,
  categoria VARCHAR(100) NOT NULL,
  CONSTRAINT fk_post_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (idUsuario)
);

CREATE TABLE comentario (
  idComent INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  texto TEXT(100) NULL,
  post_idPost INT NOT NULL,
  CONSTRAINT fk_comentario_post1 FOREIGN KEY (post_idPost) REFERENCES post (idPost)
);

INSERT INTO usuario (username, senha) VALUES ('teste1', '0000');
INSERT INTO usuario (username, senha) VALUES ('teste2', '1111');
INSERT INTO usuario (username, senha) VALUES ('teste3', '2222');
INSERT INTO usuario (username, senha) VALUES ('teste4', '3333');

INSERT INTO post (titulo, texto, autor, data, imagem, usuario_id, categoria) VALUES ('ti1', 'lore ipsulum', 'test1', '2019-08-10', '', '1', 'integracoes');
INSERT INTO post (titulo, texto, autor, data, imagem, usuario_id, categoria) VALUES ('ti2', 'lore ipsulum', 'test2', '2019-08-11', '', '2', 'servicos');
INSERT INTO post (titulo, texto, autor, data, imagem, usuario_id, categoria) VALUES ('ti3', 'lore ipsulum', 'test3', '2019-08-12', '', '3', 'financeiro');
INSERT INTO post (titulo, texto, autor, data, imagem, usuario_id, categoria) VALUES ('ti4', 'lore ipsulum', 'test4', '2019-08-13', '', '4', 'agenda');

INSERT INTO comentario (autor, texto, post_idPost, email, data) VALUES ('pessoa1', 'lore ipsulum', '1', 'pessoa1@usuario.com', '2019-08-20');
INSERT INTO comentario (nome, texto, post_idPost) VALUES ('pessoa2', 'lore ipsulum', '2');
INSERT INTO comentario (nome, texto, post_idPost) VALUES ('pessoa3', 'lore ipsulum', '3');
INSERT INTO comentario (nome, texto, post_idPost) VALUES ('pessoa4', 'lore ipsulum', '4');

/*CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');
*/