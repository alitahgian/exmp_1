<?php


    session_start();
    
   

    include "ex_front/logout.html";


    if(isset($_POST['logout'])){
        session_destroy();
        header("location: rigister.php");


    }
    

    
  

?>