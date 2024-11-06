
    <?php
    //Crear tres variables: país, habitantes y continente a los que les darás un valor. 
    // A continuación, muestra su valor por pantalla junto con el tipo de dato que tiene cada una de ellas
        // Creamos variables
        $pais = "España";        // String
        $habitantes = 47000000;  // Integer
        $continente = "Europa";  // String

        // Mostramos por pantalla
        echo "<p>País: $pais, Tipo de dato: " . gettype($pais) . "</p>";
        echo "<p>Habitantes: $habitantes, Tipo de dato: " . gettype($habitantes) . "</p>";
        echo "<p>Continente: $continente, Tipo de dato: " . gettype($continente) . "</p>";
    ?>
</body>
</html>