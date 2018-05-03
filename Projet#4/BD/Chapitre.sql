/* Testé sous MySQL 5.x */
/* BDD 1.0 Non exporter */ 
/* Exporter le : XX/XX/XXXX */ 
drop table if exists T_COMMENTAIRE;
drop table if exists T_CHAPITRE;

create table T_CHAPITRE (
  CHA_ID integer primary key auto_increment,
  CHA_DATE datetime not null,
  CHA_TITRE varchar(100) not null,
  CHA_CONTENU varchar(400) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_COMMENTAIRE (
  COM_ID integer primary key auto_increment,
  COM_DATE datetime not null,
  COM_AUTEUR varchar(100) not null,
  COM_CONTENU varchar(200) not null,
  CHA_ID integer not null,
  constraint fk_com_cha foreign key(CHA_ID) references T_CHAPITRE(CHA_ID)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;


insert into T_CHAPITRE(CHA_DATE, CHA_TITRE, CHA_CONTENU) values
(NOW(), 'Ma premiére fois en Alaska !(1er Chapitre)', 'Voici mon premier chapitre....');
insert into T_CHAPITRE(CHA_DATE, CHA_TITRE, CHA_CONTENU) values
(NOW(), 'Un bon voyage !(2iem Chapitre)','Voila Mon deuxiéme chapitre...');

insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, CHA_ID) values
(NOW(), 'Yohann ', 'Bravo pour ce début', 1);
insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, CHA_ID) values
(NOW(), 'Durand', 'Merci ! Je vais continuer sur ma lancée', 1);

