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
                '<li>rum</li>' . 
                '<li>refreshing</li>' . 
                '<li>misc</li>' . 
                '<li>make etc</li>' . 
                '<li>medium</li>' . 
                '<li>over crushed ice</li>' . 
            '</ul>' . 
        '</div>';

        //input
        $input = [
            'name' => 'Mojito',
            'alcohol_base' => 'rum',
            'taste_profile' => 'refreshing',
            'ingredients' => 'misc',
            'method' => 'make etc',
            'strength' => 'medium',
            'served' => 'over crushed ice',
        ];

        $case = outputCocktails($input);
        $this->assertEquals($expected, $case);
    }


    //malformed test
    public function testMalformedOutputCocktails() {

        //input

        $input = [
            'name' => 'Mojito',
            'alcohol_base' => 'rum',
            'taste_profile' => 'refreshing',
            'ingredients' => [
                1 => 'rum',
                2 => 'mint',
                3 => 'lime',
                4 => 'sugar',
                5 => 'soda',
            ],
            'method' => 'make etc',
            'strength' => 'medium',
            'served' => 'over crushed ice',
        ];

        $this->expectException(TypeError::class); 

        $case = outputCocktails($input);

    }


}