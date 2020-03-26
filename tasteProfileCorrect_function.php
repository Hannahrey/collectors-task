<?php
function tasteProfileCorrect() : bool{
    return $taste_profile == 'bitter'|| $taste_profile == 'sweet'|| $taste_profile == 'refreshing'|| $taste_profile == 'fruity'|| $taste_profile == 'sour';
}