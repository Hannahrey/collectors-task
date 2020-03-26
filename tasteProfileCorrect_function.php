<?php

function tasteProfileCorrect() : bool{
    return $_POST['taste_profile'] == 'bitter'|| $_POST['taste_profile'] == 'sweet'|| $_POST['taste_profile'] == 'refreshing'|| $_POST['taste_profile'] == 'fruity'|| $_POST['taste_profile'] == 'sour';
}