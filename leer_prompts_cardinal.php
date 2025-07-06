<?php
// URL directa al JSON en GitHub (RAW)
$url_json = "https://raw.githubusercontent.com/tu-usuario/brujula-digital-cms/main/modulos/marketing_estrategico.json";

// 1️⃣ Obtener el contenido del archivo
$contenido = file_get_contents($url_json);

// 2️⃣ Decodificar el JSON en arreglo PHP
$datos = json_decode($contenido, true);

// 3️⃣ Validar que se pudo leer correctamente
if ($datos && isset($datos['prompts_cardinales'])) {
    echo "<h2>🧭 Prompts Cardinales Activos:</h2><ul>";
    
    foreach ($datos['prompts_cardinales'] as $prompt) {
        echo "<li><strong>" . $prompt['codigo'] . "</strong>: " . $prompt['narrativa'] . "</li>";
    }

    echo "</ul>";
} else {
    echo "<p>⚠️ No se pudo cargar el JSON o la estructura no está disponible.</p>";
}
?>
