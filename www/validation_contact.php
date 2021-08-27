

<?php

/*
$email = trim($_POST["email"]);

if(!pregmatch("/^[.\da-z-]+@[a-z\d][a-z\d-]+.+[a-z]{2,6}$/i", $email)){

}else{
    print "E-mail not valid!";
}
*/

/*
session_start();
*/

// On s'amuse à créer quelques variables de session dans $_SESSION
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    
    echo ('reservation validée');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
   /* 
    $_SESSION['firstName'] ;
    $_SESSION['lastName']
    $_SESSION['email'] = ;
*/

}
 # Title of the CSV
        //$Content = "firstname, lastname, email";

        //set the data of the CSV
        $Content .= "$firstname; $lastname; $email;\n";

        # set the file name and create CSV file
        //$FileName = "messages".date("d-m-y-h:i:s").".csv";
        $FileName = "messages.csv";

        // Écrit l'info obtenue dans le fichier
        //file_put_contents($FileName, $FileName);
        file_put_contents($FileName, $Content, FILE_APPEND | LOCK_EX);


        //mail($firstname,$lastname,$email); 
       // $confirmation = " " . $name . ", merci pour votre message, vous allez recevoir une confirmation par email dans les plus brefs délais";



        //header('Content-Type: application/csv'); 
        //header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
        //echo $Content;
        //exit();

?>