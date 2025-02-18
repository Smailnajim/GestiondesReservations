<?php 
session_start(); 
$_SESSION['token'] = md5(uniqid(mt_rand(), true))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/authentification.css">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        <input type="hiden" name='token' value="<?php  echo $_SESSION['token'] ?? '' ?>">
        <section id='name'>
            <input type="text" placeholder="First name" name="firstname" require>
            <input type="text" placeholder="Laste name" name="lastename" require>
        </section>
        
        <input type="email" placeholder="Email" name="email" require>

        <input type="password" placeholder="Password" name="password" require>

        <button type="submit">Submit</button>
    </form>
</body>
</html>