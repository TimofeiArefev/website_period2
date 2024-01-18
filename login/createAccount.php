<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once("../header/header.php");?>
    <main>
        <form class="form__style" action="accountCreated.php" method="POST">
            <h1 class="form__text-center">Create account</h1>
            <input class="input__style" type="text" name="login" id="login"  placeholder="Create login">
            <input class="input__style" type="password" name="password" id="password"  placeholder="Create password">
            <select class="input__style" name="accountType" id="accountType">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
            </select>
            <button class="input__style form_submit" type="submit">Submit</button>
            <a class="form__create-account" href="index.php">Already have  account</a>
        </form>

    </main>
    <footer>

    </footer>
</body>
</html>
