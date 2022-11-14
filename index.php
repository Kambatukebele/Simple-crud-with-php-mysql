<?php
    
    include "database.php"; 
    // include "security.php"; 

   
    $sql = $conn->prepare("SELECT * FROM congolais"); 

    $sql->execute(); 

    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

    $result = $sql->fetchAll(); 

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
    <h1>DASHBOARD</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;

  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Liste des congolais en Russie</h2>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Ville</th>
    <th>University</th>
    <th>Action</th>
  </tr>

  <?php

    if($result):
    
        foreach($result  as $value):
            $deleteID = $value['id'];
            $value['first_name']; 
            $value['last_name']; 
            $value['age']; 
            $value['ville']; 
            $value['university']; 

         echo   "<tr>".
               " <td>".$value['first_name']."</td>".
                "<td>".$value['last_name']."</td>".
                "<td>".$value['age']."</td>".
                "<td>".$value['ville']."</td>".
                "<td>".$value['university']."</td>".
                "<td>"
                    .'<a href="update.php?update='.$deleteID.'">'."<button>". "Modifier" ."</button>"."</a>".
                    '<a href="delete.php?delete='.$deleteID.'">'."<button>". "Supprimer" ."</button>"."</a>".
                "</td>".
            "</tr>";
        
        endforeach;
    endif;

  ?>
   
 
</table>
</body>
</html>