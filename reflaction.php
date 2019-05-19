<?php

class Step7plus1 
{
    public function getBun() 
    {
        $bun = 'bun';
        return $bun;
    }    
}

$reflection = new ReflectionClass('Step7plus1');
$method = $reflaction->getMethod('getBun');
// получаем аннотации к методу класса
echo $method->getDocComment();
