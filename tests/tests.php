<?php

require '../outputCocktails_function.php';
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    //success test
    public function testSuccessOutputCocktails() {

        //expected result of test
       $expected = 
       '<div class="box1">' . 
            '<h2>Mojito</h2>' . 
                '<ul>' . 
                '<li> Alcohol base: rum</li>' .
                '<li>Taste Profile: refreshing</li>' .
                '<li>Ingredients: misc</li>' .
                '<li>Method: make etc</li>' .
                '<li>Strength: medium</li>' .
                '<li>Served: over crushed ice</li>' .
            '</ul>' . 
        '</div>';

        //input
        $input = [
            [
            'name' => 'Mojito',
            'alcohol_base' => 'rum',
            'taste_profile' => 'refreshing',
            'ingredients' => 'misc',
            'method' => 'make etc',
            'strength' => 'medium',
            'served' => 'over crushed ice',
            ],
        ];

        $case = outputCocktails($input);
        $this->assertEquals($expected, $case);
    }


    //malformed test
    public function testMalformedOutputCocktails() {

        //input

        $input = 'Mojito';

        $this->expectException(TypeError::class); 

        $case = outputCocktails($input);

    }

}

