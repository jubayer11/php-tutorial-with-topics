<?php

use PHPUnit\Framework\TestCase;


class FirstTest extends TestCase
{
    /**  @test */

 public function MultiplicationOfTwoNumber()
 {
     $a=5;
     $b=4;
     $c=$a*$b;
     $this->assertEquals($c,20);
 }
}
?>