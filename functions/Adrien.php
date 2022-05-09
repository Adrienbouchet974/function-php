<?php

namespace Adrien;

function checkPassword($password) {

    echo '<h1 class="text-center">Adrien</h1>';
    echo '<h4>Mot de passe :</h4>';
    echo '<h4 class="text-end">Force du mot de passe</h4>';

    $majuscules = range('A','Z');
    $minuscules = 'a';

    if($password == $majuscules)
    {
    echo '<p>bien joué</p>';
    }
    else
    {
    echo '<p class="text-center">1 Majuscules</p>';
    }

    if($password == $minuscules) 
    {
    echo '<p>bien joué</p>';
    }
    else
    {
    echo '<p class="text-center">1 Minuscules</p>';
    }

}