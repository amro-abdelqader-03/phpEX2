<div>
    <h1>Login</h1>
    <p>Welcome back ! Login with your credentials</p>

    <form method="POST">
        <label>Email</label><br><br>
        <input type="email" name="email"><br><br>
        <label>Password</label><br><br>
        <input type="password" name="pass"><br><br>
        <input type="submit">
    </form>
</div>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_COOKIE["email"])){
        if($_COOKIE["email"] == $_POST["email"]){
            echo"<p>the login success</p>";
        }
        else{
            echo "invalid email or password";
            }
    }
}
?>