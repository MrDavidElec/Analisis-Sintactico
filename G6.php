<?php
if (isset($_POST['expresion'])) {
    $expresion = trim($_POST['expresion']);

    // Expresión regular extendida: acepta id+id, id-id*id/id, etc.
    if (preg_match('/^id(\s*[\+\-\*\/]\s*id)+$/', $expresion)) {
        echo "<p class='correcto'>✅ Correcto</p>";
    } else {
        echo "<p class='incorrecto'>❌ Incorrecto</p>";
    }
} else {
    echo "<p class='incorrecto'>❌ No se recibió ninguna expresión</p>";
}
