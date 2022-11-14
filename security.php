<?php
    

    if(!isset($_SESSION[0]['email'] )|| !isset($_SESSION[1]['email']))
    {
        header("Location: login_admin.php"); 
    }