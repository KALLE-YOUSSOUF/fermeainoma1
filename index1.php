<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='accueil') {
        include_once('view/accueil.php');
    }elseif ($action=='presentation') {
        include_once('view/presentation.php');
    }elseif ($action=='produit') {
        include_once('view/produit.php');
    }elseif ($action=='activite') {
        include_once('view/activite.php');
    }elseif ($action=='contact') {
        include_once('view/contact.php');
    }
}else {
    include_once('view/accueil.php');
}