<?php
function strengthCorrect() : bool{
    return $_POST['strength'] == 'strong'|| $_POST['strength'] == 'medium'|| $_POST['strength'] == 'weak'|| $_POST['strength'] == 'non_alcoholic';
}