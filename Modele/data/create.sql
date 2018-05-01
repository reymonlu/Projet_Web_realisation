CREATE TABLE IF NOT EXISTS MEMBRE (
  id INTEGER,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  pseudo TEXT NOT NULL unique,
  dateNaissance TEXT NOT NULL,
  adresseMail TEXT NOT NULL unique,
  numeroTel TEXT NOT NULL,
  motDePasse TEXT NOT NULL,
  avatar TEXT NOT NULL,
  signalement INTEGER DEFAULT 0,
  PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS VOITURE (
  numeroImmatriculation TEXT NOT NULL,
  marque TEXT NOT NULL,
  modele TEXT NOT NULL,
  couleur TEXT NOT NULL,
  proprietaire INTEGER,
  PRIMARY KEY(numeroImmatriculation),
  FOREIGN KEY (proprietaire) REFERENCES membre(id) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS MESSAGE (
  numeroMessage INTEGER,
  description TEXT NOT NULL,
  signalement INTEGER DEFAULT 0,
  expediteur INTEGER NOT NULL,
  destinataire INTEGER NOT NULL,
  PRIMARY KEY(numeroMessage),
  FOREIGN KEY (expediteur) REFERENCES membre(id) ON DELETE CASCADE ON UPDATE NO ACTION,
  FOREIGN KEY (destinataire) REFERENCES membre(id) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS VILLE (
  codePostal INTEGER,
  nom TEXT NOT NULL,
  PRIMARY KEY(codePostal)
);

CREATE TABLE IF NOT EXISTS TRAJET (
  numeroTrajet INTEGER,
  conducteur INTEGER NOT NULL,
  description TEXT NOT NULL,
  prix INTEGER DEFAULT 0,
  nombrePassagerMax INTEGER NOT NULL,
  estimation INTEGER NOT NULL,
  dateDepart TEXT NOT NULL,
  villeDepart INTEGER NOT NULL,
  villeArrivee INTEGER NOT NULL,
  PRIMARY KEY(numeroTrajet),
  FOREIGN KEY (villeDepart) REFERENCES ville(codePostal) ON DELETE CASCADE ON UPDATE NO ACTION,
  FOREIGN KEY (villeArrivee) REFERENCES ville(codePostal) ON DELETE CASCADE ON UPDATE NO ACTION,
  FOREIGN KEY (conducteur) REFERENCES membre(id) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS DEMANDE (
  demandeur INTEGER NOT NULL,
  trajet INTEGER NOT NULL,
  statut TEXT DEFAULT 'enAttente',
  PRIMARY KEY(demandeur,trajet),
  FOREIGN KEY (demandeur) REFERENCES membre(id) ON DELETE CASCADE ON UPDATE NO ACTION,
  FOREIGN KEY (trajet) REFERENCES TRAJET(numeroTrajet) ON DELETE CASCADE ON UPDATE NO ACTION
);