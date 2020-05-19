<?php
// to take the cocktails data that I already got from the db (getCocktails function) and output it to the frontend



function outputCocktails(array $result) : string {
    $cocktail_details = "";

    foreach ($result as $cocktail) {
        $cocktail_details .= '<div class="box1">';
        $cocktail_details .= '<h2>' . $cocktail['name'] .
                '</h2>';
        $cocktail_details .=  '<ul>' . 
                    '<li> Alcohol base: ' . $cocktail['alcohol_base'] .
                    '</li>';
        $cocktail_details .=     '<li>Taste Profile: ' . $cocktail['taste_profile'] .
                    '</li>';
        $cocktail_details .=  '<li>Ingredients: ' . $cocktail['ingredients'] .
                    '</li>';
        $cocktail_details .=  '<li>Method: ' . $cocktail['method'] .
                    '</li>';
        $cocktail_details .=  '<li>Strength: ' . $cocktail['strength'] .
                    '</li>';
        $cocktail_details .=   '<li>Served: ' . $cocktail['served'] .
                    '</li>' .
                 '</ul>';
        $cocktail_details .=  '</div>';
    }
    return $cocktail_details;
};

