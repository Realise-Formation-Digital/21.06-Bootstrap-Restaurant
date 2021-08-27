<?php
    if (isset($_POST["login2"])&&isset($_POST["mpasse"])){
        $trouve = false;
        if (($handle = fopen("users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                for ($c=0; $c < $num; $c++) {
                    $teste=explode(";",$data[0]);
                    if ($teste[0]==$login2){
                        if ($teste[1]==md5($mpasse)){
                            echo "Vous êtes connecté";
                            exit;
                        }else{
                            echo "Votre mot de passe est pas valable.";
                        }
                    }else{
                        echo "Username est pas valable.";
                        echo $teste[0];
                    }

                }
            }
            fclose($handle);
        }else{
            
        }        
    }

    //This variable is used to report all error messages.
    $error="";

    if(isset($_POST["prenom"])&&isset($_POST["nom"])&&isset($_POST["tel"])&&isset($_POST["email"])&&isset($_POST["login"])&&isset($_POST["mpasse1"])&&isset($_POST["mpasse2"])){
        $prenom = trim($_POST["prenom"]); 
        $nom = trim($_POST["nom"]); 
        $tel = trim($_POST["tel"]); 
        $email = trim($_POST["email"]);
        $login = trim($_POST["login"]);
        $main_pass1= trim($_POST["mpasse1"]);
        $main_pass2= trim($_POST["mpasse2"]);

        //It tests if is a valid e-mail
        if(!preg_match("/^[_.\da-z-]+@[a-z\d][a-z\d-]+\.+[a-z]{2,6}$/i", $email)){
            $error=$error."<br>"."E-mail not valid!";
        }

        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $login)){
            $error=$error."<br>"."Please do not use special characteres in login!";
        }

        //It tests if password matches its confirmation.
        if($main_pass1==$main_pass2){
            $md5_pass=md5($main_pass1);
        }else{
            //If password doesn't match its confirmation, send an error message.
            $error=$error."<br>"."Votre mot de passe n'est pas egale!";
        }

        $trouve = false;
        if (($handle = fopen("users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                for ($c=0; $c < $num; $c++) {
                    $test=explode(";",$data[0]);
                    if ($test[0]==$login){
                        $trouve = true;

                    }

                }
            }
            fclose($handle);
        }else{
            
        }

        if ($trouve) {
            echo "Unfortunately this username already exists!";
        }else{
            if($error!=""){
                echo $error;
            }else{
                echo "L&apos;inscription a été effectué avec succès.";
                $myfile = fopen("users.csv", "a");
                //le problem est ici:
                fputcsv($myfile, [$login, md5($main_pass1)]);
                //le problem est ici.
                fclose($myfile);
            }
        }
    }
?>