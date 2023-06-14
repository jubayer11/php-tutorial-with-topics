<?php
include 'project/Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    private $calculator;

    protected function setUp() : void
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown() : void
    {
        $this->calculator = NULL;
    }

    public function addDataProvider()
    {
        return array(
            array(1, 2, 3),
            array(0, 0, 0),
            array(-1, -1, -2),
        );
    }
//
//    public function testAdd()
//    {
//        $result = $this->calculator->add(1, 2);
//        $this->assertEquals(3, $result);
//    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }

}