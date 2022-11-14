create table note_ccf
(
    code_ccf char(2)
    libellé_ccf varchar(29)
    libellé_bts varchar(4)
    note_obtenu float
    coefficient float
    commentaire longtext
)

create table date_ccf
(
    date_de_epreuve date,
    heure mediumtext(8),
    durée longblob(3),
    année_scolaire smallint(4)
)

create table nom_ccf
(
    nom_intervenant varchar(14),
    prénom_intervenant varchar(14),
    identifiant_NUMEN char(12),
    nom_candidat varchar(14),
    prénom_candidat varchar(14),
    identifiant_candidat char(12)
)