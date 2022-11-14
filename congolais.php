<?php

    include "database.php";


    if(isset($_POST['send'])){
       $first_name = $_POST['first_name'] ;
       $last_name = $_POST['last_name'] ;
       $age = $_POST['age'];
       $ville =   $_POST['ville'] ;
       $univ = $_POST['university'] ;

       $sql = $conn->prepare("INSERT INTO congolais( first_name,last_name,age,ville,university ) VALUES ('$first_name', '$last_name', '$age','$ville', '$univ')"); 

       $stmt = $sql->execute(); 

       if($stmt){
            echo "Bravo!" . "<br>" . "Vous avez etE enregistrE";
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

    <h1>CONGOLAIS EN RUSSIE</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div>
            <form action="" method="POST">
                Name : <input type="text" name="first_name" placeholder="Name"><br>
                Last Name : <input type="text" name="last_name" placeholder="last Name"><br>
                Age : <input type="text" name="age" placeholder="age"><br>
                Vile : <input type="text" name="ville" placeholder="Ville"><br>
                UniversitE: <input type="text" name="university" id=""><br>
                <button name="send">S enregistré</button>
            </form>
        </div>
    </main>
</body>
</html>