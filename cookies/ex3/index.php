<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["username"])){
        $username = $_POST["username"];
        setcookie("username", $username, time() + 3600);
    }
}
?>
<?php
$username = "";
if(isset($_COOKIE["username"])){
    $username = $_COOKIE["username"];
}
?>

<div>
    <form method="POST">
        <label>Username : </label>
        <input id="input_text" type="text" value="<?php echo $username; ?>" name="username" required><br><br>
        <input type="submit">
    </form>
</div>