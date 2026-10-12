<?php
if(isset($_COOKIE["counter"])){
    $counter = (int)$_COOKIE["counter"];
    setcookie("counter", $counter + 1, time()+ 3600);
}else{
    setcookie("counter", 1, time()+ 3600);   
}
$counter = (int)$_COOKIE["counter"];
echo "<p> counter : ".$counter."</p>";
?>