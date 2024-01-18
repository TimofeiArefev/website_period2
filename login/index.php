<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once("../header/header.php");?>
    <main>
        <form class="form__style" action="loginInfo.php" method="post">
            <h1 class="form__text-center">Login</h1>
            <input class="input__style" type="text" name="login" id="login"  placeholder="Your login">
            <input class="input__style" type="password" name="password" id="password"  placeholder="Your password">
            <button class="input__style form_submit" type="submit">Submit</button>
            <a class="form__create-account" href="createAccount.php">Create account</a>
        </form>

    </main>
    <footer>

    </footer>
</body>
</html>
