<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="style.css">
    <?php
        $error = true; 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = filter_input(INPUT_POST, "login");
            $password = filter_input(INPUT_POST, "password");
            $accountType = filter_input(INPUT_POST, "accountType");
            if(empty($login) || empty($password) || empty($accountType) ){

            }
            else{
                $error = false; 
                try{
                    require_once("../db.php");
                    $quary = $db->prepare("INSERT INTO loginInfo 
                                ( login, hashed_password, role )
                                VALUES( :login, :hashed_password, :role)");
                    $quary->execute([  
                                        "login" =>$login,  
                                        "hashed_password" => password_hash($password, PASSWORD_DEFAULT), 
                                        "role" => $accountType]);
                    echo "<script>localStorage.setItem('role', '$accountType');</script>";
                    echo "<script>localStorage.setItem('login', '$login');</script>";
                }
                catch(PDOException $e){
                    $error = true; 
                    $massage;
                }
            }
        }
    ?>
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
        <h1><?php echo $error?"An error happened":"Account created" ?></h1>
    </main>
    <footer>

    </footer>
</body>
</html>
