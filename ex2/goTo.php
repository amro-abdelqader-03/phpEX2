<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $URL = $_POST["url"];
    header('Location: ' . $URL, true, 301);
    exit();
}
?>