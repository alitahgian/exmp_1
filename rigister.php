<?php
    session_start();
    include  'ex_front/rigister.html';
    if(isset($_POST['already'])){
        header("Location: login.php");
    }


    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];


        $_SESSION['name'] = $name;

        $_SESSION['Email'] = $Email;
        $_SESSION['password'] = $password;

        
        if($Email ==   true && $password == true ){
          
           header("Location: login.php");
        }
       
     



    }
?>