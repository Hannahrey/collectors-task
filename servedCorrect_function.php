<?php
function servedCorrect() : bool{
    return $_POST['served'] == 'on_rocks'|| $_POST['served'] == 'frozen'|| $_POST['served'] == 'over_crushed_ice'|| $_POST['served'] == 'straight_up';
}