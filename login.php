<?php 
    session_start();
    include 'ex_front/login.html';

    

     $errors = "pleas rgister date ";

       
        // $Email =  $_POST['Email'];
        // $password =  $_POST['password'];
        
     

        if(empty($_SESSION['Email'] && ($_SESSION['password'] && ($_SESSION['name'] )))){
           
            echo "$errors";
            
        }elseif(!empty($_SESSION['Email'] && ($_SESSION['password'] && ($_SESSION['name'] )))){

                echo "pless sin in ";
                
            }
            if(isset($_POST['submit'])){
                
                header("location: hom.php");
            }

        
        
        
    
?>