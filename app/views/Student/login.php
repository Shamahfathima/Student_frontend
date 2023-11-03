<?php require_once("../app/views/inc/header.php"); ?>

<div class="container">
    <form action="Login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</div>

<?php require_once("../app/views/inc/footer.php"); ?>