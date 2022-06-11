<?php
    session_start(); 
 
    
    include 'ex_front/hom.html';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $Email = $_POST['Email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $_SESSION['name'] = $name;
    }

   

?>








