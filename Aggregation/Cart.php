<?php

class Cart
{
    private $time;

    private $itens;

    public function __construct()
    {
        $this->time = date("Y-m-d H:i:s");
        $this->itens = array();
    }

    public function addItem(Product $p)
    {
        $this->itens[] = $p;


    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getTime()
    {
        return $this->time;
    }
}
