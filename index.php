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
    <header class="header_container">
        <div class="header__logo">
            <h1>&#9734</h1>
            <p> MorningStar</p>
        </div>
        <nav class="header_navigation">
            <ul class="header_navigation-list">
                <li><a href="#">Grades</a></li> 
                <li><a href="#">Announcments</a></li> 
                <li><a href="#">Logout</a></li> 
            </ul>
        </nav>
    </header>
    <main>
        <form class="form__style" action="loginInfo.php" method="post">
            <h1 class="form__text-center">Login</h1>
            <input class="input__style" type="text" name="login" id="login"  placeholder="Your login">
            <input class="input__style" type="password" name="login" id="login"  placeholder="Your password">
            <button class="input__style form_submit" type="submit">Submit</button>
            <a class="form__create-account" href="createAccount.php">Create account</a>
        </form>

    </main>
    <footer>

    </footer>
</body>
</html>
