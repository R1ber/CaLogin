<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <h2>Login</h2>
       <form action="main.php" method="POST">
            <label for="nickname">Nickname:</label>
          <input type="text" id="nickname" name="nickname" required><br><br>
        
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" required><br><br>
        
          <input type="submit" value="Login">
       </form>
    </center>
</body>
</html>