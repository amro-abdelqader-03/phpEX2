<div>
    <h1>Sign up</h1>
    <p>Create an Account, it'e free</p>

    <form method="POST">
        <label>Email</label><br><br>
        <input type="email" name="email"><br><br>
        <label>Password</label><br><br>
        <input type="password" name="pass"><br><br>
        <label>Confirm Password</label><br><br>
        <input type="password" name="pass_conf"><br><br>
        <input type="submit" value="Sign Up">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["pass_conf"])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $pass_conf = $_POST["pass_conf"];
        if ($password != $pass_conf) {
            echo "<p>the passwords should be matched</p>";
            exit();
        }
        if (!empty($_COOKIE["email"])) {
            if($_COOKIE["email"] == $email) {
            echo "<p>email is alrady exist</p>";
            }
        } else{
            setcookie("email", $email, time() + 86400, "/");
            header("location:login.php");
            exit();
        }
    } else {
        echo "<p>the data are required</p>";
    }
}
?>