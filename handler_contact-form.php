<?php

session_start();

if(isset($_POST['data-username']) && !empty($_POST['data-username'])
&& isset($_POST['data-email']) && !empty($_POST['data-email'])
&& isset($_POST['data-object']) && !empty($_POST['data-object'])
&& isset($_POST['data-message']) && !empty($_POST['data-message'])){

    $contact_username = strip_tags($_POST['data-username']);
    $contact_email = strip_tags($_POST['data-email']);
    $contact_subject = strip_tags($_POST['data-object']);
    $contact_message = strip_tags($_POST['data-message']);   

    require_once('db-connect.php');

    $sql = 'INSERT INTO `tbl_contacts` (`contact_username`, `contact_email`, `contact_subject`, `contact_message`) VALUES (:contact_username, :contact_email, :contact_subject, :contact_message)';
    $query = $db->prepare($sql);
    $query->bindValue(':contact_username', $contact_username, PDO::PARAM_STR);
    $query->bindValue(':contact_email', $contact_email, PDO::PARAM_STR);
    $query->bindValue(':contact_subject', $contact_subject, PDO::PARAM_STR);
    $query->bindValue(':contact_message', $contact_message, PDO::PARAM_STR);
    $query->execute();

    header('location: index.php');

} else {

    $_SESSION['message'] = 'Remplissez tous les champs !';

    header('location: index.php');

}




// EOF