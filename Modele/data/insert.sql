INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('ADMIN','admin','admin','06/12/1994','qsdq@qsdqsd','0668316514','admin','URL');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('REYMOND','Lucas','zFunHD','06/12/1994','qsdq@qsdqsd','0668316514','test','URL');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('CHEMIN','Ludivine','Yarps','1994-12-12','sdfs@sdfsdf','066831945','test','URL');

INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
VALUES ('Tonton','Phil','master','1994-12-08','qsd@aaaaa','0668316514','test','URL');


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
-- VALUES ('C est une reponse',2,1);
--
--
INSERT INTO VILLE(codePostal,nom)
VALUES ('38000','Grenoble');

INSERT INTO VILLE(codePostal,nom)
VALUES ('69000','Lyon');

INSERT INTO VILLE(codePostal,nom)
VALUES ('38800','Pont de Claix');

--
INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (1,'un petit trajet',15,5,3,'2018-12-05',38000,38800);

INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (3,'un petit vers Grenoble',15,5,3,'2019-12-05',38000,38800);


INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
VALUES (2,'un petit trajet',15,5,3,'2018-12-05',38000,38120);

INSERT INTO DEMANDE(demandeur,trajet)
VALUES (2,1);

INSERT INTO DEMANDE(demandeur,trajet)
VALUES (2,2);

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
