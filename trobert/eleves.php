<?php
$matieresSIO = array('Mathématiques', 'Bloc 1',
'Bloc 2', 'Bloc 3', 'Anglais', 'Culture générale',
'Algorithmique', 'Culture Economique Juridique & managériale',
'PIX', 'Parcours professionnel');

print_r($matieresSIO) ;
echo "<BR>" ;
echo $matieresSIO[0] ;
echo $matieresSIO[2] ;
echo "<BR>" ;

$matieresSIO[] = 'Relaxation' ;
print_r($matieresSIO) ;

$notes = array('Mathématiques'=> 18, 'Bloc 1'=> 16,
'Bloc 2'=> 15, 'Bloc 3'=> 14, 'Anglais'=> 12, 'Culture générale'=> 11,
'Algorithmique'=> 12, 'Culture Economique Juridique & managériale'=> 15,
'PIX'=> 10, 'Parcours professionnel'=> 18);
print_r($notes);
echo "<BR>" ;
$elevesSIO = array('mathématique', 'bloc 1', 'bloc 2', 'bloc 3','anglais','algorithmique','cejm');
print_r($elevesSIO) ;
echo "<BR>" ;

$elevesSIO[] = 'parcours professionnel' ;
print_r($elevesSIO) ;


echo "<BR>" ;
foreach ($elevesSIO as $unEleve) {
    echo "j'ai cette matière $unEleve ! <BR>" ;
}

print_r($matieresSIO);
echo "<br>";
unset($matieresSIO[6]);
echo "<br>";
print_r($matieresSIO);

$payscapitale = array('france' => 'paris', 'portugal')