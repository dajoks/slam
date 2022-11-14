

create table date_ccf
(
    date_de_epreuve date,
    heure mediumtext,
    durée longblob,
    année_scolaire SMALLINT
);

create table nom_ccf
(
    nom_intervenant varchar(14),
    prénom_intervenant varchar(14),
    identifiant_NUMEN char(12),
    nom_candidat varchar(14),
    prénom_candidat varchar(14),
    identifiant_candidat char(12)
);