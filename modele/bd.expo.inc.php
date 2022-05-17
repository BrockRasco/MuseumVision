<?php
include_once "bd.inc.php";


function getExpos() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from exposition");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;}

function getTarA($id) {


    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select tarifAdulte from exposition where id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTarE($id) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select tarifEnfant from exposition where id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;}

function getIdExpoMax(){

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select max(id) from exposition");
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);


    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return intval($resultat);}

