<?php
if (isset($_POST['expresion'])) {
    $expresion = trim($_POST['expresion']);

    // /^ inicio de cadena a comparar
    // id  recibe un id  
    // (\s*[\+\-\*\/]\s*id) acepta los caracteres seguido de un id 
    // $ termino de cadena
    
    if (preg_match('/^id(\s*[\+\-\*\/]\s*id)+$/', $expresion)) {
        echo "<p class='correcto'>✅ Correcto</p>";
    } else {
        echo "<p class='incorrecto'>❌ Incorrecto</p>";
    }
} else {
    echo "<p class='incorrecto'>❌ No se recibio ninguna expresion</p>";
}
