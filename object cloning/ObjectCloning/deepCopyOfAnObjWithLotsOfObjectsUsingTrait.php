<?php

trait CloneAble
{
    public function __clone()
    {
        foreach ($this as $key => $value) {
            if (is_object($value)) {
                $this->$key = clone $this->$key;
            } else if (is_array($value)) {
                $newArray = array();
                foreach ($value as $arrayKey => $arrayValue) {
                    if (is_object($arrayValue)) {
                        $newArray[$arrayKey] = clone $arrayValue;
                    } else {
                        $newArray[$arrayKey] = $arrayValue;
                    }
                }
                $this->$key = $newArray;
            }
        }
    }
}

class C
{
    public $cName;

    public function __construct($cName)
    {
        $this->cName = $cName;
    }
}

class D
{
    public $dName;

    public function __construct($dName)
    {
        $this->dName = $dName;
    }
}

class E
{
    public $eName;

    public function __construct($eName)
    {
        $this->eName = $eName;
    }
}

class B
{
    use CloneAble;

    public $bName;
    public $objE;
    public $objD;

    public function __construct($bName, $objD, $objE)
    {
        $this->bName = $bName;
        $this->objD = $objD;
        $this->objE = $objE;
    }
}

class A
{
    use CloneAble;

    public $aName;
    public $objB;
    public $objC;

    public function __construct($aName, $objB, $objC)
    {
        $this->aName = $aName;
        $this->objB = $objB;
        $this->objC = $objC;
    }
}


$objC = new C("IamC1");
$objD = new D("IamD1");
$objE = new E("IamE1");

$objB = new B("IamB1", $objD, $objE);
$objA = new A("IamA1", $objB, $objC);

$objAClone = clone $objA;

$objAClone->aName = "IamA2";
$objAClone->objB->bName = "IamB2";
$objAClone->objC->cName = "IamC2";
$objAClone->objB->objD->dName = "IamD2";
$objAClone->objB->objE->eName = "IamE2";

var_dump($objA);

var_dump($objAClone);

?>