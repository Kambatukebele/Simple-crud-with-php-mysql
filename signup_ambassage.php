<?php
    //connect database

    include "database.php"; 
    if(isset($_POST['send']))
    {
         //capture input
        $first_name =  $_POST['first_name']; 
        $email =  $_POST['email']; 
        $password =  $_POST['password_admin']; 

        //insert dans la database

        $sql = "INSERT INTO admin_ambassade (first_name,email,password_admin)VALUES('$first_name', '$email', '$password')"; 

        $result = $conn->exec($sql); 

        if ($result){
            echo $message = "Vous avec été bien enregistré"; 
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
    <main>

    <h1>SIGN UP PAGE</h1>
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
                Name: <input type="text" placeholder="Name" name="first_name" ><br>
                Email: <input type="email" name="email" id="" placeholder="Email"><br>
                Password: <input type="password" name="password_admin" placeholder="Password"><br>
                <button name="send">S'Enregistrer</button>
            </form>
        </div>
    </main>
</body>
</html>