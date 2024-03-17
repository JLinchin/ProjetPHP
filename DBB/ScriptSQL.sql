drop database if exists bdChansons;
create database if not exists bdChansons;

use bdChansons;

create table Album
(
	id int auto_increment primary key,
    nom varchar(100),
    lienImage varchar(500)
);

create table Tag
(
	id int primary key auto_increment,
    libelle varchar(50)
);

create table Interprete
(
	id int auto_increment primary key,
    nomScene varchar(60)
);

create table Chanson
(
	id int auto_increment primary key,
    nom varchar(50),
    dateSortie varchar(50),
    genre varchar(50),
    duree varchar(50),
    meilleurePlace varchar(50),
    paroles varchar(10000),
    idAlbum int(4),
    foreign key (idAlbum) references Album(id)
);

create table Tagger
(
	idChanson int,
    idTag int,
    primary key (idChanson, idTag),
    foreign key (idChanson) references Chanson(id),
    foreign key (idTag) references Tag(id)
);

create table Chanter
(
	idChanson int,
    idInterprete int,
    primary key (idChanson, idInterprete),
    foreign key (idChanson) references Chanson(id),
    foreign key (idInterprete) references Interprete(id)
);

create table User
(
    idUser int primary key auto_increment,
    userLog varchar(30),
    mdp varchar(64),
    nom varchar(50),
    prenom varchar(50)
);

INSERT INTO Album (nom, lienImage) VALUES 
('The Immaculate Collection', 'Images/1.TheIMMACULATECollection.jpg'),
('Singulier 81 - 89', 'Images/2.Singulier81-89.jpg'),
('Gang', 'Images/3.Gang.jpg'),
('Thriller', 'Images/4.Thriller.jpg'),
('Paris, France', 'Images/5.ParisFrance.jpg'),
("L'aventurier", 'Images/6.Laventurier.jpg'),
('The Joshua Tree', 'Images/7.TheJoshuaTree.jpg'),
('The Final', 'Images/8.TheFinal.jpg'),
('Greatest Hits II (2011 Remaster)', 'Images/9.GreatestHitsIII.jpg');

INSERT INTO Interprete(nomScene) VALUES
('Madonna'),
('Jean-Jacques Goldman'),
('Johnny Halliday'),
('Michael Jackson'),
('France Gall'),
('Indochine'),
('U2'),
('Wham!'),
('Queen');

insert into Chanson(nom,dateSortie,duree,meilleurePlace,genre, idAlbum, paroles) Values
('Like a Virgin','1984','03:11','top 5 hit-parade','Pop', 1, "I made it through the wilderness Somehow I made it through Didn't know how lost I was Until I found you I was beat, incomplete I'd been had, I was sad and blue But you made me feel Yeah, you made me feel Shiny and new Like a virgin Touched for the very first time Like a virgin When your heart beats next to mine Gonna give you all my love, boy My fear is fading fast Been saving it all for you 'Cause only love can last You're so fine and you're mine Make me strong, yeah you make me bold Oh your love thawed out Yeah, your love thawed out What was scared and cold Like a virgin Touched for the very first time Like a virgin With your heartbeat next to mine Oooh, oooh, oooh You're so fine and you're mine I'll be yours 'till the end of time 'Cause you made me feel Yeah, you made me feel I've nothing to hide Like a virgin Touched for the very first time Like a virgin With your heartbeat next to mine Like a virgin, ooh, ooh"),
('Au bout de mes rêves','1982','03:46','top 1 hit-parade','Variété française', 2, "Et même si le temps presse Même s’il est un peu court Si les années qu’on me laisse Ne sont que minutes et jours Et même si l’on m’arrête Ou s’il faut briser des murs En soufflant dans des trompettes Ou à force de murmures J’irai au bout de mes rêves Tout au bout de mes rêves J’irai au bout de mes rêves Où la raison s’achève Tout au bout de mes rêves J’irai au bout de mes rêves Tout au bout de mes rêves Où la raison s’achève Tout au bout de mes rêves Et même s’il faut partir Changer de terre ou de trace S’il faut chercher dans l’exil L’empreinte de mon espace Et même si les tempêtes Les dieux mauvais, les courants Nous feront courber la tête Plier genoux sous le vent J’irai au bout de mes rêves Tout au bout de mes rêves J’irai au bout de mes rêves Où la raison s’achève Tout au bout de mes rêves J’irai au bout de mes rêves Et même si tu me laisses Au creux d’un mauvais détour En ces moments où l’on teste La force de nos amours Je garderai la blessure Au fond de moi tout au fond Mais au-dessus je te jure Que j’effacerai ton nom J’irai au bout de mes rêves Tout au bout de mes rêves J’irai au bout de mes rêves Où la raison s’achève Tout au bout de mes rêves J’irai au bout de mes rêves Tout au bout de mes rêves Où la raison s’achève Tout au bout de mes rêves J’irai au bout de mes rêves Tout au bout de mes rêves Où la raison s’achève Tout au bout de mes rêves"),
("Thriller",'1982','05:58','top 1 hit-parade','Pop Rock', 4, "It's close to midnight And something evil's lurking in the dark Under the moonlight You see a sight that almost stops your heart You try to scream But terror takes the sound before you make it You start to freeze As horror looks you right between the eyes You're paralyzed 'Cause this is thriller, thriller night And no one's gonna save you from the beast about to strike You know it's thriller, thriller night You're fighting for your life inside a killer thriller tonight, yeah Ooh, ooh You hear the door slam And realize there's nowhere left to run You feel the cold hand And wonder if you'll ever see the sun You close your eyes And hope that this is just imagination Girl, but all the while You hear the creature creepin' up behind You're out of time 'Cause this is thriller, thriller night There ain't no second chance against the thing with forty eyes, girl Thriller, thriller night You're fighting for your life inside a killer thriller tonight Night creatures call And the dead start to walk in their masquerade There's no escapin' the jaws of the alien this time (they're open wide) This is the end of your life, oh They're out to get you There's demons closing in on every side They will possess you Unless you change that number on your dial Now is the time For you and I to cuddle close together, yeah All through the night I'll save you from the terrors on the screen I'll make you see That it's a thriller, thriller night 'Cause I can thrill you more than any ghoul would ever dare try Thriller, thriller night So let me hold you tight and share a killer, thriller Chiller, thriller here tonight 'Cause it's a thriller, thriller night Girl, I can thrill you more than any ghoul would ever dare try Thriller, thriller night So let me hold you tight and share a killer, thriller I'm gonna thrill you tonight Darkness falls across the land The midnight hour is close at hand Creatures crawl in search of blood To terrorize y'all's neighborhood And whosoever shall be found Without the soul for getting down Must stand and face the hounds of hell And rot inside a corpse's shell I'm gonna thrill you tonight Thriller, ohh baby (thriller) I'm gonna thrill you tonight (thriller night) Thriller, oh darling, oh baby I'm gonna thrill you tonight Thriller, thriller night (oh baby) I'm gonna thrill you tonight Thriller, oh darling (oh baby) Thriller night baby, ooh (thriller night baby) The foulest stench is in the air The funk of forty thousand years And grizzly ghouls from every tomb Are closing in to seal your doom And though you fight to stay alive Your body starts to shiver For no mere mortal can resist The evil of the thriller"),
("Il jouait du piano debout",'1980','04:33','top 6 hit-parade','Rock', 5, "Ne dites pas que ce garçon était fou Il ne vivait pas comme les autres, c'est tout Et pour quelles raisons étranges Les gens qui n'sont pas comme nous, Ça nous dérange Ne dites pas que ce garçon n'valait rien Il avait choisi un autre chemin Et pour quelles raisons étranges Les gens qui pensent autrement Ça nous dérange Ça nous dérange Il jouait du piano debout C'est peut-être un détail pour vous Mais pour moi, ça veut dire beaucoup Ça veut dire qu'il était libre Heureux d'être là malgré tout Il jouait du piano debout Quand les trouillards sont à genoux Et les soldats au garde à vous Simplement sur ses deux pieds, Il voulait être lui, vous comprenez Il n'y a que pour sa musique, qu'il était patriote Il s'rait mort au champ d'honneur pour quelques notes Et pour quelles raisons étranges, Les gens qui tiennent à leurs rêves, Ça nous dérange Lui et son piano, ils pleuraient quelques fois Mais c'est quand les autres n'étaient pas là Et pour quelles raisons bizarres, Son image a marqué ma mémoire, Ma mémoire.. Il jouait du piano debout C'est peut-être un détail pour vous Mais pour moi, ça veut dire beaucoup Ça veut dire qu'il était libre Heureux d'être là malgré tout Il jouait du piano debout Il chantait sur des rythmes fous Et pour moi ça veut dire beaucoup Ça veut dire essaie de vivre Essaie d'être heureux, Ça vaut le coup. Il jouait du piano debout C'est peut-être un détail pour vous Mais pour moi, ça veut dire beaucoup Ça veut dire qu'il était libre Heureux d'être là malgré tout Il jouait du piano debout Quand les trouillards sont à genoux Et les soldats au garde à vous Simplement sur ses deux pieds, Il voulait être lui, vous comprenez"),
("L'aventurier",'1982','03:51','top 2 hit-parade','Rock', 6, "Egaré dans la vallée infernale Le héros s'appelle Bob Morane A la recherche de l'Ombre Jaune Le bandit s'appelle Mister Kali Jones Avec l'ami Bill Ballantine Sauvé de justesse des crocodiles Stop au trafic des Caraïbes Escale dans l'opération Nadawieb. Le c?ur tendre dans le lit de Miss Clark Prisonnière du Sultan de Jarawak En pleine terreur à Manicouagan Isolé dans la jungle birmane Emprisonnant les flibustiers L'ennemi est démasqué On a volé le collier de Civa Le Maharadjah en répondra. Et soudain surgit face au vent Le vrai héros de tous les temps Bob Morane contre tout chacal L'aventurier contre tout guerrier Bob Morane contre tout chacal L'aventurier contre tout guerrier Dérivant à bord du sampan L'aventurier au parfum d'Ylalang Son surnom, Samouraï du Soleil En démantelant le gang de l'Archipel L'otage des guerriers du Doc Xhatan Il s'en sortira toujours à temps Tel l'aventurier solitaire Bob Morane est le roi de la Terre. Et soudain surgit face au vent Le vrai héros de tous les temps Bob Morane contre tout chacal L'aventurier contre tout guerrier Bob Morane contre tout chacal L'aventurier contre tout guerrier"),
("With Or Without You",'1987','04:56','top 10 hit-parade','Rock', 7, "See the stone set in your eyes See the thorn twist in your side I'll wait for you Sleight of hand and twist of fate On a bed of nails, she makes me wait And I wait without you With or without you With or without you Through the storm, we reach the shore You give it all but I want more And I'm waiting for you With or without you With or without you, ah, ah I can't live With or without you And you give yourself away And you give yourself away And you give And you give And you give yourself away My hands are tied My body bruised, she got me with Nothing to win and Nothing left to lose And you give yourself away And you give yourself away And you give And you give And you give yourself away With or without you With or without you, oh I can't live With or without you Oh, oh Oh, oh With or without you With or without you, oh I can't live With or without you With or without you"),
("Wake Me Up Before You Go-Go",'1984','03:51','top 17 hit-parade','Pop', 8, "Jitterbug Jitterbug Jitterbug Jitterbug You put the boom-boom into my heart (do do) You send my soul sky high when your lovin' starts Jitterbug into my brain (yeah yeah) Goes a bang-bang-bang 'til my feet do the same But something's bugging you Something ain't right My best friend told me what you did last night Left me sleepin' in my bed I was dreaming, but I should have been with you instead. Wake me up before you go-go Don't leave me hanging on like a yo-yo Wake me up before you go-go I don't want to miss it when you hit that high Wake me up before you go-go 'Cause I'm not planning on going solo Wake me up before you go-go (ah) Take me dancing tonight I wanna hit that high (yeah, yeah) You take the grey skies out of my way (do do) You make the sun shine brighter than Doris Day Turned a bright spark into a flame (yeah yeah) My beats per minute never been the same 'Cause you're my lady, I'm your fool It makes me crazy when you act so cruel Come on, baby, let's not fight We'll go dancing, everything will be all right Wake me up before you go-go Don't leave me hanging on like a yo-yo Wake me up before you go-go I don't want to miss it when you hit that high Wake me up before you go-go 'Cause I'm not planning on going solo Wake me up before you go-go (ah) Take me dancing tonight I wanna hit that high (yeah, yeah, yeah, baby) (Jitterbug) (Jitterbug) Cuddle up, baby, move in tight We'll go dancing tomorrow night It's cold out there, but it's warm in bed They can dance, we'll stay home instead (yeah, yeah) (Jitterbug) Wake me up before you go-go Don't leave me hanging on like a yo-yo Wake me up before you go-go I don't want to miss it when you hit that high Wake me up before you go-go 'Cause I'm not plannin' on going solo Wake me up before you go-go (ah) Take me dancing tonight Wake me up before you go-go, don't you dare to leave me hanging on like a Yo-yo Take me dancing (Boom-boom-boom-boom) (Boom-boom-boom-boom)"),
("I Want To Break Free",'1984','04:18','top 9 hit-parade','Pop Rock', 9, "I want to break free I want to break free I want to break free from your lies You're so self satisfied I don't need you I've got to break free God knows God knows I want to break free I've fallen in love I've fallen in love for the first time And this time I know it's for real I've fallen in love yeah God knows God knows I've fallen in love It's strange but it's true I can't get over the way you love me like you do But I have to be sure When I walk out that door Oh how I want to be free baby Oh how I want to be free Oh how I want to break free But life still goes on I can't get used to living without living without Living without you by my side I don't want to live alone hey God knows got to make it on my own So baby can't you see I've got to break free I've got to break free I want to break free yeah I want I want I want I want to break free....");


insert into chanter values 
(1,1),
(2,2),
(3,4),
(4,5),
(5,6),
(6,7),
(7,8),
(8,9);

insert into User(idUser, userLog, mdp, nom, prenom) Values
(0, "admin", "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918", "ADMIN", "Admin");