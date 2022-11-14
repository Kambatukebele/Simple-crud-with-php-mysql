<?php

    include "database.php";


    $updateId =  $_GET['update'];

    //select data with the correct id

    $sql = $conn->prepare("SELECT * FROM congolais WHERE id = $updateId"); 
     $sql->execute(); 
     $result = $sql->fetchAll();

     //update
    if(isset($_POST['send']))
    {
        $first_name = $_POST['first_name'] ;
        $last_name = $_POST['last_name'] ;
        $age = $_POST['age'];
        $ville =   $_POST['ville'] ;
        $univ = $_POST['university'] ;


        $query = $conn->prepare("UPDATE congolais SET 
        
        
        id =  $updateId,
        first_name = '$first_name',
        last_name = '$last_name',
        age = '$age',
        ville = '$ville', 
        university = '$univ'        
        WHERE id = $updateId"); 

        $result = $query->execute(); 

        if($result){
            echo "success";
        }
    }
     


     

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

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

    <h1>Modifier CONGOLAIS EN RUSSIE</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div>
            <form action="" method="POST">
                Name : <input type="text" name="first_name" placeholder="Name" value="<?php echo $result[0]['first_name'];?>"><br>
                Last Name : <input type="text" name="last_name" placeholder="last Name" value="<?php echo $result[0]['last_name'] ;?>"><br>
                Age : <input type="text" name="age" placeholder="age" value="<?php echo $result[0]['age'] ;?>"><br>
                Vile : <input type="text" name="ville" placeholder="Ville" value="<?php echo $result[0]['ville']; ?>"><br>
                UniversitE: <input type="text" name="university" id="" value="<?php echo $result[0]['university'] ;?>"><br>
                <button name="send">S enregistré</button>
            </form>
        </div>
    </main>
</body>
</html>
