<?php
include_once __DIR__ . '/Product.php';

class Category extends Product {
    public function __construct(
        public string $nome,
        protected string $colore,
        protected string $peso,
        protected string $category,
    )
    {
        parent::__construct( $nome, $colore, $peso);
    }

    public function stampaCategory(){
        return $this->category;
    }
}