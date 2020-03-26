<?php
function strengthCorrect() : bool{
    return $strength == 'strong'|| $strength == 'medium'|| $strength == 'weak'|| $strength == 'non_alcoholic';
}