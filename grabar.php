<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
} else {
    echo "Acceso no autorizado";
}
?>