<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Material Design Lite -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--Link al file CSS -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/styleClass.css">

    <!--Link al file JS-->
    <script src="/js/classi.js"></script>
    <script src="/js/funzioni.js"></script>


</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row header-style">
            <!-- Assegnazione titolo dinamica -->
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <div class="nav-md">
            <span class="mdl-layout-title">Apertamente</span>
        </div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/listaEsercenti"><i class="material-icons md-ip">list</i> Lista
                esercenti</a>
            <a class="mdl-navigation__link" href="/aggiungiEsercente"><i class="material-icons md-ip">person_add</i>
                Aggiungi esercente</a>
            <a class="mdl-navigation__link" href="/listaUtenti"><i class="material-icons md-ip">library_add</i>
                Lista utenti</a>
            <div class="mdl-layout-spacer"></div>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">