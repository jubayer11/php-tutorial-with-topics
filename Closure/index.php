<?php
$name = 'Mike';

$greet = function () use ($name) {
    echo "Hello,$name";
};

$greet();


//another example

class A {
    public $nm;
    function __construct($x){
        $this->nm=$x;
    }
}
// Using call method
$hello = function() {
    return "Hello " . $this->nm;
};
echo $hello->call(new A("Amar")). "\n";;
// using bind method
$sayhello = $hello->bindTo(new A("Amar"),'A');
echo $sayhello();



?>