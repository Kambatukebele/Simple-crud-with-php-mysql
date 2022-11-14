<?php
    include "database.php"; 

    if (isset($_POST['send'])){
        $email = $_POST['email']; 
        $password= $_POST['password_admin']; 

        
        $query = $conn->prepare("SELECT * FROM admin_ambassade"); 
        $query->execute(); 
         $stmt= $query->setFetchMode(PDO::FETCH_ASSOC); 
         $result = $query->fetchAll(); 
        
     

        if($email === $result[0]['email'] || $email === $result[1]['email'] ){
            if($password === $result[0]['password_admin'] || $password === $result[1]['password_admin'] ){
                 $_SESSION[0]['email'] = $result[0]['email']; 
                 $_SESSION[1]['email'] = $result[1]['email']; 

                 header("Location:index.php"); 
            }else{
                echo "mot de passe incorrect"; 
            }
        }else{ 
            echo "email est faux"; 
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>LOGIN PAGE</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>

    <?php
        if(isset($message)){
            echo $message; 
        }
    ?>
        <div>
            <form action="" method="POST">
             
                Email: <input type="email" name="email" id="" placeholder="Email"><br>
                Password: <input type="password" name="password_admin" placeholder="Password"><br>
                <button name="send">Se connecter</button>
            </form>
        </div>
    </main>
</body>
</html>