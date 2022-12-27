<?php
print_r($_POST);

if(isset($_POST['soumettre'])){
        
        extract($_POST);
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $identifiant = $_POST['identifiant'];
        $id_numen = $_POST['id_numen'];
        $date_naissance = $_POST['date_naissance'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $conf_mdp = $_POST['conf_mdp'];
      
        

        if(!empty($mail) && !empty($mdp)&& !empty($conf_mdp)&& !empty($date_naissance)&& !empty($id_numen)&& !empty($prenom)&& !empty($nom)&& !empty($identifiant)){
            include "./ConnectionMySQL.php";
            // global $db;
            if ($mdp==$conf_mdp){
                // $q = $db->prepare("SELECT * FROM comptes WHERE mail = ?");
                $connection = getConnection();
                //$instructions = $connection->prepare("SELECT * FROM comptes WHERE mail = ?")
               // $instructions->execute([$mail]);
               // $resultat = $instructions->fetchAll() ;
                //$result=$statement->rowCount();
                $hashpass=password_hash($mdp, PASSWORD_BCRYPT);

                //if (count($resultat)==0){
                    $statement = $connection->prepare("INSERT INTO comptes (id_numen,mail,mdp,date_naissance) VALUES (?,?,?,?)");
                    $statement->execute([$id_numen,$mail,$mdp,$date_naissance]);
                //} else {
                // echo"<script type='text/javascript'>alert('erreur un mail avec ce compte existe déjà');</script>";  
                //}
                
            }
            else {
                echo"<script type='text/javascript'>alert('les deux mots de passes sont incorrect');</script>";
            }
        }
        
        else{
            $message = "Veuillez remplir l'ensemble des champs";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    

    }
?>