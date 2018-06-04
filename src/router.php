<?php
include ('../model/object.php');
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/':
            index();
            break;
        case '/listaEsercenti':
            getListaEsercenti($headers);
            break;
        case '/listaUtenti':
            getUtenti($headers);
            break;

        case '/aggiungiEsercente':
            getAggiungiEsercente($headers);
            break;
        default:
            notFound();
            break;
    }
}

function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/aggiungiEsercente':
            postEsercente();
            break;

        default:
            notFound();
            break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Classico Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "400 Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function getListaEsercenti($headers){

    $r = esercenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/visualizza.php';
        visualizzaEsercente($r);
    }else{
        echo $r;
    }
}
function getUtenti($headers){

    $r = utenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/visualizza.php';
        visualizzaUtente($r);
    }else{
        echo $r;
    }
}


function getAggiungiEsercente($headers){

    $r = utenti();
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/visualizza.php';
        doAggiungiEsercente($r);
    }else{
        echo $r;
    }
}


function postEsercente(){

    //Qui faccio qualcosa con il coso del post
    //Per esempio

    if (isset($_POST)) {

        //fai la sanitizzazione dei campi
        //poi chiami la funzione del model (object.php)
        //require __DIR__ . '/../model/object.php';
        addEs($_POST);
    }
}


function login(){
    //Controlli sulla post
    doLogin($_POST);

}

function index(){
    echo "pagina principale";
}


?>