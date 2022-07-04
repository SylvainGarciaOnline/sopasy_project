<?php

session_start();

if(isset($_POST['data-username']) && !empty($_POST['data-username'])
&& isset($_POST['data-email']) && !empty($_POST['data-email'])
&& isset($_POST['data-phone']) && !empty($_POST['data-phone'])
&& isset($_POST['data-message']) && !empty($_POST['data-message'])){

    $contact_username = strip_tags($_POST['data-username']);
    $contact_email = strip_tags($_POST['data-email']);
    $contact_phone = strip_tags($_POST['data-phone']);
    $contact_message = strip_tags($_POST['data-message']);
    
    $mail_recipient = "s.garcia@codeur.online";
    $mail_headers = "From:" . $contact_username . "<" . $contact_email . ">\r\n";

        if(mail($mail_recipient, $contact_subject, $contact_message, $mail_headers)){
            $_SESSION['message'] = "Message envoyé !";
        } else {
            $_SESSION['message'] = "Le message n'a pas été envoyé...";
        }

    require_once('db_connect.php');

    $sql = 'INSERT INTO `tbl_contact-form` (`contact_username`, `contact_email`, `contact_phone`, `contact_message`) VALUES (:contact_username, :contact_email, :contact_phone, :contact_message)';
    $query = $db->prepare($sql);
    $query->bindValue(':contact_username', $contact_username, PDO::PARAM_STR);
    $query->bindValue(':contact_email', $contact_email, PDO::PARAM_STR);
    $query->bindValue(':contact_phone', $contact_phone, PDO::PARAM_STR);
    $query->bindValue(':contact_message', $contact_message, PDO::PARAM_STR);
    $query->execute();

    header('location: view_contact-form.php');

} else {

    $_SESSION['message'] = 'Remplissez tous les champs !';

    header('location: index.php');

}




// EOF