<?php

//autogenerated code 
abstract class Expr{
}

 class Binary extends Expr{
    public $left;
    public $Token;
    public $Expr;
}

 class Grouping extends Expr{
    public $expression;
}

 class Literal extends Expr{
    public $Value;
}

 class Unary extends Expr{
    public $operator;
    public $Expr;
}
