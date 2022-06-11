<?php

    session_start();
    include 'ex_front/show.html';
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $imge = $_FILES['imge'];


         $name =  $imge['name'];
         $type =   $imge ['type'];
         $tmp_name = $imge ['tmp_name'];
          $error    =  $imge  ['error'];
          $size     =   $imge ['size'];

        //   $roudm = uniqid();

        //   $ext  = phpinfo($name,PATHINFO_EXTENSION);

         move_uploaded_file($tmp_name,"upload/$name");


           echo $name. $phone ,$password . $Email;


        


         

        


    }