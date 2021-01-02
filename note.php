<?php  

    $req = $bdd->prepare('INSERT INTO stars(note, film) VALUES (:note, :film)');
    $req->exectue(array(
        'note' => $_POST['rating'];
        'film' => $_GET['episode'];
    ));

?>