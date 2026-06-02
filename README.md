"# EX000" 

TELA LOGIN - 

TELA INICIAL - MENU

TELA CADASTRO ALUNO/PROFESSOR

TELA VISUALIZAÇÃO ALUNO/PROFESSOR


BANCO DE DADOS | MAX:
* USUARIO (id int not null primary key auto_increment, usuario varchar not null unique, senha varchar not null)
* ALUNO (id_aluno int not null primary key, nome varchar not null, idade int not null, email varchar not null)
* CURSOS (id_curso int not null primary key auto_increment, nome_curso varchar not null, preco decimal, ativo boolean)
