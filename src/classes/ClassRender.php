<?php

namespace Src\classes;

class ClassRender
{
    #atributos
    private $dir;
    private $title;
    private $description;
    private $keywords;

    //getters e setters
    public function getDir(){return $this->dir;}
    public function setDir($dir){$this->dir = $dir;}
    public function getTitle(){return $this->title;}
    public function setTitle($title){$this->title = $title;}
    public function getDescription(){return $this->description;}
    public function setDescription($description){ $this->description = $description;}
    public function getKeywords(){return $this->keywords;}
    public function setKeywords($keywords){$this->keywords = $keywords;}

    #renderiza o layout
    public function renderlayout() {}

    #adiciona caractéristicas no head
    public function addHead() {}

    #adiciona caracteristicas no main
    public function addMain() {}

    #adiciona caracteristicas no footer
    public function addFooter() {}
}