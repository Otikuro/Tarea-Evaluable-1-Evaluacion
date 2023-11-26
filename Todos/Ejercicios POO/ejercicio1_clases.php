<?php

    class Publisher {
        private $id;
        private $name;
        private $address;
        private $telephone;
        private $website;


        function __construct ($id, $name, $address, $telephone, $website) {
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->telephone = $telephone;
            $this->website = $website;
        }

        function __get ($variable) {
            return $this->$variable;
        } 

        function __set ($variable, $data) {
            $this->$variable = $data;
        }

        function __toString() {
            return "<br>----------------------------------" .
                    "<br>ID: " . $this->id . 
                    "<br>Nombre: " . $this->name . 
                    "<br>Drección: " . $this->address;
                    "<br>Teléfono: " . $this->telephone;
                    "<br>Sitio web: " . $this->website . 
                    "<br>----------------------------------<br>";
        }
    }


    abstract class ReadingMaterial {
        private $id;
        private $title;
        private $pages;
        private $price;
        private $editor;


        function __construct ($id, $title, $pages, $price, $editor) {

        }

        function __get ($variable) {
            return $this->$variable;
        } 

        function __set ($variable, $data) {
        }

        function __toString () {
        }

        function annadirIVA () { 
        }

        function mostrarCategoria () {
            return $this->pages < 50 ? "mini" : "large";
        }
    }


    class Book extends ReadingMaterial{ 
        private $chapters;
        private $author;


        function __construct ($id, $title, $pages, $price, $editor, $chapters, $author) {
            $this->id = $id;
            $this->title = $title;
            $this->pages = $pages;
            $this->price = $price;
            $this->editor = $editor;
            $this->chapters = $chapters;
            $this->author = $author;
        }

        function __get ($variable) {
            return $this->$variable;
        } 

        function __toString () {
            return "<br>------------------------" . 
                    "<br>ID: " . $this->id .
                    "<br>Título: " . $this->title .
                    "<br>Páginas: " . $this->pages .
                    "<br>Precio: " . $this->price .
                    "<br>Editor: " . $this->editor .
                    "<br>Capítulos: " . $this->chapters .
                    "<br>Autor: " . $this->author . 
                    "<br>------------------------<br>";
        }

        function annadirIVA () {
            return "El precio del libro con el IVA del 4% incluido es de " . ($this->price + ($this->price * 0.04));
        }
    }

    class Magazine extends ReadingMaterial{
        private $additionalResources;


        function __construct ($id, $title, $pages, $price, $editor, $additionalResources) {
            $this->id = $id;
            $this->title = $title;
            $this->pages = $pages;
            $this->price = $price;
            $this->editor = $editor;
            $this->additionalResources = $additionalResources;
        }

        function annadirIVA () {
            return "El precio del libro con el IVA del 9% incluido es de " . ($this->price + ($this->price * 0.09));
        }
    }
?>