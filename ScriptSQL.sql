drop database if exists bdChansons;
create database if not exists bdChansons;

use bdChansons;

create table Album
(
	id int(4) auto_increment primary key,
    nom varchar(100),
    lienImage varchar(500)
);

create table Tag
(
	id int(4) primary key,
    libelle varchar(50)
);

create table Interprete
(
	id int(4) auto_increment primary key,
    nom varchar(60),
    prenom varchar(60),
    nomScene varchar(60)
);

create table Chanson
(
	id int(4) auto_increment primary key,
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

INSERT INTO Album (nom, lienImage) VALUES 
('The Immaculate Collection', null),
('Singulier 81 - 89', null),
('Gang', null),
('Thriller', null),
('Paris, France', null),
("L'aventurier", null),
('The Joshua Tree', null),
('The Final', null),
('Greatest Hits II (2011 Remaster)', null),
('Hunting High and Low', null),
('Parade - Music from the Motion Picture Under the Cherry Moon', null),
('Best Of Blondie', null),
('Liberté', null),
("Let's Dance", null),
('Sweet Dreams (Are Made Of This)', null),
('True Colors: The Best Of Cyndi Lauper', null),
('Katrina & The Waves', null),
('Jeanne Mas', null),
('François', null),
('Nena', null),
('Eternal Flame: The Best Of', null),
('Back To Front', null),
('Born to Be Alive (Extended Version)', null),
('Chinese Wall', null),
('Les 50 Plus Belles Chansons', null),
('Au top des années 80, vol. 1 (30 titres + 5 maxis)', null),
('The Very Best of Daryl Hall / John Oates', null),
('The Best of Me', null),
('Africa', null),
('The Greatest Hits Collection - Collector Edition', null),
('The Best Of The Bangles', null),
('That\'s The Way I Like It: The Best of Dead Or Alive', null),
('Love On The Beat', null),
('Whitney', null),
('Samantha Fox Greatest Hits', null),
('Gypsy Honeymoon: The Best Of Kim Carnes', null),
('Beds Are Burning (Remastered)', null),
('Evidemment', null),
('Too Shy-The Singles...And More', null),
('Forever Young', null),
('Best of', null),
('Irresistible Princess', null),
('Best of Jakie Quartz (Le meilleur des années 80)', null),
('The Singles (Expanded)', null),
('The Very Best Of Sting And The Police', null),
('Once Upon A Time (Super Deluxe)', null),
('Essential', null),
('Only Yazoo - The Best of Yazoo', null),
('Soul Love Vol. 1 - Soul Love Vol. 2 - Soul Love Vol. 3 [Clean]', null),
('Kick (Remastered 2011)', null),
('Songs From The Big Chair', null),
('All The Best', null),
('The Very Best Of Soft Cell', null),
('The Age Of Plastic', null),
('Best Of', null),
('Toto IV', null),
('True Blue', null),
('Eve lève-toi', null),
('Terence Trent D\'Arby\'s Greatest Hits', null),
('Never for Ever', null),
('The Meilleur Of Renaud', null),
('Sultans Of Swing - The Very Best Of Dire Straits', null),
('Le Banana Split (Remix Album)', null),
('50 Great Songs', null),
('Isabelle Adjani', null),
('Nothing\'s Gonna Change My Love For You', null),
('Une Presence', null),
('80s Power Ballads', null),
('A Collection of Roxette Hits! Their 20 Greatest Songs!', null),
('Purple Rain [Explicit]', null),
('LOVE', null),
('Best Of 70', null),
('Maximum Joy', null),
('Whiter Shade of Pale and More Million Sellers', null),
('Les années 80 en France', null),
('One Step Beyond', null),
('T\'es OK, t\'es bath, t\'es In', null),
('Pour Me Comprendre (40 titres)', null),
('77/87', null),
('Les indispensables', null),
('Chants zazous [Explicit]', null),
('Fame (Original Motion Picture Soundtrack)', null),
('ABBA Gold', null),
('Poses', null),
('Spacer (Monsieur Willy Remix)', null),
('Quand t\'es dans le désert', null),
('Antisocial - Le Meilleur Des Années CBS', null),
('The Meilleur Of Renaud', null),
('Alors regarde', null),
('Les grands moments - Best Of', null),
('Best of Philippe Lafontaine (Le meilleur des années 80)', null),
('Besoin De Rien, Envie De Toi', null),
('L\'essentiel', null),
('Ma collection 80\'s: Hervé Cristiani', null),
('Quand la musique est bonne', null),
('Best Of Catherine Lara', null),
('Le son des années 80', null),
('Stars 80 l’album anniversaire !', null),
('Best of Corynne Charby', null);





	
