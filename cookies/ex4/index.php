<?php
if(isset($_COOKIE["name"])){
    $name = $_COOKIE["name"];
    echo"<p>".$name."</p>";
}else{
    setcookie("name","amro", time()+60);
}
?>