INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('admin','admin','admin','06/12/1994','qsdq@qsdqsd','0668316514','test','avatar-3.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('CHEMIN','Ludivine','Yarps','1994-12-12','sdfs@sdfsdf','066831945','test','avatar-4.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('Tonton','Phil','master','1994-12-08','qsd@aaaaa','0668316514','test','avatar-21.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('REYMOND','Lucas','zfunHD','06/12/1994','vcb@qsdqsd','0668316514','admin','avatar-2.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('GUEVARA','Gabrielle','laNulle','06/12/1994','qsdq@qsdzerqsd','0668316514','admin','avatar-21.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('SIMONETTA','Guillame','emalliuG','06/12/1994','qsdq@qsdbn,sd','0668316514','admin','avatar-24.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('LONGUEMIARE','Florent','tnerolF','06/12/1994','qsdq@qsdqazesd','0668316514','admin','avatar-1.jpg');


INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('Relou','Loris','GraveRelouDu38','06/02/1994','qsxxxaadq@qsdzerqsd','0668316514','test','avatar-1.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('Guevara','Luis','PapyDu07','06/12/1970','vcaaaab@qsdqsd','0668317514','test','avatar-2.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('Gros','Thomas','Totogros','06/12/1994','vcab@qsdqsd','0668317514','test','avatar-2.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('LaGaffe','Vincent','Vivi','06/02/1994','qsaadq@qsdzerqsd','0668316514','test','avatar-1.jpg');



INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Bonjour, quand partez vous ?',2,7);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Bonjour, puis-je emener mon chien ?',2,8);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Bonjour, nous partons à 4h du matin. Soyez à l heure !',7,2);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('C est toi la chienne !',8,2);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Bonjour,GraveRelouDu38 a tenu des propos injurieux à mon égard, je cite : C est toi la chienne ! ',2,1);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Bonjour Yarps, je note en effet la présence de ce message, je vais sancionner cet individu.\n Cordialement.',1,2);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Merci beaucoup !',2,1);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('Bonjour, pouvons nous baisser le prix du trajet de Grenoble à bougoin Jallieu ?',2,5);


INSERT INTO VILLE(codePostal,nom)
VALUES ('38000','Grenoble');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38340','Voreppe');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38640','Claix');


INSERT INTO VILLE(codePostal,nom)
VALUES ('38560','Jarrie');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38300','Ruy');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38330','MontBonnot Saint Martin');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38780','Estrablin');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38110','La Tour du Pin');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38114','Vaujany');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38120','Saint Egreve');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38135','MontEynard');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38160','Chatte');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38190','Bernin');


INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (2,'Trajet tranquille  à partir de 12h30 place de la bastille',4,3,25,'2018-12-05','38000','38800');

INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (2,'Trajet tranquille  à partir de 12h30 place de la bastille',4,3,25,'2018-12-12','38000','38800');

INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (3,'Tous à Bourgoin ! Départ 10h30 place du Concorde',8,5,60,'2019-12-05','38000','38800');

INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (4,'Je vais ! Départ 10h30 place du Concorde',8,5,60,'2019-12-05','38000','38800');



-- INSERT INTO voiture(numeroImmatriculation,marque,modele,couleur,proprietaire)
-- VALUES ('ZQ-124-PQ','Opel','Corsa','rouge',2);
--
-- INSERT INTO voiture(numeroImmatriculation,marque,modele,couleur,proprietaire)
-- VALUES ('XQ-124-PQ','Opel','Astra','rouge',3);
--

-- INSERT INTO MESSAGE(description,expediteur,destinataire)
-- VALUES ('C un message d insulte',1,2);
--
-- INSERT INTO MESSAGE(description,expediteur,destinataire)
-- VALUES ('C est une reponse',2,3);


-- INSERT INTO VILLE(codePostal,nom)
-- VALUES (38000,'Grenoble');
--
-- INSERT INTO VILLE(codePostal,nom)
-- VALUES (69000,'Lyon');
--
-- INSERT INTO VILLE(codePostal,nom)
-- VALUES (38800,'Pont de Claix');
--
-- --
-- INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
-- VALUES (1,'un petit trajet',15,5,3,'2018-12-05',38000,38800);
--
-- INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
-- VALUES (3,'un petit vers Grenoble',15,5,3,'2019-12-05',38000,38800);
--
--
-- INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
-- VALUES (2,'un petit trajet',15,5,3,'2018-12-05',38000,38120);

-- INSERT INTO DEMANDE(demandeur,trajet)
-- VALUES (2,1);
--
-- INSERT INTO DEMANDE(demandeur,trajet)
-- VALUES (2,2);

--Valeurs de l'admin et quelques villes pour commencer
-- INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
-- VALUES ('admin','admin','admin','06/12/1994','admin@admin.com','0668316514','admin','-');
