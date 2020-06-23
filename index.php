<?php 
include("datalayer.php");
$list=readCharacters();
//var_dump($list
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?= sizeof($list); ?> characters uit de database</h1>

</header>
<div id="container">
<?php
foreach($list as $data){
    //echo $data["name"];
    creategame($data);
}
?> 
 </div>
<?
function creategame ($data) {
printf("<a class=\"item\"href=\"character.php?id=%u\">", $data["id"]);?>
    <div class="left">
        <? printf("<img class=\"avatar\" src=\"resources/images/%s\">", $data["avatar"]);?>
    </div>
    <div class="right">
        <h2><?= $data["name"]?></h2>
        <div class="stats">
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $data["health"]?></li>
                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $data["attack"]?></li>
                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $data["defense"]?></li>
            </ul>
        </div>
    </div>
    <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
</a>  


    


<?php 
}
include ("footer.php"); ?>