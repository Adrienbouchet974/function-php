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
    $i = NULL;
    $barre = '<div class="progress">
                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div></br>';
    
    
    
    if(empty($password))
    {
    $i = $i + 0;
    }
    else{}

    
    if($majuscules)
    {
    $i += 20;
    $maj = 'd-none';
    }
    else{}


    if($nombres)
    {
    $i += 20;
    $num = 'd-none';
    }
    else{}

    
    if($minuscules)
    {
    $i += 20;
    $min = 'd-none';
    }
    else{}

    
    if($specialChars)
    {
    $i += 20;
    $spe = 'd-none';
    }
    else{}

    
    if(strlen($password) >= 12)
    {
    $i += 20;
    $mdp = 'd-none';
    }
    else{}

    $color = NULL;
    echo '<div class="progress">';
    echo '<div class="progress-bar progress-bar-striped '.$color.' progress-bar-animated" role="progressbar" style="width:'.$i.'%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>';
    echo '</div></br>';

    if(strlen($password) >= 12 && $majuscules && $minuscules && $nombres && $specialChars)
    {
    $i == 100;
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
            break;
        case 40:
            $color =  'bg-warning';
            break;
        case 60:
            $color = 'bg-info';
            break;
        case 80:
            $color = NULL;
            break;
        case 100:
            $color = 'bg-success';
            break;
    }
}