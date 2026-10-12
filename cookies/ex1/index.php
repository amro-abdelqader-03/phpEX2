<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["colors"])){
        setcookie("color", $_POST["colors"], time()+  3600);
    }
}
?>

<?php
if(isset($_COOKIE["color"])){
    $color = $_COOKIE["color"];
    echo '<body style="background-color:'.$color.'">';
}
?>

<div>
    <form method="POST">
        <label for="colors">Choose a color:</label>
        <select name="colors">
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">gr</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>