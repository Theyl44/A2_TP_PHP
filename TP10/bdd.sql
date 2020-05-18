CREATE TABLE public.Utilisateur(
    id         INT  NOT NULL ,
    login      VARCHAR (255) NOT NULL ,
    password   VARCHAR (255) NOT NULL ,
    mail       VARCHAR (255) NOT NULL ,
    nom        VARCHAR (255) NOT NULL ,
    prenom     VARCHAR (255) NOT NULL  ,
    CONSTRAINT Utilisateur_PK PRIMARY KEY (id)
)WITHOUT OIDS;


CREATE TABLE public.Etudiant(
    id        INT  NOT NULL ,
    user_id   INT  NOT NULL ,
    nom       VARCHAR (255) NOT NULL ,
    prenom    VARCHAR (255) NOT NULL ,
    note      FLOAT  NOT NULL  ,
    CONSTRAINT Etudiant_PK PRIMARY KEY (id)
)WITHOUT OIDS;