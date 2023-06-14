<?php
class testClass
{
    const hello='abcd';
    public function constChek()
    {
        print_r(self::hello);
    }

}

$obj=new testClass();
$obj->constChek();
print_r(testClass::hello);
?>