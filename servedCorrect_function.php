<?php
function servedCorrect() : bool{
    return $served == 'on_rocks'|| $served == 'frozen'|| $served == 'over_crushed_ice'|| $served == 'straight_up';
}