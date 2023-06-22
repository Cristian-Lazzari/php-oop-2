<?php
class Product{
    function __construct(
        protected string $nome,
        protected string $colore,
        protected string $peso,
    )
    {
        
    }
}