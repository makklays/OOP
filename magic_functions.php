<?php
/**
 * МАГИЧЕСКИЕ ФУНКЦИИ (всегда public)
 *
 * Имена функций 
 * __construct(), - конструктор класса c php 5.0
 * __destruct(), - деструктор класса c php 5.0
 * __call(), - вызывается, если отсутствует вызываемая ф-ция 5.0
 * __callStatic(), - вызывается, если отсутствует вызываемая статическая ф-ция c php 5.3
 * __get(), - геттер вызывается, если отсутствует получаемое свойство c php 5.0
 * __set(), - сеттер вызывается, если отсутствует указываемое свойство c php 5.0
 * __isset(), - вызывается при вызове isset() или empty() на отсутствующем свойстве c php 5.1
 * __unset(), - вызывается при вызове unset() на отсутствующем свойстве c php 5.1
 * __sleep(), - сериализует данные c php 5.3
 * __wakeup(), - ансериализует данные c php 5.3
 * __toString(), - реагировать при преобразовании в строку c php 5.2 
 * __invoke(), - вызывается когда пытыются выполнить объект как ф-цию $obj($param) c php 5.3
 * __set_state(), - вызывается для класcов, которые експортируются методом var_export() c php 5.1
 * __clone() и - вызывается при использовании слова clone с php 5.3
 * __debugInfo() - вызывается методом var_dump() c php 5.6
 * являются магическими в PHP. 
 * Не стоит называть свои методы этими именами, если вы не хотите использовать их магическую функциональность. 
 */
 

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);  // int(5)
var_dump(is_callable($obj));  // bool(true)
 
 
 
