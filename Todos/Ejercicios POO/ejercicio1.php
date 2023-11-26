<?php
    include "./ejercicio1_clases.php";
    /*
    1. Realizar un programa para un Centro Educativo en el que acaban de abrir una tienda de libros y
    revistas para comprar y vender de segunda mano. Las clases necesarias serán:
        ● Clase abstracta ReadingMaterial
            ○ variables privadas: id, title, pages, price
            ○ objeto private editor de la clase Publisher (ver descripción de la clase más abajo)
            ○ método añadirIVA (el IVA de los Book es de 4% y el de Magazine de 9%)
            ○ método mostrarCategoria (pages<50: “mini”, pages>50 “large”)
        ● Clase pública Book (hija de ReadingMaterial)
            ○ variables privadas: chapters, authors
        ● Clase pública Magazine (hija de ReadingMaterial)
            ○ variable privada: additionalResources
        ● Clase pública Publisher
            ○ variables privadas: id, name, address, telephone, website

        Todas las clases deben incluir constructor y métodos getter y setter

        Crea un objeto un objeto Publisher con el valor de las variables que desees.
        Crea un objeto Book y un objeto Magazine con el valor de las variables que desees, muéstralas en una
        web php, actualízalas y vuelve a mostrarlas por pantalla.

        Añade las siguientes funcionalidades y prueba los métodos con alguna instancia.
            a) Incluye una función de ordenación utilizando el algoritmo BubbleSort (ordenación de libros
            por precio ascendente o descendente)
            b) Realiza un método de ordenación por orden alfabético del título.
            c) Ordena por orden alfabético al menos 5 referencias (a introducir en el array de libros o
            magazines).
            d) Método de búsqueda en el array de libros o magazines por autor.
            e) Método de búsqueda en el array de libros o magazines por título
    */

    $publisher1 = new Publisher(11, "Planeta", "Avenida España, 8", "123456789", "Planeta.com");

    $book1 = new Book(1, "Don Quijote", 800, 15.50, $publisher1, 40, "Cervantes");
    $magazine1 = new Magazine(2, "Revista escolar", 20, 4.20, $publisher1, 5, "Lorenzo");

    echo $book1;

    //$libreria = [$book1, $magazine1];




    function ordenarPrecio () {

    }

    function ordenarAlfabetico () {
        
    }

    function busquedaPorAutor () {

    }

    function busquedaPorTitulo () {

    }
?>