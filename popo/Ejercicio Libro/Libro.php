<?php
class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;
    private $prestado;
    public function __construct()
    {
        $this->set_refLibro("");
    }
    public function get_autor()
    {
        return $this->autor;
    }

    public function set_refLibro($refLibro)
    {
        if(strlen($refLibro)>3){
            $this->autor = $refLibro;
        } else{
            echo "<p>No se ha podido establecer el valor de la variable RefLibro</p>";
        }
        
    }
    public function get_titulo()
    {
        return $this->titulo;
    }
    public function get_paginas()
    {
        return $this->paginas;
    }
    public function printAutor()
    {
        echo $this->autor;
    }
    public function printTitulo()
    {
        echo $this->titulo;
    }
    public function get_refLibro()
    {
        return $this->refLibro;
    }
    public function get_prestado()
    {
        return $this->prestado;
    }
    public function set_prestado(){
        $this->prestado++;
    }
    public function printLibro()
    {
        if (strlen($this->get_refLibro()) > 0) {
            echo "<p>Num de referencia: " . $this->get_refLibro() . "</p>";
        }
        echo "<p>Titulo: " . $this->get_titulo() . "</p><p>Autor: " . $this->get_autor() . "</p><p>Páginas: " . $this->get_paginas() . "</p>";
        echo "<p>Este libro ha sido prestado: ".$this->get_prestado()." veces</p>";
    }
}


/*i. Añade un campo de tipo booleano, contieneCD a la clase Libro, este 
campo indica si el libro trae conjuntamente un CD o no. El campo debe 
configurarse dentro del constructor sin pasar el parámetro.
Escribe un método selector para el mismo llamado contieneCD*/
