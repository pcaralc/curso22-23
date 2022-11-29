<?php
class Libro{
    private $id;
    private $isbn;
    private $titulo;
    private $subtitulo;
    private $descripcion;
    private $autor;
    private $editorial;
    private $categoria;
    private $ejemplaresTotales;
    private $ejemplaresDisponibles;

    public function __construct($isbn="", $titulo="", $subtitulo="", $descripcion="", $autor="", $editorial="", $categoria="", $ejemplaresTotales="", $ejemplaresDisponibles=""){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->descripcion = $descripcion;
        $this->autor = $autor;
        $this->editorial = $editorial;
        $this->categoria = $categoria;
        $this->ejemplaresTotales = $ejemplaresTotales;
        $this->ejemplaresDisponibles = $ejemplaresDisponibles;
    }

    /**
     * Get the value of ejemplaresDisponibles
     */ 
    public function getEjemplaresDisponibles()
    {
        return $this->ejemplaresDisponibles;
    }

    /**
     * Set the value of ejemplaresDisponibles
     *
     * @return  self
     */ 
    public function setEjemplaresDisponibles($ejemplaresDisponibles)
    {
        $this->ejemplaresDisponibles = $ejemplaresDisponibles;

        return $this;
    }

    /**
     * Get the value of ejemplaresTotales
     */ 
    public function getEjemplaresTotales()
    {
        return $this->ejemplaresTotales;
    }

    /**
     * Set the value of ejemplaresTotales
     *
     * @return  self
     */ 
    public function setEjemplaresTotales($ejemplaresTotales)
    {
        $this->ejemplaresTotales = $ejemplaresTotales;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of editorial
     */ 
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Set the value of editorial
     *
     * @return  self
     */ 
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of subtitulo
     */ 
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set the value of subtitulo
     *
     * @return  self
     */ 
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}


?>