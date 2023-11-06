drop database if exists bdChansons;
create database if not exists bdChansons;

use bdChansons;

create table Album
(
	id int(4) primary key,
    nom varchar(60),
    lienImage varchar(30)
);

create table Tag
(
	id int(4) primary key,
    libelle varchar(50)
);

create table Interprete
(
	id int(4) primary key,
    nom varchar(60),
    prenom varchar(60),
    nomScene varchar(60)
);

create table Chanson
(
	id int(4) primary key,
    nom varchar(50),
    dateSortie date,
    genre varchar(50),
    duree int(5),
    meilleurePlace varchar(5),
    paroles varchar(5000),
    idAlbum int(4),
    foreign key (idAlbum) references Album(id)
);

create table Tagger
(
	idChanson int(4),
    idTag int(4),
    primary key (idChanson, idTag),
    foreign key (idChanson) references Chanson(id),
    foreign key (idTag) references Tag(id)
);

create table Chanter
(
	idChanson int(4),
    idInterprete int(4),
    primary key (idChanson, idInterprete),
    foreign key (idChanson) references Chanson(id),
    foreign key (idInterprete) references Interprete(id)
);