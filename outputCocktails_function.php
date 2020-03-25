<?php
// to take the cocktails data that I already got from the db (getCocktails function) and output it to the frontend



function outputCocktails(array $result) : string {
    $cocktail_details = "";

    foreach ($result as $cocktail) {
        $cocktail_details .= '<div class="box1">';
        $cocktail_details .=   '<h2>' . $cocktail['name'] .
                '</h2>';
        $cocktail_details .=  '<ul>' . 
                    '<li>' . $cocktail['alcohol_base'] .
                    '</li>';
        $cocktail_details .=     '<li>' . $cocktail['taste_profile'] .
                    '</li>';
        $cocktail_details .=  '<li>' . $cocktail['ingredients'] .
                    '</li>';
        $cocktail_details .=  '<li>' . $cocktail['method'] .
                    '</li>';
        $cocktail_details .=  '<li>' . $cocktail['strength'] .
                    '</li>';
        $cocktail_details .=   '<li>' . $cocktail['served'] .
                    '</li>' .
                 '</ul>';
        $cocktail_details .=  '</div>';
    }
    return $cocktail_details;
};

