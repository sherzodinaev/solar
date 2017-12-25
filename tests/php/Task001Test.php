<?php

class Task001Test extends PHPUnit_Framework_TestCase
{

    public function test()
    {
        include 'task001.php';
        $expected = 'My name is John, I am 33 years old, and I speak following languages: English, Uzbek, Russian.';
        $actual = get_task001(33, 'John', array('English', 'Uzbek', 'Russian'));
        $this->assertEquals($expected, $actual);

        $expected = 'My name is Sarah, I am 25 years old, and I speak following languages: English, French, Spanish.';
        $actual = get_task001(25, 'Sarah', array('English', 'French', 'Spanish'));
        $this->assertEquals($expected, $actual);

    }

}