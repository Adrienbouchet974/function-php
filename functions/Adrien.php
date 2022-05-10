<?php

namespace adrien;

function checkPassword($password) {

    echo '<h1 class="text-center">Adrien</h1>';
    echo '<h4>Mot de passe :'.$password.'</h4>';
    echo '<h4 class="text-end">Force du mot de passe</h4>';

    $majuscules = preg_match('@[A-Z]@', $password);
    $minuscules = preg_match('@[a-z]@', $password);
    $nombres    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    

    //$password est vide
    if(empty($password))
    {
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    echo 
    '<div class="card list-group">
        <p class="justify-content-md-center text-center list-group-item list-group-item-action active col-6 col-md-4">Le mot de passe doit contenir les caractèrs suivants :</p>
    </div>';
    }

    
    //$password contient une valeur correspondante ( majuscules, minuscules, nombres, caractère spécial )
    if($majuscules)
    {
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    }
    


    //$password contient 2 valeurs correspondante
    if($nombres)
    {
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    }
    

    //$password contient 3 valeurs correspondantes
    if($minuscules)
    {
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    }
    
    //$password contient 4 valeurs correspondantes
    if($specialChars)
    {
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    }
    
    //$password contient 4 valeurs correspondantes et fait 12 caractères minimum
    if(strlen($password) >= 12 && $majuscules && $minuscules && $nombres && $specialChars)
    {
    echo
    '<div class="progress">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: %" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    echo '<button type="button" class="btn btn-success"><a href="index.php?password=">OK</a></button>';
    }
    
    
    if($password = empty($majuscules))
    {
    echo '<p class="text-center list-group-item list-group-item-action">1 majuscules</p>';
    }
    if($password = empty($minuscules))
    {
    echo '<p class="text-center list-group-item list-group-item-action">1 minuscules</p>';
    }
    if($password = empty($nombres))
    {
        echo '<p class="text-center list-group-item list-group-item-action">4 chiffres minimum</p>';
    }
    if($password = empty($specialChars))
    {
    echo '<p class="text-center list-group-item list-group-item-action">1 charactère spécial</p>';
    }
}
