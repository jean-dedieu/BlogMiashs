<?php
/*fonction helper qui nous permettra re recupérer à chaque fois le titre dans une page pour 
 setter la page à active
 */

if(!function_exists('page_title')){
    function page_title($title){
        $base_title = 'EchoMiashs - Blog';

        if($title ===  ''){

            return $base_title;
        } else{
            return $title . ' | ' . $base_title; //si la page ne contient pas de titre, on affichera choMiashs - Blog dans l'onglet de browser 
        }
    }
}