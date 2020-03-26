create database compartilhatrem;
use compartilhatrem;
create table categoria (
idcategoria int not null auto_increment, 
categoria varchar(30) not null, 
primary key (idcategoria)
);

create table endereco (
idEndereco int not null auto_increment, 
cep varchar(8), 
rua text, 
bairro text, 
quadra varchar(10), 
lote varchar(10),
numero varchar(10) default 'S/Nº', 
cidade varchar(100), 
uf varchar(2), 
primary key(idEndereco)
);

create table usuario (
idUsuario int not null auto_increment, 
nome varchar(30), sobrenome varchar(100), 
apelido varchar(100), datanascimento date,
sexo char(2), 
cpf varchar(255), 
celular varchar(11), 
telefone varchar(10), 
email varchar(100) not null, 
senha varchar(255) not null,
caminhofoto varchar(255), 
pergunta text, 
resposta text, 
ipcadastro varchar(16), 
dataderegistro datetime, 
idendereco int not null, 
primary key (idUsuario), 
foreign key (idendereco) references endereco(idEndereco)
); 

create table usuarioxcategoria (
idusuario int not null, 
idcategoria int not null, 
foreign key (idusuario) references usuario(idUsuario),
foreign key (idcategoria) references categoria(idcategoria)
);

create table objeto (
idobjeto int not null auto_increment, 
nome_objeto varchar(255) not null, 
datacadastro datetime, 
iddoador int not null,
descricao text, 
observacoes text, 
id_categoria int not null, 
status int not null default '0', 
primary key(idobjeto), 
foreign key(iddoador) references usuario(idUsuario), 
foreign key(id_categoria) references categoria(idcategoria)
);

create table imagemobjeto (
idimagem int not null auto_increment, 
caminho varchar(255), 
idobjeto int not null, 
tipo int not null default '0',
 primary key(idimagem), 
 foreign key(idobjeto) references objeto(idobjeto) 
 );

create table transacao (
idTransacao int not null auto_increment, 
id_objeto int not null, 
id_usuario int not null, 
data_grito datetime, 
data_autorizacao datetime, 
status_transacao int not null default '0', 
primary key(idTransacao), 
foreign key (id_objeto) references
objeto(idobjeto), 
foreign key (id_usuario) references usuario(idUsuario)
);

create table pontuacao(
idpontuacao int not null auto_increment,
idtransacao int not null,
idavaliador int not null,
idavaliado int not null,
pontuacao int default '0',
primary key (idpontuacao),
foreign key (idtransacao) references transacao(idTransacao),
foreign key (idavaliador) references usuario(idUsuario),
foreign key (idavaliado) references usuario(idUsuario)
);

insert into categoria (categoria) value ("Eletrônicos"); /*inicializa*/

