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
    $i = 0;
    $color = NULL;
    

    //$password est vide
    if(empty($password))
    {
    $i = $i+ 0;
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped '.$color.' progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    }
    

    
    //$password contient une valeur correspondante ( majuscules, minuscules, nombres, caractère spécial )
    if($majuscules)
    {
    $i += 20;
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped'.$color.' progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    $maj = 'd-none';
    }
    else
    {
    
    }
        


    //$password contient 2 valeurs correspondante
    if($nombres)
    {
    $i += 20;
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped'.$color.' progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    $num = 'd-none';
    }
    else
    {
    
    }
    

    //$password contient 3 valeurs correspondantes
    if($minuscules)
    {
    $i += 20;
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped'.$color.' progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    $min = 'd-none';
    }
    else
    {
    
    }
    
    //$password contient 4 valeurs correspondantes
    if($specialChars)
    {
    $i += 20;
    echo 
    '<div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    $spe = 'd-none';
    }
    else
    {
    
    }
    
    //$password contient 4 valeurs correspondantes et fait 12 caractères minimum
    if(strlen($password) >= 12)
    {
    $i += 20;
    echo
    '<div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div></br>';
    $mdp = 'd-none';
    }
    else
    {
    
    }


    if(strlen($password) >= 12 && $majuscules && $minuscules && $nombres && $specialChars)
    {
    $i = 100;
    echo '<button type="button" class="btn btn-success"><a href="index.php?password=">OK</a></button>';
    }
    else
    {
    echo '<div class="row">
            <ul class="list-group col-4 mx-auto mt-4">
                <li class="list-group-item active" aria-current="true">Le mot de passe doit contenir au moins:</li>
                <li class="list-group-item'.$num.'">1 chiffre</li>
                <li class="list-group-item'.$min.'">1 minuscule</li>
                <li class="list-group-item'.$maj.'">1 majuscule</li>
                <li class="list-group-item'.$spe.'">1 caratcère spécial</li>
                <li class="list-group-item'.$mdp.'">12 caractères</li>
            </ul>
        </div>';
    }
    
    

    Switch($i)
    {
    case 20:
        $color = 'bg-danger';
    case 40:
        $color = 'bg-warning';
    case 60:
        $color = 'bg-info';
    case 100:
        $color = 'd-none';
    }

    
}