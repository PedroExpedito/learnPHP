# Brincando com PHP

Eu estou aprendendo PHP 7 tentando usar o PURO nada de xampp ou phpmyadmin não quero
depender de muletas.
 

Banco de dados mariaDB é o mysql feito pelo fundando do mysql apos ter sido vendido para oracle.

junto eu deixo um tutorial propio que pode ajudar outras pessoas e ate mesmo eu.


## requisitos para roudar esse code

### maria DB comands

Plugins para o banco de dados.

```sudo apt install -y php7.4-mysql```

  abrir maria DB:
    ```bash
    mysql -u root -p
    ```  para logar no banco de dados '-u' de user 'root' como exemplo do user e '-p' de passworld

 ```show databases;``` mostra os databases

 ```create data base nomedata;``` "nomedata" é nome para o banco

 ```grant all privileges on nomedobancodedados.* to nomedousuario;``` para dar privilegios ao usuarios


Para parar o banco de dados mariaDB: Testado no Debian

```sudo systemctl stop mariadb```

```Para iniciar o banco de dados:```

```sudo systemctl start mariadb```

#### dentro do maria DB criar bancos e user

```CREATE DATABASE banco_teste;``` cria um novo banco

```USE banco_teste;``` Acessa o banco

```CREATE TABLE Cadastro (NomeCliente VARCHAR (20), SobrenomeCliente VARCHAR (30), SEXO CHAR(1));``` sintaxe para criação de tabelas

```CREATE USER teste@localhost;``` Criar usuario

```GRANT ALL ON banco_teste.* TO teste@localhost;
SET PASSWORD FOR 'teste'@'localhost' = PASSWORD('123'); ``` dando permissoes para o usuario

```SHOW TABLES;``` mostra as tabelas

```SHOW COLUMNS FROM nomedatablea;``` #mostra as colunas da tabela

```SELECT * FROM Nomedatabela;``` # mostra todos os dados da tabela

### Apache2

intalar ele e depois a dependencia para interpretar PHP7
para instalar ```# apt install apache2```



