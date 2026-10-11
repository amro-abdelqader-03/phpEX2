<?php
$num1 = (int) $_POST["num1"];
$num2 = (int) $_POST['num2'];
$operation = $_POST['operations'];;
$result = 0;
if ($operation == "+") {
    $result = $num1 + $num2;
    echo "$result";
} else if ($operation == "-") {
    $result = $num1 - $num2;
    echo "$result";
} else if ($operation == "*") {
    $result = $num1 * $num2;
    echo "$result";
} else if ($operation == "/") {
    $result = $num1 / $num2;
    echo "$result";
} else {
    echo "invalid operation";
}
?>