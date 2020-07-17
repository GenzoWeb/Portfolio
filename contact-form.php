<?php 
    session_start();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errors = [];

    if ((!isset($name) || $name == '') || (!isset($message) || $message == '')){
        $errors['formEmpty'] = "Veuillez remplir tout les champs !";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailValid'] = "Vous n'avez pas renseigné un email valide !";
    }

    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: index.php#contact');
    }else{
        $to = 'genzo10@hotmail.fr';
        $subject = 'Formulaire de contact';
        $messageSend ='
        <html>
            <head>
                <title>Contact Portfolio</title>
            </head>
            <body>
                <p>
                    Adresse mail : ' . $email .' <br/>
                    Message envoyé par : ' . $name . '. <br/> <br/>'
                    . $message .'
                </p>
            </body>
        </html>
        ';

        $headers = array(
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=UTF-8',
            'From' => 'site@genzo.fr',
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        );

        $_SESSION['success'] = "Votre message a bien été envoyé !";

        mail($to, $subject, $messageSend, $headers);
        header('Location: index.php#contact');
    }
?>