<?php require 'DB/db.php'; ?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <title>Smoook BLOG</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Start-wrap -->
    <!-- Start-Header-->
<div class="header">
    <div class="wrap">
    <!-- Start-logo-->
    <div class="logo">
        <a href="/"><img src="../images/logo.png" title="logo" /></a>
    </div>				
    <!-- End-Logo-->
    <!-- Start-Header-nav-->				
    <div class="clear"> </div>				
    <!-- End-Header-nav-->
</div>
</div>
<div class="header-nav1">
    <div class="wrap">
        <ul>
            <li class="current"><a href="/">Главная</a></li>
            <li><a href="#">Инфа</a></li>
            <li><a href="#">Помощь</a></li>
            <li><a href="#">Галерея</a></li>
            <li><a href="contact">Контакты</a></li>
        </ul>				
    <div class="search-bar">
        <ul>
            <form name="search" action="../search" method="POST">
                <li><input name="words" type="text" placeholder=" Что ищем?" required></li>
                <li><form><input type="submit" value="" name="bsearch" /></form></li>
            </form>
        </ul>
    </div>
    </div>
<!-- End-Header-->