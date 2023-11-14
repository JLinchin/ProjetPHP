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
    dateSortie varchar(50),
    genre varchar(50),
    duree varchar(50),
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

INSERT INTO Interprete(nom, prenom, nomScene) VALUES
('Ciccone', 'Madonna', 'Madonna'),
('Goldman', 'Jean-Jacques', 'Jean-Jacques Goldman'),
('Smet', 'Jean-Philippe', 'Johnny Halliday'),
('Jackson', 'Michael', 'Michael Jackson'),
('Gall', 'Isabelle', 'France Gall'),
(null, null, 'Indochine'),
(null, null, 'U2'),
(null, null, 'Wham!'),
(null, null, 'Queen'),
(null, null, 'A-HA'),
('Nelson', 'Pince', 'Prince'),
(null, null, 'Blondie'),
('Montagné', 'Gilbert', 'Gilbert Montagné'),
('Jones', 'David', 'David Bowie'),
(null, null, 'Eurythmics'),
('Lennox', 'Ann', 'Annie Lennox'),
('Stewart', 'David', 'Dave Stewart'),
('Lauper', 'Cynthia', 'Cyndi Lauper'),
(null, null, 'Katrina & The Waves'),
('Mas', 'Jeanne', 'Jeanne Mas'),
('Fritsch-Mentrop', 'Claudie', 'Desireless'),
('Kerner', 'Gabriele', 'NENA'),
(null, null, 'The Bangles'),
('Richie', 'Lionel', 'Lionel Richie'),
('Hernandez', 'Patrick', 'Patrick Hernandez'),
('Bailey', 'Philip', 'Philip Bailey'),
('Collins', 'Philip', 'Phil Collins'),
('Balavoine', 'Daniel', 'Daniel Balavoine'),
(null, null, 'Début de soirée'),
('Hohl', 'Daryl', 'Daryl Hall'),
('Oates', 'John', 'John Oates'),
('Astley', 'Richard', 'Rick Astley'),
('Podwojny', 'Rose', 'Rose Laurens'),
(null, null, 'Bananarama'),
(null, null, 'The Bangles'),
(null, null, 'Dead or Alive'),
('Ginsberg', 'Lucien', 'Serge Gainsbourg'),
('Houston', 'Whitney', 'Whitney Houston'),
('Fox', 'Samantha', 'Samantha Fox'),
(null, null, 'Midnight Oil'),
(null, null, 'Kajagoogoo'),
(null, null, 'Alphaville'),
(null, null, 'Téléphone'),
('Grimaldi', 'Stéphanie', 'Stéphanie de Monaco'),
('Cuchet', 'Jacqueline', 'Jakie Quartz'),
(null, null, 'The Police'),
(null, null, 'Simple Minds'),
(null, null, 'Talk Talk'),
(null, null, 'Yazoo'),
('Adu', 'Helen', 'Sade'),
(null, null, 'INXS'),
(null, null, 'Tears For Fears'),
(null, null, 'The Human League'),
(null, null, 'Soft Cell'),
(null, null, 'The Buggles'),
('Gautier', 'Mylène', 'Mylène Farmer'),
(null, null, 'Toto'),
('Pietri', 'Nicole', 'Julie Pietri'),
('Howard', 'Terence', 'Sananda Maitreya'),
('Bush', 'Catherine', 'Kate Bush'),
('Séchan', 'Renaud', 'Renaud'),
(null, null, 'Dire Straits'),
('Ribeiro Furtado Tavares de Vasconcelos', 'Vanda', 'Lio'),
('Adjani', 'Isabelle', 'Isabelle Adjani'),
('Medeiros', 'Glenn', 'Glenn Medeiros'),
('Feldman', 'François', 'François Feldman'),
('Jamison', 'Joniece', 'Joniece Jamison'),
(null, null, 'Berlin'),
(null, null, 'Roxette'),
('Medley', 'William', 'Bill Medley'),
('Warnes', 'Jennifer', 'Jennifer Warnes'),
('Sardou', 'Michel', 'Michel Sardou'),
(null, null, 'Frankie Goes to Hollywood'),
(null, null, 'Imagination'),
('Anyankor', 'Béatrice', 'Bibie'),
(null, null, 'Madness'),
(null, null, 'Ottawan'),
('Hamburger', 'Michel', 'Michel Berger'),
('Cabrel', 'Francis', 'Francis Cabrel'),
(null, null, 'Le Grand Orchestre du Splendid'),
('Gotainer', 'Richard', 'Richard Gotainer'),
('Cara', 'Irene', 'Irene Cara'),
(null, null, 'ABBA'),
('Le Govic', 'Alain', 'Alain Chamfort'),
('Chancel', 'Annie', 'Sheila'),
('Capdevielle', 'Jean-Patrick', 'Jean-Patrick Capdevielle'),
(null, null, 'The Trust'),
('Bruel-Benguigui', 'Patrick', 'Patrick Bruel'),
('Lafontaine', 'Philippe', 'Philippe Lafontaine'),
(null, null, 'Peter & Sloane'),
('Lunghini', 'Elsa', 'Elsa'),
('Cristiani', 'Hervé', 'Hervé Cristiani'),
('Bodet', 'Catherine', 'Catherine Lara'),
(null, null, 'Partenaire Particulier'),
(null, null, 'Cookie Dingler'),
('Charbit', 'Corinne', 'Corynne Charby');

insert into Chanson(nom,dateSortie,duree,meilleurePlace,paroles,genre) Values
('Like a Virgin','1984','03:11','top 5 hit-parade',null,'Pop'),
('Au bout de mes rêves','1982','03:46','top 1 hit-parade',null,'Variété française'),
("Thriller",'1982','05:58','top 1 hit-parade',null,'Pop Rock'),
("Il jouait du piano debout",'1980','04:33','top 6 hit-parade',null,'Rock'),
("L'aventurier",'1982','03:51','top 2 hit-parade',null,'Rock'),
("With Or Without You",'1987','04:56','top 10 hit-parade',null,'Rock'),
("Wake Me Up Before You Go-Go",'1984','03:51','top 17 hit-parade',null,'Pop'),
("I Want To Break Free",'1984','04:18','top 9 hit-parade',null,'Pop Rock'),
("Take on Me",'1985','03:45','top 1 hit-parade',null,'Pop'),
("Kiss",'1986','03:46','top 6 hit-parade',null,'Pop'),
("Call Me",'1980','03:33','top 4 hit-parade',null,'Rock'),
("Les sunlights des tropiques",'1984','03:58','top 14 hit-parade',null,'Variété française'),
("Let's Dance",'1983','04:07','top 2 hit-parade',null,'Pop Rock'),
("Sweet Dreams (Are Made of This)",'1983','03:37','top 1 hit-parade',null,'Pop'),
("Girls Just Want to Have Fun",'1983','03:56','top 10 hit-parade',null,'Pop'),
("Walking On Sunshine",'1983','03:59','top 8 hit-parade',null,'Pop'),
("Toute première fois",'1985','04:18','top 1 hit-parade',null,'Pop'),
("Voyage voyage",'1989','04:26','top 2 hit-parade',null,'Pop'),
("99 Luftballons",'1983','03:52','top 12 hit-parade',null,'Pop Rock'),
("Eternal Flame",'1988','04:00','top 12 hit-parade',null,'Rock'),
("All Night Long",'1983','04:19','top 4 hit-parade',null,'R&B'),
("Born to Be Alive",'1983','05:54','top 2 hit-parade',null,'Pop'),
("Easy Lover",'1984','05:04','top 2 hit-parade',null,'Rock'),
("Sauver l'amour",'1985','04:22','top 5 hit-parade',null,'Variété française'),
("Nuit de folie",'1989','04:13','top 1 hit-parade',null,'Pop'),
("Maneater",'1982','04:32','top 5 hit-parade',null,'Pop'),
("Never Gonna Give You Up",'1987','03:34','top 1 hit-parade',null,'Pop'),
("Africa",'1983','03:36','top 5 hit-parade',null,'Pop'),
("Venus",'1986','03:29','top 4 hit-parade',null,'Pop'),
("Walk Like an Egyptian",'1986','03:26','top 9 hit-parade',null,'Pop'),
("You Spin Me Round",'1985','03:16','top 9 hit-parade',null,'Pop'),
("Love On The Beat",'1984','08:04','top 3 hit-parade',null,'Variété française'),
("I Wanna Dance with Somebody",'1987','04:53','top 7 hit-parade',null,'Pop'),
("Touch Me (I Want Your Body)",'1986','03:42','top 4 hit-parade',null,'Pop Rock'),
("Bette Davis Eyes",'1981','03:46','top 2 hit-parade',null,'Pop'),
("Billie Jean",'1982','04:54','top 1 hit-parade',null,'Rock'),
("Ella, elle l'a",'1987','04:51','top 2 hit-parade',null,'Variété française'),
("Too Shy",'1983','03:41','top 6 hit-parade',null,'Pop'),
("Forever Young",'1984','03:46','top 13 hit-parade',null,'Pop Rock'),
("Un autre monde",'1984','04:31','top 1 hit-parade',null,'Pop Rock'),
("Ouragan",'1986','04:22','top 1 hit-parade',null,'Pop'),
("Mise au point",'1983','04:42','top 1 hit-parade',null,'Rock'),
("You Can't Hurry Love ",'1982','02:54','top 13 hit-parade',null,'Soul'),
("Message In A Bottle",'1979','04:49','top 19 hit-parade',null,'Rock'),
("Don't You (Forget About Me)",'1985','04:23','top 24 hit-parade',null,'Rock'),
("It's My Life",'1984','03:53','top 25 hit-parade',null,'Pop Rock'),
("Don't Go",'1982','03:06','top 1 hit-parade',null,'Pop'),
("Smooth Operator",'1984','04:58','top 9 hit-parade',null,'R&B'),
("Need You Tonight",'1987','03:01','top 14 hit-parade',null,'Pop Rock'),
("Shout",'1984','06:34','top 19 hit-parade',null,'Pop Rock'),
("Don't You Want Me",'1981','03:57','top 20 hit-parade',null,'Pop Rock'),
("Tainted Love",'1981','02:40','top 3 hit-parade',null,'Pop Rock'),
("Video Killed The Radio Star",'1979','04:14','top 23 hit-parade',null,'Pop Rock'),
("Sans contrefaçon",'1987','04:17','top 23 hit-parade',null,'Variété française'),
("Africa",'1982','04:55','top 13 hit-parade',null,'Pop'),
("La Isla Bonita",'1986','04:03','top 1 hit-parade',null,'Pop'),
("Eve lève-toi",'1987','04:32','top 1 hit-parade',null,'Pop'),
("Wishing Well",'1987','03:31','top 40 hit-parade',null,'Pop'),
("Babooshka",'1980','03:31','top 20 hit-parade',null,'Pop'),
("Dès que le vent soufflera",'1983','04:26','top 96 hit-parade',null,'Rock'),
("Sultans Of Swing",'1978','05:47','top 7 hit-parade',null,'Rock'),
("Le Banana Split",'1980','02:33','top 1 hit-parade',null,'Pop'),
("Your Love Is King",'1984','03:38','top 6 hit-parade',null,'Pop'),
("Pull marine",'1984','03:55','top 3 hit-parade',null,'Variété française'),
("Nothing's Gonna Change My Love For You",'1985','03:51','top 1 hit-parade',null,'Pop'),
("Joue Pas",'1989','06:46','top 20 hit-parade',null,'Pop'),
("Take My Breath Away",'1986','06:46','top 2 hit-parade',null,'Pop'),
("Listen to Your Heart",'1988','05:15','top 11 hit-parade',null,'Pop'),
("Purple Rain",'1984','08:40','top 2 hit-parade',null,'Pop'),
("The Time of My Life",'1987','04:49','top 1 hit-parade',null,'Pop'),
("Être une femme",'1981','04:15','top 5 hit-parade',null,'Variété française'),
("Relax",'1984','03:58','top 6 hit-parade',null,'Pop'),
("Just an Illusion",'1982','06:28','top 10 hit-parade',null,'Pop'),
('Boule de flipper', '1987', '03:27', 'Top 17 Hit-Parade', null, 'Pop'),
('Femme libérée', '1984', '03:44', 'Top 2 Hit-Parade', null, 'Variété française reggae'),
('Partenaire Particulier', '1985', '04:06', 'Top 3 Hit-Parade', null, 'Pop'),
('Nuit magique', '1986', '04:36', 'Top 13 Hit-Parade', null, 'Variété française'),
('Quand la musique est bonne', '1982', '03:52', 'Top 1 Hit-Parade', null, 'Variété française / Pop rock'),
('Il est libre Max', '1981', '03:16', 'Top 105 Hit-Parade', null, 'Pop rock'),
('T\'en va pas', '1986', '05:28', 'Top 1 Hit-Parade', null, 'Pop'),
('Besoin de rien, envie de toi', '1958', '03:42', 'Top 1 Hit-Parade', null, 'Variété française'),
('Cœur de loup', '1988', '03:43', 'Top 1 Hit-Parade', null, 'Pop'),
('Les Lacs du Connemara', '1981', '06:01', 'Top 117 Hit-Parade', null, 'Variété française'),
('Place des grands hommes', '1989', '4:29', 'Top 4 Hit-Parade', null, 'Pop Rock'),
('Marche à l\'ombre', '1980', '03:18', null, null, 'Variété française'),
('Antisocial', '1980', '05:09', 'Top 34 du Hit-Parade', null, 'Rock'),
('Quand t\'es dans le désert', '1979', '03:55', null, null, 'Rock'),
('Spacer', '1980', '03:57', 'Top 86 Hit-Parade', null, 'Pop'),
('Manuvera', '1979', '06:43', 'Top 82 Hit-Parade', null, 'Variété française / Pop'),
('Gimme! Gimme! Gimme! (A Man After Midnight)', '1979', '04:49', 'Top 2 Hit-Parade', null, 'Pop'),
('Fame', '1980', '05:16', 'Top 2 Hit-Parade', null, 'Pop'),
('La Mambo du décalco', '1982', '03:34', 'Top 28 Hit-Parade', null, 'Pop'),
('La Salsa du démon', '1980', '04:17', 'Top 42 Hit-Parade', null, 'Ska'),
('L\'encre de tes yeux', '1980', '03:06', null, null, 'Variété française'),
('La groupie du pianiste', '1980', '04:41', 'Top 17 Hit-Parade', null, 'Pop'),
('T\'es OK, T\'es Bath, T\'es In', '1980', '03:22', null, null, 'R&B'),
('One Step Beyond', '1979', '02:18', 'Top 1 Hit-Parade', null, 'Pop'),
('Tout simplement (tout doucement)', '1985', '04:10', 'Top 2 Hit-Parade', null, 'Variété française');