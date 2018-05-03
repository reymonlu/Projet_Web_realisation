INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('ADMIN','admin','admin','06/12/1994','qsdq@qsdqsd','0668316514','admin','avatar-1.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('REYMOND','Lucas','zfunHD','06/12/1994','vcb@qsdqsd','0668316514','admin','avatar-2.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('GUEVARA','Gabrielle','laNulle','06/12/1994','qsdq@qsdzerqsd','0668316514','admin','avatar-1.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('SIMONETTA','Guillame','emalliuG','06/12/1994','qsdq@qsdbn,sd','0668316514','admin','avatar-1.jpg');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('LONGUEMIARE','Florent','tnerolF','06/12/1994','qsdq@qsdqazesd','0668316514','admin','avatar-1.jpg');


INSERT INTO voiture(numeroImmatriculation,marque,modele,couleur,proprietaire)
VALUES ('ZQ-124-PQ','Opel','Corsa','rouge',2);

INSERT INTO voiture(numeroImmatriculation,marque,modele,couleur,proprietaire)
VALUES ('XQ-124-PQ','Opel','Astra','rouge',3);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('C un message d insulte',1,2);

INSERT INTO MESSAGE(description,expediteur,destinataire)
VALUES ('C est une reponse',2,1);


INSERT INTO VILLE(codePostal,nom)
VALUES ('38000','Grenoble');

INSERT INTO VILLE(codePostal,nom)
VALUES ('69000','Lyon');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38800','Pont de Claix');

--
INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (2,'Voyage de grenoble à Lyon',50,3,120,'2018-12-05',38000,69000);

INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (3,'Voyage de Grenoble à Pont de Claix',10,2,20,'2018-12-05',38000,38800);

INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (3,'Voyage de Four à Grenoble',45,5,95,'2019-12-05',38080,38000);


INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (5,'Voyage de Bonnefamille à Grenoble',15,5,3,'2018-12-05',3809,38000);
--
-- INSERT INTO DEMANDE(demandeur,trajet)
-- VALUES (2,1);
--
-- INSERT INTO DEMANDE(demandeur,trajet)
-- VALUES (2,2);

--Valeurs de l'admin et quelques villes pour commencer
-- INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
-- VALUES ('admin','admin','admin','06/12/1994','admin@admin.com','0668316514','admin','-');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38000','Grenoble');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38080','Four');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38800','Pont de Claix');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38090','Bonnefamille');

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
