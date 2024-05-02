<?php

function AfficheLangage ($cnx , $id) {
    $sql = 'SELECT * FROM langue where id = :langage';
    $req = $cnx->prepare($sql);
    $req->execute(
        array(
            ':langage' => $id
        )
        );
    $data = $req->fetch(PDO::FETCH_ASSOC);
    return $data;
}