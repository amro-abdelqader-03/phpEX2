<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["item"])){
        $item = $_POST["item"];
        echo "$item";
        exit();
    }
}
?>