<?php

// Класс Step7plus1 
class Step7plus1 
{
    // Ф-ция getBun
    public function getBun() 
    {
        $bun = 'bun';
        return $bun;
    }    
}

$reflection = new ReflectionClass('Step7plus1');
$method = $reflaction->getMethod('getBun');
// получаем аннотации к классу и методу класса
echo $reflection->getDocComment();
echo $method->getDocComment();

// список методов класса
$methods = $reflection->getMethods();
echo '<pre>';
print_r($methods);
echo '</pre>';

// список свойств класса 
$properties = $reflection->getProperties();
echo '<pre>';
print_r($properties);
echo '</pre>';
foreach($properties as $prop)
{
    echo $prop->getName();
}
