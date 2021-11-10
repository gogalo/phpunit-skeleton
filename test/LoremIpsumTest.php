<?php

namespace App\Test;

use App\LoremIpsum;
use PHPUnit\Framework\TestCase;

class LoremIpsumTest extends TestCase
{
    /**
     * @test
     */
    public function say_hello_word()
    {
        $loremIpsum = new LoremIpsum();
        $this->assertEquals($loremIpsum->greets(), "hello word");
    }
}