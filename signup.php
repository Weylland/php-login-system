<?php
    require "header.php";
?>

    <main class="container">
        <h1 class="text-center m-3" >Signup</h1>
        <form action="includes/signup.inc.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="uid" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="mail" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd-repeat" placeholder="Reapeat password">
            </div>
            <button type="submit" class="form-control" name="signup-submit">Signup</button>
        </form>
    </main>

<?php
    require "footer.php";
?>