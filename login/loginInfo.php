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
        $massage = "you should not see this"; 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = filter_input(INPUT_POST, "login");
            $password = filter_input(INPUT_POST, "password");
            if(empty($login) || empty($password) ){
                echo "Empty login or password";
            }
            else{
                $error = false; 
                try{
                    $user = "root";
                    $passwordDB = "qwerty";
                    $db = new PDO("mysql:host=mysql;dbname=morningdb", $user, $passwordDB);
                    $quary = $db->prepare("SELECT * FROM `loginInfo` WHERE login = :login; ");
                    $quary->execute(["login" =>$login]);
                    $result = $quary->fetchAll();
                    //var_dump($result);
                    if(empty($result)){
                        $massage =  "Wrong login";
                        $error = true; 
                    }
                    else{
                        $isPasswordCorrect = password_verify($password, $result[0]['hashed_password']);
                        if($isPasswordCorrect){
                            $massage = "password is correct";
                        }
                        else{
                            $massage = "password is wrong";
                            $error = true; 
                        }
                    }
                }
                catch(PDOException $e){
                    $error = true; 
                    $massage = "You should not see this"; 
                    
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
        <h1><?php echo $massage?></h1>
        <?php 
        
        if($error){
            echo
        }

        ?>
    <a href=""></a>
    </footer>
</body>
</html>
