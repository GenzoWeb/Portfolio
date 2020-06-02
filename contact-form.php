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
        $headers = 'FROM: site@genzo.fr';
        $_SESSION['success'] = "Votre message a bien été envoyé !";
        mail('genzo10@hotmail.fr', 'Formulaire de contact', $message, $headers);
        header('Location: index.php#contact');
    }
?>